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
define('DB_NAME', 'corban_gehler');

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
define('AUTH_KEY',         '[E@AF0=-e|QQ3~}Pj,~:Kq#2`8k|Ps^!pa@w.Juz8mlvA3oZP5kZ]$z>8x;oc/-C');
define('SECURE_AUTH_KEY',  'l$]|icWQ|{U;R i7GeUjkBR>xw}3nanre|T9y_#+9}N8}%&)|z{DrTQ f8^755Ta');
define('LOGGED_IN_KEY',    'Ykfda^.Z6=BbLc=w=XLns5~F5;agiv,/Cv4T^p14aDVUB1?lm,`F56~P,)K#FP%U');
define('NONCE_KEY',        ')a3Fx+^AeX~E8FYc6mnJ .}|:kv?Z|!;LO^no_Hs<^7s@;4d9J`LZ9 #n@hMG3$A');
define('AUTH_SALT',        'qyb|p@7Yv.;YQ^?]OOQLQGih=OTlKfU2n56 D8=X4tXfSh^gal4TIj>6TJOZGAg@');
define('SECURE_AUTH_SALT', 'd`y<yN9L X3U$v/L3a~HP.#;VvkVITa!=#LjQE&Rb!gu.U^Ysl} C_&4mtwx6Y>r');
define('LOGGED_IN_SALT',   'QD]/3~LuT~h}p|S{.$eKX|@G5j.?4$z+T~ryqLC%N^=9KZc%pD7f)!Nz6!5TL1z9');
define('NONCE_SALT',       'LUY8WN!,uz.9Vp&icH0HXVcEM64V*/.4czfTI>0$n]@p7Sx`dHXF[-~CL^h4FId^');

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
