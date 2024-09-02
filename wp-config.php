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
define( 'DB_NAME', 'techno' );

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
define( 'AUTH_KEY',         'L=AFJ_>eh5-bqM#AoxeoBE0o-4sx:!eX,)lF4>Tb-il2S;_;7a0t1m@eX=3C,58}' );
define( 'SECURE_AUTH_KEY',  'j%2WK`Zg2.3>R3kEPrz3&6TUxl&=3[0YrCQ(WoeM96pMRBc%P<Gd+8pA(K2d}a,&' );
define( 'LOGGED_IN_KEY',    'Edz2?50]%7cEy#CkF L*M_o,^Z7T4Gg3`|7Y7> Xxe$Q@{Vqu}{XzA%i|Gpj+zN8' );
define( 'NONCE_KEY',        'D$Iw7P]-,MWY)HX3xd?O3q:h-X3QmN?paEL#bE-8Z?c}ogCFI0#OS|&h6Y_hZ+/F' );
define( 'AUTH_SALT',        'nLIB;>AVZOo[.I3oH<;B^o%~HTfVPh`t.9%r@bg6EGXZ=+!EYdkqw3b%Ux.EHW+s' );
define( 'SECURE_AUTH_SALT', '9zywV T4Jh!r#L=VZ7T|0!ppRyYWLywbyb3bF@2@w3BSp~B2-q1X)ipu<){$@E3A' );
define( 'LOGGED_IN_SALT',   'z!SKMD@Q=#p}1}!#D)wK !sSG[K!z`#nI[iA-=u(JacXHwTDam}+yC^ tg*d(yc@' );
define( 'NONCE_SALT',       '#h/b!9/~=l{~QL^s/4|]W~U{tSJ,daed]Kq!;6a)NAmNFgrqNWRhJAI-8r@9a!7H' );

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
