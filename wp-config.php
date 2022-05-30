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
define( 'DB_NAME', 'earthshastridb' );

/** Database username */
define( 'DB_USER', 'Earthshastri' );

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
define( 'AUTH_KEY',         '6d6PeRN:^PFaSopaa7@pk(Mo;LcLShJZG^1EC;7t%oCM]71:@<Pu0KJI:#S1}tE$' );
define( 'SECURE_AUTH_KEY',  'qu@o!uX-VB2fCh;A.=H?Keq*nlu>VWHdr&`l q}CX)~sZv~a*0k&;mnn:wAb3=~.' );
define( 'LOGGED_IN_KEY',    'aqUtNl4X@|4g`]l@Z#!y.(vukmqd!UD%Qx7m,GJZ6q4hT`w$zwv<:7gRKQJ2.zGy' );
define( 'NONCE_KEY',        '~nBdGs*[FmQ`g1n]e/1n%n}6c?0=GkvNPil2$nS8sX2EB}vO5,eN0_gDH:I,$U:k' );
define( 'AUTH_SALT',        'muLcX)$3h:b,i)R?ZQ_XzI/70eW:e$;8 zTmSlTD)ZfkER~RHC{?kd*aYm:{mq }' );
define( 'SECURE_AUTH_SALT', 'DXKEK> LZ)jiu_oH3Xi/8o|rv0Rx@sH(Wycv==YQv{v!bp>m[^89ub8g1(nAi35a' );
define( 'LOGGED_IN_SALT',   'wH%3Sx]X~9wqtv05xJh{gOwFk<of&2`WnjI9cb!OhmC12tK[5e*x}xWdP1JDB(L1' );
define( 'NONCE_SALT',       'NG_!ca5i 6ui-._R?vZE9s&xiROtU9doi?q}PQ2BD1KuRQPgeErKU$M4J7.mK]Ni' );

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
