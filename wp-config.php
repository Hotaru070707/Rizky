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
define( 'DB_NAME', 'wordpressrizky' );

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
define( 'AUTH_KEY',         ')4Gh0*77d@$@SIXu7eHhi_xkuK7u$O{]E!zW=`w#Ms>O<fK->s#O0)-,qB}$lt0u' );
define( 'SECURE_AUTH_KEY',  'm IKH%*:K$3_y8;Q$]?Vc@w#&AmoI}Rk+Y^:AL[!Y-G(;aR2AmPL(Z`,o~R620<=' );
define( 'LOGGED_IN_KEY',    'EFg~hy4B+ddGT<D$g`;&E2lH1Xxs(.!-ADTsH9yH^aj?Bi.z5oWhXkP]t+~3|htt' );
define( 'NONCE_KEY',        'yJ_/M%2MQyn2<,BRO@dOh3/^Hp)b/9.~-1d@@J=!9-DB]tr#CUQ5z-B&#1:[10Ag' );
define( 'AUTH_SALT',        '7cp}.HnFJ:csw|&@==_Fs6,V?Zso/%[7~1kJTOnmogGO~|B!M;3rEi2ko4L9e=yw' );
define( 'SECURE_AUTH_SALT', 'WbrnXBOrA>2|K&A:S)a0a]|1U4byqhIOp#_!9yyT7|;9K:n,wu`y:O^<%.:&k$q!' );
define( 'LOGGED_IN_SALT',   '%M/8{{-4vGL<i JJUnQ<=JL3KZC]$C6U82NPf&b#%X,$ZIy~xM/N%e,.P,gcoERv' );
define( 'NONCE_SALT',       '~%dt*w<xr8Uk$sAe<zcrVYW^VYSDBg4tiza&NLH>pws7(fJ@qGFX_7~cp!^<!|}c' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
