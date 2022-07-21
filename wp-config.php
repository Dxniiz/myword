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
define( 'DB_NAME', 'myword' );

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
define( 'AUTH_KEY',         'X<(^UN9ONQ6p9_#G+Dv,?S9 nz_.PERp%Y+j~yr>N[1M17Je;uP@sd:Z$LEi#[VF' );
define( 'SECURE_AUTH_KEY',  'MUf33tcXB?q_d[ieDPBX+FWCri[TP8)roQ)>YUW1$RYqX8NEPR>fvn<mnfJwl0:-' );
define( 'LOGGED_IN_KEY',    '}~w-cqfn~?<.C4;~2O;6Msf4ROOcL^M+y f+^$T>Eg>9QbRgm,wVxui!8f7WY~X<' );
define( 'NONCE_KEY',        ',3NW32>+9Z!c%;INn i&t<C9B1^)X5^7[x!,j]Z-I+lypgXx&r!>s413tQD:oWPO' );
define( 'AUTH_SALT',        '=)7?Sy?~`pHnA `~pE9HFB Q<{&b!)1:]c`CBo-!ptqPWK? tXAbBoWgQ?hZj2/N' );
define( 'SECURE_AUTH_SALT', '0|ps`vG>s?ymgJ UvY1HA<m/~yBs2)F55?XcRrG/j*%$5EIR7T_J^m$W-{3?p3-#' );
define( 'LOGGED_IN_SALT',   'A5h~dmRRv=vh;;8}VEEREso:$9,w1cQf2F8Yj$V(P-=HbM#J]0n)4uJj|9l6JZWW' );
define( 'NONCE_SALT',       '1y>g7-r6nU1G*;+*(8LD[9tn~StB(h[wBIt{JmRL*j>jG1fv!=]$>j|WU}2t,t)M' );

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
