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
define('DB_NAME', getenv('MYSQL_DATABASE'));

/** MySQL database username */
define('DB_USER', getenv('MYSQL_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('MYSQL_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('WORDPRESSDB_SERVICE_HOST'));

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
define('AUTH_KEY',         'HTW{mRP4q^XszVG-u/(d|#o@uha2?_~][{p6k?M,rK}ucPqA%2pf>q=jy@#LcD=e');
define('SECURE_AUTH_KEY',  ',|SJ;)vH{gKvJF=.^y1L)NB^1=0by;%7(r/HiYTKW,5W.x5c>^McKG]}r]r8JYLR');
define('LOGGED_IN_KEY',    'Oc)M{gigAKh$ewh**^~llbQ nD+)2GLPrG=hp*vO2u(dWxcCyjh1 <FS5F!9q]IX');
define('NONCE_KEY',        '{WD};^fBdZ-~59P!:B:nPeQS2Q6;wkb(pV!U[_-ciQbyh#%A?#t l38QExi{< 0o');
define('AUTH_SALT',        'n::Y)X8*Z_kW@cH+5/q;XrP1.#9t5w96i3H(|&b?A&1^?GEns$t:p=1bO:FB1<1D');
define('SECURE_AUTH_SALT', 'FjCNe }W/0p&hk14H#+;z*e{,&nvVI[Tf8uDEmH|BNiM;:yO=bg[_tWX!C~*5mtn');
define('LOGGED_IN_SALT',   'ZJ>d*q GX26e(da_N+?QWA^Sc=V~ =?4=zD,s5M&&q0pofA%J14v( P>8--N{=nj');
define('NONCE_SALT',       'JVU!Z(1g:Y5/1DG5mg(P`2W`alKEC:+o/B1jAjY[7:q-7 Qi%;*,)M-Ozk=I)D[+');

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
