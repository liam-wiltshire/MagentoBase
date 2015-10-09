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
define('DB_NAME', 'magento');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'XPjx%|]Y5P!X6{+dgRz@6UFa2NW:qKl7mLkh HSxn6]lL&n0I<oTjDzR-?(Yz?D6');
define('SECURE_AUTH_KEY',  'X18(vvF3vnH%![n^S]!vDbN-?3/RviOLOmfO5*}lP{/b-A1$#/2N|CnnJ%==6},?');
define('LOGGED_IN_KEY',    '2C~g-32)B+2y)c5!ble>q5K(iPBIt&R*Mr|=KTGjiwia?7liYJ}^-6GY_e-+]vW)');
define('NONCE_KEY',        'vY%.Qgwvx3acMAok1i}rTztsKobTB80WXDukp|ijB:eK^k04JI-?BP#EMbU]5pNP');
define('AUTH_SALT',        ')%p38$V_0eyIj8wi:2X,ZJw]aH{M3eOaD05G,hm4aStD$n^aZJ;;$w_P]@Hoxz6u');
define('SECURE_AUTH_SALT', '6,[Rk*^+2&a?wu<QCPQO~_vaebJP{@{y#,bR#,/vZ$35E=x+A}.V&SU<U7LJsemx');
define('LOGGED_IN_SALT',   '!{zjEx9)a?Yon+Q-3q<1dG3=q#XdY+6|y-ZZq0Hcgj^o;.2L;nr*e.hv0OLz#xQ;');
define('NONCE_SALT',       '%s>[QtUx]r#9N+rn+gm,#dTc)xc$:Ml-7_jgS+Sj0<qE^wI,H@_>@0s#/nIA|_uy');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
