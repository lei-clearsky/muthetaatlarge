<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_muthetaatlarge');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'i0bqdF<tZH13OI1-D 8Q<@=+y$,YgP*;Z]RQ]v@N_^9,Eo3|6h8H|gv~%sQGt;zh');
define('SECURE_AUTH_KEY',  '%.w :#bI;(43FBy}~B^_<,vc8]OuB,>l1`mPv.I{>KHy}LZL1L7qG-;2h+QZ3(!~');
define('LOGGED_IN_KEY',    'kK^/ZeMArCgt_+9r[rmh?kQ-^H)Krp@_/-%6& ++ji/|>XGd.W/t{_&i^$[#gg +');
define('NONCE_KEY',        '>n#=NB2*#^T5v.}sbqP1n$[+caL 1K/n#]17!!Gdt0+_0JBF<u!$@AD}ced.5SUx');
define('AUTH_SALT',        '5Kr.s+1$)hyO@yv>Ee&415|WQfm>8mAcx+2k*DI4_5TPHg-#-xp|, T?|]6mbGUs');
define('SECURE_AUTH_SALT', 'lhfA{~aa%*!ifM-K-Z(<g%B$`u!Y|Vze_RiWNB6)ChFu{O$[roOiiVg[S/Q7d{Q:');
define('LOGGED_IN_SALT',   'n#iY?M>5$k}5hS~DAv<vtC<0@OE|BJ*:gJx+)k +|r=39Nh[z/0,$x$C8OO:/z=)');
define('NONCE_SALT',       'D<(lA[EL6M7:Ws<SiA5,lb!@@/<Z8j^wM!+0cjM(/i$6QVkJ<<j!Cg$+5AMu`@s}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpMTAL_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
