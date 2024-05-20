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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dfgn' );

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
define( 'AUTH_KEY',         'uGTyepU;z{8gKlm$?P-HH}@j.JPb6AZ4bgc}LKpF0A]<Cc}o)h-d$P:8.X&^KDhU' );
define( 'SECURE_AUTH_KEY',  '%{:N<8*3h6J#IiNHVJHMUzEd =Gt*!P# S;uxq5,0%Y}xIXi`%;RU&|Pm>}qKbky' );
define( 'LOGGED_IN_KEY',    'sUt#:j]DBf2= .:_F+ql*_vHAmL!nu-s&-o/lyq];d>avXJ:Nx7d;d7&d[43v=a!' );
define( 'NONCE_KEY',        '4Eq@3Zz-hNGEYt]IRQK,Rk9egK!oq<$+b+lg`[Rf,)otd4R1%riejI22enGJ)13K' );
define( 'AUTH_SALT',        'fFJt$J}E&0UBI=cH|A_cx:c mqxMPx;3yZ~XkuO>gc%Xph%C]uc1>}T=u|dnbF2/' );
define( 'SECURE_AUTH_SALT', 'Z7oB|<x=25@nii:qOBR=|hZE3d=<$lFvN2k}ZmdYg/|m~|vu<1*9fp600Pc ;Nl+' );
define( 'LOGGED_IN_SALT',   'l/ 4w<eM*hvS)FM)+^I<mZ.Vq|R.D6Dg^<[PoWRZw,E:_{OJ5if.9q7qDR)1b V$' );
define( 'NONCE_SALT',       'o^DqVf%K!s=48,=,@z-`)S)*)t_&1DNG<6ZH1EuuNU^9_y|*`/tAdy~2)IH9[R7A' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
