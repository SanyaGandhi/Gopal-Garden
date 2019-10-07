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
define('DB_NAME', 'Franklin33');

/** MySQL database username */
define('DB_USER', 'Franklin33');

/** MySQL database password */
define('DB_PASSWORD', 'Oakcreek!53154');

/** MySQL hostname */
define('DB_HOST', 'Franklin33.db.7901151.hostedresource.com');

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
define('AUTH_KEY',         'k^Jz!f<4?,_o/2LolE0w| #$=yj*UptPwM0#Mw_,6$];b7ae-plg/A|p^IDYko9(');
define('SECURE_AUTH_KEY',  'u|;Y.bzNyMGoI,Ypsx&5KilP-mD83GcT(!R{AtbaV^)?HJ+NIVyOL+JzIg1MI?lr');
define('LOGGED_IN_KEY',    'j7<CuMpBZm-4L`?jCoU]QC?kb]`3iZm_6P,@C34%~2[1irb<2]tRTw.Yj7m</u+L');
define('NONCE_KEY',        'C7!;p?t3o~@(~CjnECsF6Ov]w8Zl=vXyXNU`49=*A*_e< G;-8+5_Rew8;bl1OtD');
define('AUTH_SALT',        ' T:u5?rfWA}ZgfuSIQRRJH(tD4uJ6o>r(VjmQ*1R]NnD<qp8*G!Iz`O#-aDzE](&');
define('SECURE_AUTH_SALT', 't!<fO?;7GS}Vcxwr[62~,$[?zGlY5ix%cA6=husrd)u<Xl%`p d0|z=2tt|<%sj.');
define('LOGGED_IN_SALT',   '5}gK%$ar>|pf07*YCg@ g.P*(Y0{2pYK)(B2C6+7xDp&girG8^b9Mk&ZV]6h*xcl');
define('NONCE_SALT',       'DK;WEudj0x0?sh&wd/]h;JCnW8Yo_&I9<HG:!G&:V_S8eH{v{gJ}0U&$0X_8qsp ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_gopalsgarden_com';

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
