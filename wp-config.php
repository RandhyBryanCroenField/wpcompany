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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpcompany' );

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
define( 'AUTH_KEY',         'E<($<u6r.8a+~n>&2FNzi%BQ1xYlg,,x_]0w97Z=(x?Aw51y/Tw)AZ#dW`^-96mg' );
define( 'SECURE_AUTH_KEY',  'DBeaE/=xIMY~1:E06{6q_E1ub 8=#><KW9afQGW=)fJ]6Evd]y!mgp~!pGoc8Va_' );
define( 'LOGGED_IN_KEY',    'RRw)=aE1S,U/`%1 tFn$?O)L>4S{/!e&nyuK#d{zBUH8$;C}Pdl2is~KZsxuO_F%' );
define( 'NONCE_KEY',        'wJRS8/u bRgR0oJ@Zsb+PMar71/]oyD[v*U*}89~R@YwY}D)K;L.*0-rV` |TF;3' );
define( 'AUTH_SALT',        'AP&~7NQQvA+?$Xo|/!3`P6fZHhgBg*|L#&oeiwBkp>h@ y7+Mt9r!=pDz %}O?t_' );
define( 'SECURE_AUTH_SALT', '2w/|X}0ak;8ara&x16Kh0egPko599ri|dV~OGX)R|<y~UmJ_c^8e`.  2d^ie@r1' );
define( 'LOGGED_IN_SALT',   'qG^FcZagGcT3-G5l[w[kHLx)ep?Md5wuScs;<FAm5GOkPH@SJ%:}vm=FD::Od<E&' );
define( 'NONCE_SALT',       'U&d8dM^*4{ T^( 415,TS(c?CcJ1>%(]hN/Vn$q}iQK1s?57X,_^h[_tyFnjQ7:a' );

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
