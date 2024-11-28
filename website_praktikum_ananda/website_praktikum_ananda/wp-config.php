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
define( 'DB_NAME', 'web_praktikum_ananda' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '/fTre<lFgz ]i4g;k_M4u8kv) >8,0v >O[:D$4?]h?=oWSs<R*bhvb#o,6s$<`o' );
define( 'SECURE_AUTH_KEY',  '96j9iH.1BnrHwtIM[Zo4(7$Xr,[}y0v4hN#DfA4zj,p11]$VXZ8gPZCs@dX & qy' );
define( 'LOGGED_IN_KEY',    '{hC+2e{pOfzZo1zI7Rj LDd70g<Yw//*eT64@#tz5C+]WzI7.*op@(}vqUeRGg$@' );
define( 'NONCE_KEY',        'R6d8>-;S~@Gs`!y:8zg?{XAg[uZu(|-H?TQ[6e3MuLK 1SMC2ASw~D.6y5*7!z1U' );
define( 'AUTH_SALT',        '/n<L-kR-4R6PEjQ//JaC0o`G,9h@)6cwaG%yH:L.%X%#0am8y^XL{8oT(hrNBI$)' );
define( 'SECURE_AUTH_SALT', 'F+S@PL}c?]J@Rr+RZ0j8b3yardc54.YBN|_C-*L[CGpQl;]G4%HX5FQ3mmak4*ii' );
define( 'LOGGED_IN_SALT',   'd.2T(d^q<qWG0]01^+x7cubx&i`FmsngSNKE0l1x4&1q0mm5yr`-U>#3)Q,mWZe)' );
define( 'NONCE_SALT',       '|jX9Yh|^1$Mb|33i#yfs<sop=OB7{3E<mHbhYjRxxdE]@jPJA5j(ESem] %D4]7L' );

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
