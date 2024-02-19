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
define( 'DB_NAME', 'wp-myportfolio' );

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
define( 'AUTH_KEY',         'SA}zJjpy;kK(M9iYH!~S<ol0PHsk@uK]Onc%#+*C|`sXQhFGp~#nR#h5pb2Ny@r5' );
define( 'SECURE_AUTH_KEY',  'Zt:eHfT|Nvm%th{N]M1o}MnT8hS^URNo 92QE$U<sN&>z;_Qb}y=rBdl- dmD!]:' );
define( 'LOGGED_IN_KEY',    '3@IttP=2i=*/$J3)]%7YW[D#y8.OKRl?4)b#iPU_?|XW}ab~1ocI1fO9IQ,7#>vp' );
define( 'NONCE_KEY',        '5Bi%YP{jW& x:[({FaA1}j1jw6kamsxYe.vYWA-Bo$AWvp&V`>*g=da;#h~]e1_k' );
define( 'AUTH_SALT',        'hc=i)w+z^^5wH@N1y-]ML)>B ?`;uq[jj~r83p%HBXg%/*h[S9W~IM@.Cs_CaV<&' );
define( 'SECURE_AUTH_SALT', 'M?n.W^:O&PY:;toJfJoU,4X<Ixzmc}[@SLUZ8,x`sjacd:N9rZ:mvuYsoDm0]if>' );
define( 'LOGGED_IN_SALT',   'yh~_:b`Vvc m@)CSL?bv@Zs.zk%o/1]Z-^2Wlu6v0QBGHX`-|QFK]NmwP*59ula?' );
define( 'NONCE_SALT',       'hqE-Q6Rqlh(CYt[&mx6XLZ6CO&F5{n%|[~gvz8U8r7b?s%/<%%!%~ta7QoSFDmwC' );

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
