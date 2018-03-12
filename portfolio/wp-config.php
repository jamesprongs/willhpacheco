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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Gr3atSc0tt');

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
define('AUTH_KEY',         ';bze,4Ru_iSl;a=:|^=jvr[-7Hr_#W=-ybX0Z8e=/QA;vr6#0q-.8f0^f=5^>XrR');
define('SECURE_AUTH_KEY',  '3>!9Z]5 z3e@!Cs760%[dvqW} 1abO_U|~$@Z9fXzcznLW}1>RP_2^ZR8rLl mkY');
define('LOGGED_IN_KEY',    'qm]56_a>He#ET|TL.}T_Yt0v@R-z7$)XO|eu{U4nGkR1@;nzwp9K.Ub1$&`6WEsM');
define('NONCE_KEY',        '3^ PKXs&@9_ULRp[90Q58~Em,F?.Om2^<T#c!gOd3E3vQ*h/-{hcMYB^fI_#01:e');
define('AUTH_SALT',        'CW,~FP 1(wthP>%QTpa_}A9+SWy?fhVMSTYNy_MZXOl,PY$J0r2p[,N+MxgJSPcI');
define('SECURE_AUTH_SALT', 'I(q8X8uZo!0%iOQ_wQ[0-g<v?OkNdXVHhzJYJoBEcZ/uS_5+mO`zwTEQEnSz!jr:');
define('LOGGED_IN_SALT',   'xwkOpd>ed,Pcumn8P~FH3UND[gGq|ovgXl|1N7dfXbSt|4i/.C:M~OEYPy#k>c* ');
define('NONCE_SALT',       'J*yA_/Z-j8-o7ZiI|VzRXdkBpE$t}2Q!N6ZWlY1dwRFoPhB#lUnt<UC?<-=$oBu[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'whp_';

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
