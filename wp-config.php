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
define( 'DB_NAME', 'WP' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define('AUTH_KEY',         'C hD!W^+5r7a+/Vj!LR:ubG+^VWp*LlYs%LJwT#u`lTo6N}@*5pjG2Ed)dQ#|$|i');
define('SECURE_AUTH_KEY',  ' kF[=uQ+}w~~lK-;#y9jQQRY0i>B>4CBTO4eM%[Q{ZI6E}>hMxg2k>`RBM9!v+79');
define('LOGGED_IN_KEY',    'R#+d(rL- t)?kz%s!c4VL&Z||swf,.2r:3>ZKg_d%n/`$xa2qf2v!>PqPW21wr>b');
define('NONCE_KEY',        'c_y CM[@+eL_=dnrAchd`r):)I;+aSq4DY`~~cJImnp$<uoe~#5L6K$|dX&qYq}.');
define('AUTH_SALT',        'x[>n=E7w}nkjPFg@PcLbPUITzT-:14,J:h-lgLXdX}bz6W#^JqDJFVGH6wad%Ex!');
define('SECURE_AUTH_SALT', '^R?{6248~AR.B%^M6f%zBceXyD84MMA-5OxahNRk*8=Q,-/dJ2(nU1+nZD+CSG+2');
define('LOGGED_IN_SALT',   'tBA)N&>kUrsd~$GH-Aw.C4io X%nsG[{UG$c),<y%v,YE~Z{}YAn+0lwsEWYFj#Q');
define('NONCE_SALT',       'sZ6J[7E-vL0wACRep)-6V$KpY_1%!+Y60Htb5t<AGO{6 ^r]p0VHVCIiO}+.@7ZS');

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
