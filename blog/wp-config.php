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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '0YWl}G /[W6 ]hD0JDAF1L#?IIYY`%0*{68QxuIL#OeQL+8/wux1jt?z%v=3_g6;');
define('SECURE_AUTH_KEY',  ',Mp~;fy*@F4-w$+L:g8*^qk<hfziXA4s}j))cRKl@mgMQ@Zcd9xib:o0-]19!&1_');
define('LOGGED_IN_KEY',    'QFgnuuZqZ}IP+hKl>}@FXB=)w94L]!{#TWxQ2r!(=)IWI(Z%4>;DZ==g- wl{0an');
define('NONCE_KEY',        '$.50+*@Ll(jGlvooHZWD<<z6t8+.g_3E_@?j8?CM[_z)R#ziIgI~)3#5,^m ogbX');
define('AUTH_SALT',        'EQiI^3d`9:Vhw50oK<Bhu?:O:zl]CGhucmuC=pm.(==K$]1 ~~e(6vS4W(13zxkn');
define('SECURE_AUTH_SALT', '`uuJ[e2HNQ#9yr.KZi0p[$j*vd}DTXO6iD/};]CC46R{?!$%)SzoT<&2l_fyuYv>');
define('LOGGED_IN_SALT',   'LM75;9jUbMNER1A$lx~J/o|2C Yq{vy6D:@Pt8)dmz1O#_&5Y-Ock%#O$:uU5gN,');
define('NONCE_SALT',       't I7*:l9of3|ul!_hah5`crx R~n9;C6q)AwgwL-/i3SZ0`P]g=B%konNo=;P3OL');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'blog';

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
