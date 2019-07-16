<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'teste-frontend' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'J1hWRYF|(bzcKW*3f$1yNgEFZAB<5!mGA^Mkk0$D=b7Q3(f^.?0pll{v#V[p0X/r' );
define( 'SECURE_AUTH_KEY',  'bcVKx8GDS+KwonC[ss^9?~xso!4}Bw4Q#|a= @+6c;b]}cn;bC+YUDN7`_-vj32[' );
define( 'LOGGED_IN_KEY',    'c4J< Z</:+<LYuM!:zi0VN3F?jE.%.|9l0l$_iLS?Cs%loP7y|q3*[U-p05c/wPv' );
define( 'NONCE_KEY',        'YMR*RIZKFA NU<w#~)dz|9EQf3pWxEbNfD).+z7 gf-tWi4-K_l+H1B/Tj#1)=h/' );
define( 'AUTH_SALT',        '1td5~tc,/*XTd/j}Oq6d+>BpdI3(@KdMq[zH}2D*{(zD!{aF3zk8)It!Z(4/()uw' );
define( 'SECURE_AUTH_SALT', '3xY=W:wg*0,;I{lAINQJ~&oW<Q%&K=bJ 0gqhn!LW&tGblsp.ZZJ&`]nzh[fbfXo' );
define( 'LOGGED_IN_SALT',   'tNXatTirLF9.2|,aIqcq =q7Kj[zr%.)`!%[zx@Rv@b>qPaE9]zVKh -<;[%i^L-' );
define( 'NONCE_SALT',       'Lg-a$ViK46gq@,rJ*r2Zy/9EbK|GPUp`Q<L{1Zidk!*v]Z3NzJRY9o]0#Jy7ovuq' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );