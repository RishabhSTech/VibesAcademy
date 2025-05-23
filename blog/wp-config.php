<?php
define('WP_CACHE', false);     // disable the cache
define('DISABLE_CACHE', true);  // disable the cache
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
define( 'DB_NAME', 'thevibes_wordpress' );

/** Database username */
define( 'DB_USER', 'thevibes_wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'DH2Hp7PLNzZArMps' );

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
define( 'AUTH_KEY',         'kJjmW)9z>*I`X}l^bTqhuVH,Kv|-3Mz#X3]Kc_2.z3*MGT_.D7<rId@gqVN4?>Wb' );
define( 'SECURE_AUTH_KEY',  'M/]N5-%qMBlso[ -L!)Z/IjJnaUPTg(}]HodEsh>;^,kOPr`8H/TEf!0pEct.t`8' );
define( 'LOGGED_IN_KEY',    'ik@fzU.C/)xgO9u,re^uQgVOAWjbsC[k i{AlX]A2PNqI~N]Ct,)J!p7s(Z6-iG~' );
define( 'NONCE_KEY',        'T oi-`zdqIA#Wd.!!sA|u|?f:z Q!WIq52lp<GjZ.Wvv^mYmRD4)5+b>BCXZ8aWz' );
define( 'AUTH_SALT',        'F_g?UbkpH-]~5ulO2#A]N3%*pLp?LT~yX*[Pp1JO$BE]aS=h[-z,Y=wL3QMp]{4u' );
define( 'SECURE_AUTH_SALT', 'I66V*TN&1*KB-SpyuEd.7cc`t=ZG][B$+v*y3TLQ]p8*X%rD4[EewbmlVZv`YBb7' );
define( 'LOGGED_IN_SALT',   'iD QQ|Si_jqg?~H/nYedQMI;y_M1ux|s`c&]Th32W}cOZzyCMC[`4&=y~j*p{0TN' );
define( 'NONCE_SALT',       '}?%VGG>.07(Q4/Dp/wB^S_Ao7eTqQ l+9k%,qWrtO NtH45s~Lx>PM#eQ_,YS)Gd' );

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
