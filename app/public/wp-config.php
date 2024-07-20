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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'R]2 kkJ+uzhw~oU-n=esX:>*)NWtcC.;x>FENJ6hc0og?}#&x=UN (S<5~p575]l' );
define( 'SECURE_AUTH_KEY',   'm8tO39rFBusC2N3Rp(&4 X-GDc<bqf5-_RS5*bq#1^)CnuLa5i<M+Do!klIS5MVt' );
define( 'LOGGED_IN_KEY',     '3&JMN3-|*d5CG#[64Av|lYeJihC<R]o><(R2P}`D2gf4W~_Xsms)>TFI-w7#`}W+' );
define( 'NONCE_KEY',         'Y<$F}Q_D7U!yL%-aDbxf@-Q-}qb/mJ}b[Is+jv^g]d,ER![0!OYF_K,kUHi&Q3A?' );
define( 'AUTH_SALT',         'v%#hLjo}.WYO8SVN>.3kx*)M9|gSZ9oYJ@hi;<fdP18<B0+%j}/VDGVX/Xwc(Yi3' );
define( 'SECURE_AUTH_SALT',  ']x{C^bg`F~krcg}3k`u`&-oG QXgs@xdg3-kNStG;5a&d]zZ3=.W(jMbiuNY6ASB' );
define( 'LOGGED_IN_SALT',    ' 8.smi8,vvgE@zjR1ZiV1>$<2$c=J[(J6PjOeTl#O*%1OZ6[pwrj*ZY#tmF~X^gD' );
define( 'NONCE_SALT',        'S:`_d3QV3Zu]=*M,;gby@=!O}<:8=nGa?NYu2$daId,!D!s|l{<9;UP$}e4~,1qm' );
define( 'WP_CACHE_KEY_SALT', '(u),TmZBg_w&w0U9~:,p[3`]-9`F@$[-h+A#|]1Z6lqI/Ql[l?^#XOk}ee}DhDMB' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
