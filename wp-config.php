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
define('DB_NAME', 'aquafeaturesltd');

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
define('AUTH_KEY',         'K~P#x-J`+]a3sjG(-.@QLrCI}&KcV1[KwS|U18D}u7O,;Inl9eWFQK=FA.RCZW,B');
define('SECURE_AUTH_KEY',  'ne)2Kk*`@@+I!7 |w-6 E9E{0,s?~GK=Ib{?y0s!#zf-q3|-c~wExj3h{Y9+w9s|');
define('LOGGED_IN_KEY',    '0K4Hs2%1nwSm2FK^ ~[TmfG~_k/cY69*X@|<++lHv-DJq/,QcZVsa7yEWFXF8MP ');
define('NONCE_KEY',        '~JA_jazK 7+xK`0HImw[q?I$c5R{E}-$c5L!17-Tr-HEY#? {R%`Yk.&VruRfMI!');
define('AUTH_SALT',        ' V.k T2K#PS*rsalKT~<H(PSkIIzep>B((|ON%dq9Ni0UxV5@L A+j1pY)*|}-Ge');
define('SECURE_AUTH_SALT', 'W<lnhMmnO|%NI1dV(DR, =*LlZ=DG2~z55oa;s5_ev2oM]eeu,.03N|q3M|c0=eq');
define('LOGGED_IN_SALT',   '9x1^/m>J@eq]av]eWMzCx:o+s`Fwl-Io#/t+e`xwJ4(w!hkE@o^[skT7l nkE8z$');
define('NONCE_SALT',       ';v/)@XB}YLz~iPu%|F=Q-@Q1d.UFH(`b%M:a>>m{-WmDr)fRfkvDRk2]_q-hYZu<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
