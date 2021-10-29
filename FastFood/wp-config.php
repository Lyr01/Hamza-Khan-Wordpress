<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'FastFood' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'Xft4J4ZJzYTon69a0Ogz6PeMTAlyr2o8JneePiqzeoF7CX7IoSMM3vNaj01RZAgc' );
define( 'SECURE_AUTH_KEY',  '9HKUhv6c7hhL8d06UWfpWYcpLu9DKXSY61mTJmrmHMhDICIj7cxmEWrYEk4we1nY' );
define( 'LOGGED_IN_KEY',    '5WnXS7seukWi4zO4FO8sWaCNXVGxVMEOVelUOPKk6S4k9Hh9jymWORyBbdjAZw4B' );
define( 'NONCE_KEY',        '0OL7Id4ArE1Kb2bbfG3wZL95EFaOR9q6BlP1dWQ2pjLAj9bHcYFHk15F6qRjevhh' );
define( 'AUTH_SALT',        'cPPa0GOKkjFBygjFn0peSt5ubhSvliwDSX7Ad8KBJpXh5Nca0ykYXMUmKcMfML8k' );
define( 'SECURE_AUTH_SALT', 'qQWFZ3D0xVH3xOQUd579Ery4IIgFxFCwCvBfBVNU4Ehpk3ulJdS83JRcSzpVrmi0' );
define( 'LOGGED_IN_SALT',   'RP6AcgwP5s630FMTKq8hjEyKfXkjtfJMQXk1ln2Vo2IX5S3eWZj7BRX0txLleiMJ' );
define( 'NONCE_SALT',       'p8CM26LlPD3qQpEn6pkTymURrKwgcEvVJlRQGA1rKQfMvM6CT0lYOrNx5eBVL9NQ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
