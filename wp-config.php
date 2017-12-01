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
define('DB_NAME', 'congsuc');

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
define('AUTH_KEY',         'C14Cm_;VFV$tI1jw71Vd[PvBvL%pdh-*=l~7YK2LSPt==p;3aWQ qnxvnRToRc`%');
define('SECURE_AUTH_KEY',  'w:dc_f>/n8Vec!Gir+Io@>-F!pbSG$Do;hj8Y%ZRq=9~;nVaa &<-#G;;0.d W(,');
define('LOGGED_IN_KEY',    ';H|Y/=a+I<@eg:$3o?9(eQB m8?(D4|R[w5l&z,mfZe$_S<7wm4_5V->!_RvH&eG');
define('NONCE_KEY',        '4=n+,?f1rdl4js>|84O`-XK8nH;jvv:Qs%.+B{#%s9*~3cU~:?<e2o$z7jW%!J;S');
define('AUTH_SALT',        'oN`>~V8Lo$TMPl;WJM=1C`V:Mk*nk}x_CqBvob$trV,lR :6<e,h<bOa5EPR,mK3');
define('SECURE_AUTH_SALT', 'jTq?Ot>CjD+i Ti.p_`:?Hx!e~RZnYm |Nl]KAlb@TXph`~=P7^sR9_: oqpZxD>');
define('LOGGED_IN_SALT',   '5o|Yy44l*i.y=,{0>XOR$dg8=$m]7E7{T?k=7u^o6F.j;6T#&I6)<X~DeBELE{.b');
define('NONCE_SALT',       '{|L&QQ_@C>QPv@1]Y<8MqDNXdwWP),iGjQVcb-=/VB4*0|#$;11b-<bVcHyJ)KKr');

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
