<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'avautomation' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '{K<b]@#9|^mVr:wM9wz_4U)k6GsH}kO<4X(Pu?LR;kTGQvx3ybzFf%0E)3Ud}wZ@' );
define( 'SECURE_AUTH_KEY',  'B5WvbN<;_{!!??(9(Co*=!_*5>&9!SJ&n +s68e=_Xaj!h;JQZgeibo@#>Ke9pa`' );
define( 'LOGGED_IN_KEY',    'x%()r?[>@~(Sh.DbyB*B0.K{G)|[^Qk.GdO]=*EOml#6gwVLlM&cnn&Ug5TTM2_X' );
define( 'NONCE_KEY',        'vmfcrQ>HUH|DWOg{(Tw5k_1B6mXv1 kVE(87?Jc _e?4{_Eem502#DD1&W1T`H<A' );
define( 'AUTH_SALT',        'm2PzgX}H;|}|u>Uo1qVMC_d8mIyMHg:FH|e12RA?CM{y3KQ2`%Yw`d*fwnU|OoaL' );
define( 'SECURE_AUTH_SALT', 'RBmR_5[#l24{4EQ*J.17w=>BUps=xYk@3!EYNQfRT Lrx*f_H3Q^TlO:<6SeZ%}5' );
define( 'LOGGED_IN_SALT',   'GOAb))djBnkgr7!%Q3LzDB}V5WG*WftC8>FI`WZr-9g^?(#0nm%@jHsGoV#B4^UX' );
define( 'NONCE_SALT',       'uv)800li~JJI0gr`.%TQ#qXC6(6:CBqAQAZ@>D9nY%Z9juod[#%!>0l2c+O@Z.o/' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
