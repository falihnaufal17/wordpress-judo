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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         '=dp;u_#_hncl7/nQ`gCCNXt[N@1J_+&^jNgS<k[CPkS3K?~OW@D~g=%)wadfY9<1');
define('SECURE_AUTH_KEY',  'XGvY.fAKSj}hpP6%{G7h-{u~UkI;7`EuxN3de7TL=_cZ{d#Hj+zCYP8ok9!!P:5.');
define('LOGGED_IN_KEY',    'ZbY1!m]tp-z~(kwM+>GD`42-l/VpO~,j;yhQ|/u$UJ^V3;PPO(yk#OgFdd@>~9Kr');
define('NONCE_KEY',        ')Dmp!>aT23C@VvBm2QC6q |u~FneY^IWlOn?9|qt9<UWvqucJ<1NV%YWaDXnH_q8');
define('AUTH_SALT',        'PL7?:ok(V1Ym<)Hu9HE^ 4}`mnXQjE`Ss$1c>hmNaB/AygRoul<Ap]FlcIx$;A`e');
define('SECURE_AUTH_SALT', 't#>72 ne^YOyggX5qaLCRBa-f4X6 A^.yV>0QwIX[lStH3oxPGyg~4 Ti|0R71Ww');
define('LOGGED_IN_SALT',   'Na;SX{[UbPqtwB}=^&X1aR,&lZw-:|6$W4@UA+giF3dz+U|T>Z2l,rg+6CkEF*~[');
define('NONCE_SALT',       'O>zC:r9oY(.{me8zbXlB`z@lEeNGau8aR:wSE}D.^X8(nHEBg84s<zoP7]w5?VKb');

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
