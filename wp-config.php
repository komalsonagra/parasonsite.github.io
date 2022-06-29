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
define( 'DB_NAME', 'parason' );

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
define( 'AUTH_KEY',         '?!jb/kxh%u<eT6jP+_m$A)A*PQI267ApV&1Y*GqI/uofeoq%!qNRF9~m0 I=1_d^' );
define( 'SECURE_AUTH_KEY',  '|1$:pv;wX<MxeC}}&_8dG//f%pMUA^22~tp,ZQh]9Yval5$.NG}(TUQK$C[Ds]=y' );
define( 'LOGGED_IN_KEY',    'B}3GQk5Nx@T=/i`A]MI$8A_~6 }?q:1.{jHna,@86|*ukA6 wt6(e$6iS$r.{?4!' );
define( 'NONCE_KEY',        'tf3`Bk&?g 9x7^P)tQjAIZrH4_iG8o@0;N2xH}eZzAf4^y2Sa_0yzY+!gF/*HVE%' );
define( 'AUTH_SALT',        'I0!giZj+,f MBS+jfkcB `?C-RGK]~`e3EqigLA`xU<X2;b^>QJiecF7!W=8#!/r' );
define( 'SECURE_AUTH_SALT', 'Y*P^w!UVzz>MCm(*}Q%LBb^/.FIx !w@L`]./k&pCYpU<nI#+yYl4gFQjywo}??f' );
define( 'LOGGED_IN_SALT',   'w]g?ly:LTobrzE~/Hd m]NM<e}%kgFA+gbi`0)kYG`3Is`tQ!Cl5!w+L%6I!c4!(' );
define( 'NONCE_SALT',       'x8-9)hjBpO4+QTj-mMG~xe!e,%C|-UMJmpu!`,zhtK=U9v{V%hy_>T_F3G.VBO>&' );

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
