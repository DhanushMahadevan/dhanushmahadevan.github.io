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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testsite' );

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
define( 'AUTH_KEY',         'BAa!{A+>)qS{^eT p6+jN>&ypJ.|N@O8-:U2l3pIPm|ZEf;9;M?^AP*Cw==o)1Q ' );
define( 'SECURE_AUTH_KEY',  'dLNypSEWWg_KG23o@@Z2x_L]j>F] nzmV!t!S^=hqKz/*~<4t;,FF,x<qK ,8Rv#' );
define( 'LOGGED_IN_KEY',    '~T<r9rqpb|{F[LsZ4$~l/E|-Ts5nBIfM,D*nCVCqFv{vVvKAMR$N!lfqn$bJ6;m-' );
define( 'NONCE_KEY',        'G.0+`2yOtZCB2ec~mtg!,8%~(/B!`dj*]vA-`1A]X9~)S*+tobDpvgc5$Ebt@i}I' );
define( 'AUTH_SALT',        'X3FerGpek&LG=Wf9j?PNRd{pH]=@#%N9y[jzXl~)R4^a?)VZ$?wsU-=j(}vag%6G' );
define( 'SECURE_AUTH_SALT', '?|JZ6w+&BV4VPe}$dO-t{2RD7=#9Zbb6mc`8|$HtK,iEKTNU4P|4%dpiBl!.vQ`A' );
define( 'LOGGED_IN_SALT',   'qljZx7mlP,4XHhXR.%q_1p.Uw.B+.qpavkzz!&K|kjlGwlD#C$S^y,3%X;M8FH-)' );
define( 'NONCE_SALT',       'hWorx5D{}l<pjzn;H~VvaSDWlIY+j-iz|0g^U_fN5*WmyQFN9,QlZE!.m-Y[vq+g' );

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
