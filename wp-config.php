<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbs13078264' );

/** Database username */
define( 'DB_USER', 'dbu2131229' );

/** Database password */
define( 'DB_PASSWORD', 'IHLUUPRXQZ6ZflSWOXJPqMmYLDKx1iyW9q1' );

/** Database hostname */
define( 'DB_HOST', 'rdbms.strato.de' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Wa7ew5TWxrQt5jV9ddfNunCFf8QrkM2G7EQ5EMDYMVR92Wep25VnxY3QP6eVVw2p');
define('SECURE_AUTH_KEY',  '2omBirV1sdzO9pEhBBAU4h0jmtIar55KrDDZe7GWbohRcUnS030x9I8V1WH0z34G');
define('LOGGED_IN_KEY',    'HwnGJ6V7A6WWOjGmn2xp9BDHTf8HHLKPsL04qCbRWe8Cgd4Bk7MbiGKwyNLULytx');
define('NONCE_KEY',        'Bwlzv4kmG1sYRQTdEzOq0roofWOmq7XaRrt4h4eh40EDgcfOGzX48NDbP3CikynJ');
define('AUTH_SALT',        '1wbRdKw2mgOOevTNSr7tqjlKuky8KWPAroYxdFHSi5c67X6SLNO4Q94BWTKxXjJD');
define('SECURE_AUTH_SALT', 'MWGvDT6xfiAqFGUyt0r22HyCr1AePhHEJgcceqFRNzw4nMpgjvvkt8O7XkV64Nzy');
define('LOGGED_IN_SALT',   'qUrMO0WftKsdhllVKDPukDJwrIHbAlnFP35u2DAA4M9sJd6t7Ve2ONEcnj62W9jM');
define('NONCE_SALT',       'Z8u5h8s3YwF5PC7aqMuXZE4Cas99I4SRvyYLPlfjdlStXfA6EoKJIBe0YoOHCtWA');

/**
 * Other customizations.
 */
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jiol_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define( "WP_AUTO_UPDATE_CORE", true );