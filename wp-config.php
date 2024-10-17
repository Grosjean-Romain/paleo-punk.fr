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
define( 'DB_NAME', 'portfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'ejEZ|PY6+2n|mVrb4Ry^+ZYtP[%^fnqmgiN>{`f;*C9h@.^;ul2NC1n{)VpV82N]' );
define( 'SECURE_AUTH_KEY',  ':q EDHS>XolO=t+}VA=^qgW2(CwHHbjiP2Ywtb$##3IXYU>%L;aG*jDcd+3~#g$s' );
define( 'LOGGED_IN_KEY',    '{^8ZxnSf&)H%7(Ae&;GJEau6#qP%2)/@>A]m=ydeq8) *xt8iSp^=e+ =uGxkY|~' );
define( 'NONCE_KEY',        '/XkQ{+6JPwYxX?EZcHLh_Hpx-!))w! <@<^{=w)g`{HKvT8HBm72+r7u(LcI$R8]' );
define( 'AUTH_SALT',        'oBmR?rJ/C*CRu$;Ldjdo,L3Z/Uap0e:M`1^U`}H3Vmuc~*(<A,6&W3)Un3[x&iP{' );
define( 'SECURE_AUTH_SALT', 'QT5&)MmQMg?NKV%gRJ*v>BT{BXU^n4`Rb+1JSB-F>d&V^lKxg!;^h=)6i$pj{k1$' );
define( 'LOGGED_IN_SALT',   '$L5Z;jza:`,!oGG#b,31-_/.4:)4b^CdH]z`):L#Uq[;($3xc:cL`W$f %%lF+/[' );
define( 'NONCE_SALT',       '3umvXmzq-UV=JlEe<rU?1GDGr}ESf]]ccGugVMa;6sayaBrf75/VFQvI$UglOX}v' );

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
