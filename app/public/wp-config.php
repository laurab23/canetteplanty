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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'bnL8mBoMOMLx27T3Lel0GYR1zV5NzIk/C1HAcf8ww1DSQVuVPJKKohgkalMAxG8NA8U/ij9lU67acLukoghdwA==');
define('SECURE_AUTH_KEY',  'j2S3DDScMGkpB7aFZuePSjOhDMwVQkDWTaVVdSEsmlgUGeQPwLgq2Ar1WK6EzNNG4WEwMIaptC8i0Pf+e6tblQ==');
define('LOGGED_IN_KEY',    'TMpuuEzBRDzqmVH8Uk+sLKGPdLpqXp1vPBEZzIJWlz3ErWp4CaS0hVuW46vzdeQS2DVkMheeOX8S4LIBxTEyuA==');
define('NONCE_KEY',        'Ii5dWFVIoGKpfQaYTdYeNPDqxDez2qbaOfSICOaMHs359RkKZZRxoMqh/D3w19eyef1MKf81G8oXVVgMc6QV/w==');
define('AUTH_SALT',        '26tj9KVg7lb2bt4+qZmF7vGVBnRLzI2+PIOVWygEkJUV7+OP3Yt6dcYVfNj391cweQN2z2y1JJIFkh0FCswjDw==');
define('SECURE_AUTH_SALT', 'TzXtU8FoiEvt5g3gZx+dHUfXchUAL2R4cBijUTf7lw5ZO6QhH2OV2zoueyFup7T/akA8rcipeliSizqJvr31+Q==');
define('LOGGED_IN_SALT',   'kn4FDcdD8BXnTbZO8MnND4IwnJHLFh7yBc5sZqipw88dDPxQVGtrN9u8l6MHGdKxSPTMpSfmHeL+7mkU7XApgw==');
define('NONCE_SALT',       '/2BMbN9kFOp+SYbrcNwLMXthfemRDKlsl0W6KngarPgH6mQj5Hs/u15dl7EOO3ybCJlDT0QH5JpzdWt9Q3lp5g==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
