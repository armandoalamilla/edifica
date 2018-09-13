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
define('DB_NAME', 'edifica');

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
define('AUTH_KEY',         'A5@F9<]oRuv)A.XT@rg7z!IVH|;doXdr1!U2MgQ4LsXdb]6_D?c+@ZIF)Gw;xCD0');
define('SECURE_AUTH_KEY',  'hSH|-b-j&r?:PAMPzm^HU}`U5$(|}XL_wg.L4;)HP q(z&?;}pV8xM7y3$(@:2`P');
define('LOGGED_IN_KEY',    '/FZ^fT`VeV(kECQSVcm&dnjA.2LhMg2!yr>HxP.tN,[X$>9PRsS!#.k[YxSn;OxB');
define('NONCE_KEY',        'IkDdH+FV$WC}:&DrjleQW/3zV 5~v8QFr:dD|KxCIloXS]F 6jYOX )zuZ N4z!!');
define('AUTH_SALT',        '-47N+nb|bTe&Gz+6t+QI>=`2;`wKQj!)R:sA?[E8$0Sw$Fu$>(p/x+TDf[)^fY@V');
define('SECURE_AUTH_SALT', 'l Ta49SR6QAOvWG%<]^C96_mk9;&*Z(1a3Cd i<.a.gECHOfafY,FiD0Ru{wGTS`');
define('LOGGED_IN_SALT',   '_2R2C~]r|[MdS%ySP[=^}5IZI>_}hqP-J,rMvQ;GH(<!ann(N1{Jv{1=fBV|PK;U');
define('NONCE_SALT',       'Ywa~:0 uq/[W 6bP(?eca?}o(UpT4$`%~9(r.emF5H2.Sf.=0,`L+VV,VuCW.p7&');

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
