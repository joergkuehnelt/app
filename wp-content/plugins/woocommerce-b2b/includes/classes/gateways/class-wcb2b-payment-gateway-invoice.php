<?php

/**
 * WooCommerce B2B Invoice Gateway
 *
 * @version 3.3.9
 */

defined( 'ABSPATH' ) || exit;

class WCB2B_Gateway_Invoice extends WC_Payment_Gateway {

    /**
     * Gateway instructions
     * 
     * @var string
     */
    protected $instructions = '';

    /**
     * Gateway order status
     * 
     * @var string
     */
    protected $order_status = '';

    /**
     * Gateway allowed shipping methods
     * 
     * @var string
     */
    protected $allowed_shipping_methods = array();

    /**
     * Constructor for the gateway.
     */
    public function __construct() {
  
        $this->id                 = 'wcb2b_invoice_gateway';
        $this->icon               = apply_filters( 'wcb2b_invoice_gateway_icon', '' );
        $this->has_fields         = false;
        $this->method_title       = __( 'Invoice payment', 'woocommerce-b2b' );
        $this->method_description = __( 'Allows invoice payments. Website admin will manually invoice the customer.', 'woocommerce-b2b' );
      
        // Load the settings.
        $this->init_form_fields();
        $this->init_settings();
      
        // Define user set variables
        $this->title        = $this->get_option( 'title' );
        $this->description  = $this->get_option( 'description' );
        $this->instructions = $this->get_option( 'instructions', $this->description );

        // Custom options
        $this->order_status = $this->get_option( 'order_status' );
        $this->allowed_shipping_methods = $this->get_option( 'allowed_shipping_methods', array() );
      
        // Actions
        add_action( 'woocommerce_update_options_payment_gateways_' . $this->id, array( $this, 'process_admin_options' ) );
        add_action( 'woocommerce_thankyou_' . $this->id, array( $this, 'thankyou_page' ) );
      
        // Customer Emails
        add_action( 'woocommerce_email_before_order_table', array( $this, 'email_instructions' ), 10, 3 );
    }

    /**
     * Initialize Gateway Settings Form Fields
     */
    public function init_form_fields() {
        $this->form_fields = apply_filters( 'wc_offline_form_fields', array(
            'enabled' => array(
                'title'   => __( 'Enable/Disable', 'woocommerce-b2b' ),
                'type'    => 'checkbox',
                'label'   => __( 'Enable invoice payments', 'woocommerce-b2b' ),
                'default' => 'yes'
            ),
            'title' => array(
                'title'       => __( 'Title', 'woocommerce-b2b' ),
                'type'        => 'text',
                'description' => __( 'This controls the title for the payment method the customer sees during checkout.', 'woocommerce-b2b' ),
                'default'     => __( 'Invoice payment', 'woocommerce-b2b' ),
                'desc_tip'    => true,
            ),
            'description' => array(
                'title'       => __( 'Description', 'woocommerce-b2b' ),
                'type'        => 'textarea',
                'description' => __( 'Payment method description that the customer will see on your checkout.', 'woocommerce-b2b' ),
                'default'     => __( 'We will send you the payment invoice for your order as soon as possible.', 'woocommerce-b2b' ),
                'desc_tip'    => true,
            ),
            'instructions' => array(
                'title'       => __( 'Instructions', 'woocommerce-b2b' ),
                'type'        => 'textarea',
                'description' => __( 'Instructions that will be added to the thank you page and emails.', 'woocommerce-b2b' ),
                'default'     => __( '-- You will receive invoice as soon as possibile --', 'woocommerce-b2b' ),
                'desc_tip'    => true,
            ),
            'order_status' => array(
                'title'       => __( 'Choose an order status', 'woocommerce-b2b' ),
                'type'        => 'select',
                'class'       => 'wc-enhanced-select',
                'description' => __( 'Choose order status you will be set after checkout', 'woocommerce-b2b' ),
                'default'     => 'invoice-payment',
                'desc_tip'    => true,
                'options'     => $this->get_available_order_statuses(),
                'custom_attributes' => array(
                    'data-placeholder'  => __( 'Select order status', 'woocommerce-b2b' )
                )
            ),
            'allowed_shipping_methods' => array(
                'title'       => __( 'Enable for shipping methods', 'woocommerce-b2b' ),
                'type'        => 'multiselect',
                'class'       => 'wc-enhanced-select',
                'description' => __( 'Select shipping methods that allow this payment method. Leave blank to enable for all methods.', 'woocommerce-b2b' ),
                'default'     => '',
                'desc_tip'    => true,
                'options'     => $this->get_available_shipping_methods(),
                'custom_attributes' => array(
                    'data-placeholder'  => __( 'Select shipping methods', 'woocommerce-b2b' )
                )
            )
        ) );
    }

