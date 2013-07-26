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
define('DB_NAME', 'ecomseft');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '<;ph{WQ_4><[2x<Wzqrqgr;gdaSNbr,Gv9qqEy>25#xEu@YZmT@#JdJq{i.xcpd|');
define('SECURE_AUTH_KEY',  'FU<770v((GPg]|_+@$|b~US-+jruG*`3%[Z4/X8Aw/i]%HKK-7QxJ>L%nR$oRT}V');
define('LOGGED_IN_KEY',    'TgD]2ef-QxW+PPaT&}{ml!L%)o0t}L:#=$>)U4XJ;LkdOxhf:Q#)l9c6vr_u%xYE');
define('NONCE_KEY',        'k#<uIRkkrJ?+ o!r#O)AAQfmqcI|$SeVw3C{*cv2{:`hCKH3nnA|Exxj?Z.?y76&');
define('AUTH_SALT',        'n+>O^B<+=4+K60i9&Y5G+U9$9O=&u!xA>R|(O/dSsl+@bBR;@U;}Go#R;oVgidU-');
define('SECURE_AUTH_SALT', 'A=xS<W+,[v^Hp9>5hkDj%,uj``7SiB>LzM/_*g<nL>MWg;C#W%XZ.aVVQv}` lYV');
define('LOGGED_IN_SALT',   'qtaY|PlS6_HLlb6CbA:;fCw}ork@Z}ID_Y7nU!b@34dY@_%,D}{o:t=,8`@*Y_*3');
define('NONCE_SALT',       '5``TFMHZI2 E8,pkUYsaTa4+, 8|HS5K`{)Z2;/IJIBMPzu-q%;}t3pUmZ%d0vq1');

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
