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
define( 'DB_NAME', 'wordpress_brief' );

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
define( 'AUTH_KEY',         '|1:sA,(MjStkcxZS CHmo$I7+|e?S.KHd-yu]3]I87yN0)9FT{A$lD]amr5r7AHk' );
define( 'SECURE_AUTH_KEY',  '#/@WC{b/`B^as-GiBCsLg)p9$<l0chE1R}~FkVF`[KiqqK5)a)vhGX?7!?h%9v.!' );
define( 'LOGGED_IN_KEY',    'p*U{$,G>e# ri>ApB_iTb0u;M.CS;ooTNN`^=yh9lG_>y*hW=|Q7U$^S.T]KjO2>' );
define( 'NONCE_KEY',        'p5]I8+,]-=iEL?iO2`4mj3xsZ9]>3cMbcZF-`EeEl0; vvr:~=pGdHEj6iK}F2<o' );
define( 'AUTH_SALT',        ']Zgf^DZMQdNI(lY2wrh`G!k=v.W&RZ+O9UN kc/v9u4ARTeayg(mz#][o8B{J^~h' );
define( 'SECURE_AUTH_SALT', 'Fi1?^[%%_0*%,-$2a-TYwVh;y;8deNsr0pV2NE u!7p9FS7{c[jSCUZA=(:tea@Z' );
define( 'LOGGED_IN_SALT',   'E*JvR}ki(L8ot_T+/7r]%^fx{nAr:#mZSrZh|==@g5!j]g%AMAHr9HC#/z2{RHKc' );
define( 'NONCE_SALT',       'S(%~)<)VDu}3{h0cV9}a_Wu6MqfLv6ByHkOza|v$UTS+`bUK@20k8-#^O|#coSz[' );

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