    /**
     * Output for the order received page.
     */
    public function thankyou_page() {
        if ( $this->instructions ) {
            echo wpautop( wptexturize( $this->instructions ) );
        }
    }

    /**
     * Add content to the WC emails.
     *
     * @access public
     * @param WC_Order $order
     * @param bool $sent_to_admin
     * @param bool $plain_text
     */
    public function email_instructions( $order, $sent_to_admin, $plain_text = false ) {
        if ( $this->instructions && ! $sent_to_admin && $this->id === $order->get_payment_method() && $order->has_status( $this->order_status ) ) {
            echo wpautop( wptexturize( $this->instructions ) ) . PHP_EOL;
        }
    }

    /**
     * Process the payment and return the result
     *
     * @param int $order_id
     * @return array
     */
    public function process_payment( $order_id ) {
        $order = wc_get_order( $order_id );
        // Mark as on-hold (we're awaiting the payment)
        $order->update_status( $this->order_status );

        // Reduce stock levels
        wc_maybe_reduce_stock_levels( $order_id );
        
        // Remove cart
        WC()->cart->empty_cart();
        
        // Return thankyou redirect
        return array(
            'result'    => 'success',
            'redirect'  => $this->get_return_url( $order )
        );
    }

    /**
     * Check if gateway can be used (restriction by shipping methods)
     * 
     * @return boolean
     */
    public function is_available() {
        $order          = null;
        $needs_shipping = false;
        // Check if order needs to be shipped
        if ( WC()->cart && WC()->cart->needs_shipping() ) {
            $needs_shipping = true;
        } else {
            if ( is_page( wc_get_page_id( 'checkout' ) ) && 0 < get_query_var( 'order-pay' ) ) {
                $order_id = absint( get_query_var( 'order-pay' ) );
                $order    = wc_get_order( $order_id );
                $items    = $order->get_items();
                // Check if almost a single product needs to be shipped
                if ( 0 < count( $items ) ) {
                    foreach ( $items as $item ) {
                        $product = $item->get_product();
                        if ( $product && $product->needs_shipping() ) {
                            $needs_shipping = true;
                            break;
                        }
                    }
                }
            }
        }
        // Check if choosen shipping method is allowed
        if ( ! empty( $this->allowed_shipping_methods ) && $needs_shipping ) {
            $allowed_shipping_methods = array();
            if ( is_object( $order ) ) {
                $allowed_shipping_methods = array_unique( array_map( 'wc_get_string_before_colon', $order->get_shipping_methods() ) );
            } elseif ( $session_shipping_methods = WC()->session->get( 'chosen_shipping_methods' ) ) {
                $allowed_shipping_methods = array_unique( array_map( 'wc_get_string_before_colon', $session_shipping_methods ) );
            }
            if ( 0 < count( array_diff( $allowed_shipping_methods, $this->allowed_shipping_methods ) ) ) {
                return false;
            }
        }
        return parent::is_available();
    }

    /**
     * Get all order statuses available within WooCommerce
     * 
     * @return array
     */
    protected function get_available_order_statuses() {
        // Remove unwanted statuses
        $statuses = wc_get_order_statuses();
        return array_combine( array_map( function( $key ) {
            return str_replace( 'wc-', '', $key ); // Remove prefix
        }, array_keys( $statuses ) ), $statuses );
    }

    /**
     * Get all shipping methods available within WooCommerce
     * 
     * @return array
     */
    protected function get_available_shipping_methods() {
        $shipping_methods = array();
        foreach ( WC()->shipping()->load_shipping_methods() as $method ) {
            $shipping_methods[ $method->id ] = $method->get_method_title();
        }
        return $shipping_methods;
    }

}