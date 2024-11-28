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
define( 'DB_NAME', 'web_ananda' );

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
define( 'AUTH_KEY',         ']y0b}qmX;9oU|l&eHG!ktXVv-dL=Vp7XABD6@3[&6BJGZ:k`VaWUt%V:C}75Q26D' );
define( 'SECURE_AUTH_KEY',  'V86+DcFlYO>Q1RS),P2y3~C<N&@N+W|ALp@DD+1)WL:J6:9oD=inSJYhK7WWTm6Z' );
define( 'LOGGED_IN_KEY',    '_&wN^-DVTS2!Vkgg1,E0HLUBh%:T7IXoV%;>R`LBt)<H}za=?>G8:UXK4a>vVDtw' );
define( 'NONCE_KEY',        'gl;akknb0#9d&J-~r 4WuZI7gw63-:mg;z%$yx|ZKDKh,-XD>SO?[A6.}[v~AU~G' );
define( 'AUTH_SALT',        '=2H.G[:2v$.ncO4[Q$c %dysE57B9Py2n2035^j4QJ+b&q]v$E@F&G63]4KF;F4I' );
define( 'SECURE_AUTH_SALT', 'o#%~ p>A%4}Xb8YnR1I3krUoG]=(sOR4k?. mQxBt*]!8|MT^{1;E/P_sAt~{.Hk' );
define( 'LOGGED_IN_SALT',   '!f!9@({DMz.;kv<N+7*Y&%;04*IOZhz|rI~_9g=:-r)qH@@C0DB$X64Z/~~?`/$5' );
define( 'NONCE_SALT',       'WYiY=1Lu8OS9]{$6Qrgv9sn$9h5,n^bI7^Z7@<41{Cc$g@C}D)-V8wm8!lbiHs/~' );

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
