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
define( 'DB_NAME', 'datutz' );

/** Database username */
define( 'DB_USER', 'Kasia' );

/** Database password */
define( 'DB_PASSWORD', 'qwerty' );

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
define( 'AUTH_KEY',         '.4D8_R< $$(=(5|(0HPk)gYU=6 tH;xSdq3eI^q==|7;//.Pe`Q</SGtI~5vH h?' );
define( 'SECURE_AUTH_KEY',  '/1wF^Tw}*:zR?O=~!@!+aja[6M0W(w{yp#yr[bf&q0$z9E~quFs&.)+F@KHYu|X2' );
define( 'LOGGED_IN_KEY',    'xB{}[[#s^aI0Wf0>n)%UPb#]O  |nagkI<MCinvd6~WhX7dd#4/!Yp.^6()4[Fjl' );
define( 'NONCE_KEY',        'q%u*gutwD/jKq|[V F(iz1@@p[Dv?IBrT6E|IA5lsutW^rDwNQCC~I$8N aYC/U^' );
define( 'AUTH_SALT',        'i>tE5}i@0A TQ;&?sXnRJEwOcr,bYy9{ =6,N2d&e~XvR`9cY@pA 3cXcIrq,vBu' );
define( 'SECURE_AUTH_SALT', 'mk& ExD{s=`Sbl YI:@s:U6y}ET.iV|j/HqkLP2G`uXxknSpBlUjA(kCe(#xrD2W' );
define( 'LOGGED_IN_SALT',   'DCC)&)NmrL<H>T/n%>^+Hr,>aR?5Lcp|DsO[!zc>1GtP7Y~a~4!*}t$NU]i#AI_C' );
define( 'NONCE_SALT',       '*b A],a ?1~@K61iNQkRW0:k,mSw`%|=I>h,D{nUA1n6g9;O#09J+Lvdz*9,^TDv' );

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
