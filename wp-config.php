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
define( 'DB_NAME', 'EarthShastriDB' );

/** Database username */
define( 'DB_USER', 'EarthShastri' );

/** Database password */
define( 'DB_PASSWORD', 'Amrohi@1208' );

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
define( 'AUTH_KEY',         'w,h3qC(z}5C$Wu9Xe(krI#rQ 0eE&y8c%rBps.yIglN_{{v)AS!%TZH{XQ&o>E7Y' );
define( 'SECURE_AUTH_KEY',  'd&fK knE(:~cb1eaySODk2I.[2|:v;A_ lregaTn_NW40~&PI5}.n?SVX+#2vves' );
define( 'LOGGED_IN_KEY',    '-/9Ag3D@>C/$#B5q]R[|V~HqS)DFKgYkmXQIb7JvCO@8?cAP~,WczF/2oj0V;|wd' );
define( 'NONCE_KEY',        '?&kuN |v&wEh/LFZx(T2{]tdNVm2}Rb%v.F$:c0nY%O(1|ER]5m#!~^l;S[?lgiO' );
define( 'AUTH_SALT',        'qURVlMe@{kV8w~-;vQZZh(.eDHT88F5EMia%~dk-`!pOhpX$%huy:/%5^mDGAz!2' );
define( 'SECURE_AUTH_SALT', '&RaR%Fg _(;+R*Qh.3&X@*xCwVzHVPj~z4b?cGXcPvnhoKMNxmk=$Fjhm2hS|*Z.' );
define( 'LOGGED_IN_SALT',   'NU#K9Q{iMZYZs/=-0c_`<nArB/EYpJ(4^&+V^P~#6%cbVlLI1#kX9jou}2f 2S 8' );
define( 'NONCE_SALT',       'Mv}]F@1*G_nj<9xs;g6GMO]p$+FSDe$#jS/`tguMc53VDAI`tX)pXI)VccX0o1GV' );

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
