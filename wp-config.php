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
define( 'DB_NAME', 'myschoolwp' );

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
define( 'AUTH_KEY',         '@R?XMckr`k1y?keKp5^px|$vMVPf$&W@SQ~4>)a:@Izf{^l56s9Wi#sAl+]y~pOg' );
define( 'SECURE_AUTH_KEY',  '$f#nLOyApYas{O<V*c@yEJ@mA%bBQ}?Vq`pSykxNeT8i&G_[=k;xV]uESG>%X*H0' );
define( 'LOGGED_IN_KEY',    '?= fS~_e|FWj&VvWgJ!V9?t,j3Y.v#H) *J|/a7evWiu .F9+SOpJnJI(>a9n:)=' );
define( 'NONCE_KEY',        'WWB&LiFbRC?#4F.U[)+)oKt0pM(pL,=(nl h;?r$CutQS$nM./c8b&ibS:XrEFtC' );
define( 'AUTH_SALT',        'P3X~B}3#sIL}IF-k{lM-2k/+=b.9%ifs_?O16?`h19G5S:S;WrP-*oSowz04GX6X' );
define( 'SECURE_AUTH_SALT', '|2~A?n*}hV:NteDJ/bdpuZ[ue0I~9ceMq,@I%qyUv%u{o-Xw(OgGm#2!eYI4spsW' );
define( 'LOGGED_IN_SALT',   'gfkmDyDhHCg]MlEcutzB*,|lWeIMlDMUu zLl^9{lvdD|07i;@szJkFWbQT2%<%s' );
define( 'NONCE_SALT',       'NEeC73tx6,Lw(7?P|#!=>O[a-7Bq<=}2pyyNMYLZ+DsbU0&Qvp]NB54s4xm)IBwC' );

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
