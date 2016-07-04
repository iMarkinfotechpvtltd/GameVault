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
define('DB_NAME', 'db630056864'); 

/** MySQL database username */
define('DB_USER', 'dbo630056864');

/** MySQL database password */
define('DB_PASSWORD', '8message');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'nR3mQ_CMel.ub=E|V##8)z^}@;TP9.gY^48JjM;1&bR[CV`_`+}7[cVyx3P0IM;k');
define('SECURE_AUTH_KEY',  '*<(RdW|vU?29.@#$k)>J@K91vm^~lh>tZgk^6Ef`NXk1?!X2t*fJr0c`t@25.zx~');
define('LOGGED_IN_KEY',    'QVSCsnhL3;0-+>g66jeLrLJY*<97WUR0`jL*9y5.-3B}.L=T2ZK1Mswr86K>Tb>0');
define('NONCE_KEY',        '&95;%aC</L}:DuK{V]5^$~%*[4Uc?V;h$roI}+,If[.M!jT6]#m4uA3>7QPDrd,x');
define('AUTH_SALT',        '0*`g0ho=+{x7GSIOI1XNxPpWiR7A=1oLouN4Nv1//5ikCc>WBS;)[U>*wEn,,p|C');
define('SECURE_AUTH_SALT', 'W6hr2r|K(kX:YJve2S1iv{$]GE|(-d )3+216|Y1SQ~l2#<{~D<8J:#af-a(}J8@');
define('LOGGED_IN_SALT',   '7Ne]%_o[)H~GqFJ>XH`tdTvDKYePQQtT6p4WsiiT}g@ A`fQ2^1BbT.$@39;,:wd');
define('NONCE_SALT',       '?b#)y@VzPF]t0ziZV~|K}}X?8A#AVk.8H)2qmm{+g$cdsI~}m{;`r658j! lX]:|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'game_';

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
