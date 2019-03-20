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
define('DB_NAME', 'thaithingocly');

/** MySQL database username */
define('DB_USER', 'thaithingocly');

/** MySQL database password */
define('DB_PASSWORD', '@press2018@');

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
define('AUTH_KEY',         'g`)5/} uICdw~*)zS.ap6PPC*!x%t29+k;(CNRL|!8lKP%tVx[`8e8Wu[f7#hvt2');
define('SECURE_AUTH_KEY',  'xD^3g03&Z VexDnEV$;1@.X7V zj[fpiY4<^0liZO$U{@Q#40j/V8.s,Q5>[L3Es');
define('LOGGED_IN_KEY',    'GK>{>kTFC~~i=cm9A.}@o|Rm7,;|~`?d9Keykg/FRgr7<<B`]A4sApFAcYAX/,K?');
define('NONCE_KEY',        '28tpfXTL#*I28#Zr3M@~Hk.b#M!f{4GjQlcp;:_OQzf#^?JF<bNeqqq)O xfCxoo');
define('AUTH_SALT',        'U(!w6wV:xBj^ls=@&7UDkA7!0qB >1=Q_ sr]IZeve}@)7p4@hA07f5thkn.-<PF');
define('SECURE_AUTH_SALT', 'B|DJknb~M|!.Hr+EYhsN#uQ.JSkuy}Ud_>&:cPMw}A4+|AvG2`ISv{>1?E:)Cm=,');
define('LOGGED_IN_SALT',   '~zUi)m(Yiy]BYrd}SRgCgh,!A8<)k=0a36_^3h0hy1|.dcn3^KFV})f#<^q=^!1.');
define('NONCE_SALT',       'Vn[0$I2BcCpi[_|O#HyK3.K+;a(Swp_K!dgOY4WG9r6-jwmKtGT4 #OM<;8|5c)C');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ttnl_';

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
