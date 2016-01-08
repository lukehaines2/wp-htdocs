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
define('DB_NAME', 'wordpress-bctest');

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


/** Adding my WP theme auto update blockers and altering defualt wp-theme to mine. */
define( 'CORE_UPGRADE_SKIP_NEW_BUNDLED', true );
define( 'WP_DEFAULT_THEME', 'LUKES -THEME-FOLDER' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_iVc5p{?f|4wQf~Qn/;!;u%9zQx}[Y-tM3RdQm#sPJ|Q)tF8`#<-~g|#RIS,ZynT');
define('SECURE_AUTH_KEY',  'DfJTIw=*|U*{twEvI3VcC=4m$!hd)x~Uo}>i-YQ)ynr);O(An@J!K#Sm4O%so|{m');
define('LOGGED_IN_KEY',    'G@B_3H5 f1ff+x59kQ{Ogsnv.S=0#eK+m`SddPaAbc-VM-s7a(pe=M6?0LbRp8#+');
define('NONCE_KEY',        '|6m6m(uw0YVd6o)z-LFb[Jvi^*e1*mEs[7&bPFjgX%7),{z$+$#ty)o4%%T-3uUd');
define('AUTH_SALT',        '!,;39$=IFf[gh7 9Mz^Q_I}Y]LtCnKuP?G5#QN3sA!JJqgzj5O`Ty G*t4MZV9Aw');
define('SECURE_AUTH_SALT', '[^^v/lM<Qd?no*-mq%Z?oZ]lzOv!RKp,ZD+`EPni#|?7U~%}on1%b2$OJz+o+?zw');
define('LOGGED_IN_SALT',   'hPZ+o|}/]]#1#TN|u6Or-=~)}-*GQi2+k+Yq-nJ*h8amZ[Jp[b~aDnSmi98B#_y%');
define('NONCE_SALT',       '3_?w~D-Vs.92+AK^_N%~vh|_!f&g}68t^|^*76UVNx[hIePa0<~T2W0P8}s=Tb <');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
