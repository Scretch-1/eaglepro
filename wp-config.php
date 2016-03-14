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
define('DB_NAME', 'eaglepro');

/** MySQL database username */
define('DB_USER', 'eaglepro');

/** MySQL database password */
define('DB_PASSWORD', '7opr65xmqw');

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
define('AUTH_KEY',         'PEj yM:SMM;F51} NhdhM{`EG~}LNlq3F[sc {Zw%#)6=dUh*ox;H<L[I1D#4fw,');
define('SECURE_AUTH_KEY',  'Ra 7h_`O4P</[+,uFw;TX3gM%EM<+EMe-&^kq-8S};|F#&&o;W|u4mqofjp_+Bos');
define('LOGGED_IN_KEY',    'IBAV9* -.aSU%;/~|XR17k7zD{sDeS6gA}u) Ih00VXZoWc{=_qk/KSOt$}m}<2q');
define('NONCE_KEY',        'USGOU8nWs!=XMB+PfBztd+Gx}K7xXU3N#TFc0DXU!jLd,nOD-bKwv.2DNBYW!](C');
define('AUTH_SALT',        't1/bE7mOhLCSp+Bbqf3t`Tw@&p1[g}]OkD|M8%perBTlDv2?M$HoYJ_7QC,|BH9l');
define('SECURE_AUTH_SALT', '<8-nJ2s:Ey{xM^g&,!AN7</+w&.FLw7Bo{s<qO,6PZ|QN]gU$T>+tKx&#au/%Ya,');
define('LOGGED_IN_SALT',   ';prV??rcx7=jIpTBZxD3-VBw(D/EajF:kN6Pe+tG{})x%??xH9lP;Z)S7%af)8P#');
define('NONCE_SALT',       '%n2h~S#{)k zunXV,=VzI7INjxjKVw`$YL<>gQ%^qNZ3m?M_fkoBT=qI)WN<]*jR');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_base';

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
