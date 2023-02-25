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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         ',ECa<j68P|1G:e]i2lJLPp}-:v}{={Ggpve0%$t7F0^?74D~J^3wnc.wbo3rRX#O' );
define( 'SECURE_AUTH_KEY',  'nU.Umh4z/v@2yA=_ri=QwJ@?zOK-fVRxWuH]]4|E*hLLJ*pLZb~AwUh@h`F4/#m]' );
define( 'LOGGED_IN_KEY',    '367sU[q]5U[-i1$**_0{wI[V0LL1CM=Z&,H^GWf88Lo=z^d=G3ZcsE;yM_~g2j2m' );
define( 'NONCE_KEY',        'P}%.+usab^ggDS<[L,3hJ$wYP$(LAxi<7l)o2L2kYH!j<yL+ENl)f9.xNS0,YJ~u' );
define( 'AUTH_SALT',        'X;{dE7KphQ)b@h|3y!qur9s;IgC#IwInN0]3F|Icm=tj>4I6RCET M>wv@KvP6Xa' );
define( 'SECURE_AUTH_SALT', 'kqM!gkgSj^$YdWa)ZyU|b#L=_E=3!Co`BRf*K>n%^=NwVEM>HF;dYDo)0[&G9+9m' );
define( 'LOGGED_IN_SALT',   'A2p;N#d*5yRxo&~a(K6^5H^!JWGwg_fqV{U1.7EDjTY?<6P*oz+<v]B_h/mUrXj_' );
define( 'NONCE_SALT',       '4c*yGUMZORE*Cok= IC&xHO>)MZCe3519O[c=^jwh>Cur}DS/Vd-|?q(Fd@+iE+T' );

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
