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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'd132032sd571423' );

/** Database username */
define( 'DB_USER', 'd132032sa519634' );

/** Database password */
define( 'DB_PASSWORD', 'N4N7FMUWvwmk86529' );

/** Database hostname */
define( 'DB_HOST', 'd132032.mysql.zonevs.eu' );

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
define('AUTH_KEY',         'aBlEW8YtRdWJxLJaWgjxqJ0hFTh7iX9AjN1fVnSYUoWcv1XAeaX4Dh7Y1WkCpDjW');
define('SECURE_AUTH_KEY',  'IxB2WBNcKMmQtf4Tj4rTgJkkTEst9DHFPxG3yluNBpj251AwIlc0nKUlXmBcTMrQ');
define('LOGGED_IN_KEY',    'Rw58qjGGSu0V6eeo1mOWzwoaJD0dxomJSF7q8ZKZPQSl3dsF8EDkMsMlv6Qbtglm');
define('NONCE_KEY',        'tBjlu3gGZR1uwxOdybnSYkV5yqk0LcNNAmxi1uUqfJDPkmqFkJH09fSPnv1myNPu');
define('AUTH_SALT',        'AW959yFtO5UgGSHvKl0kpDRTNF6NhpDiUOeVziTDmBMSPyVaS0VJVQJVbiSdNtOf');
define('SECURE_AUTH_SALT', 'LVePiJFdFYddC6MXRlyn1FCFa9xsdPpHueb02dinbv8HZjFqBvDvsZHwcj0FsWCE');
define('LOGGED_IN_SALT',   'T2AD0K1x55VX3KEehm29flFBmB4fCY1FoSQKoyzsNinEDJdvAtmB48x5iLEcM28f');
define('NONCE_SALT',       'uxWvBglAQP98AMRcGfBX3XiSn4cOc8xpeRPVaVSnswjQ1iZA6HfYMTv3FvsMsnAg');

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
$table_prefix = 'axsn_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
