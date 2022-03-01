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
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         ':yx~Gy.z(3#uCkjyldjy/uD][XM${v>FOs68dz~R7SM;Om-e_++WW?L8e4n_t}W2');
define('SECURE_AUTH_KEY',  ',..ygKq|OX1+#;K/iqtiw*NlFnl}ptNi#VTY<->6{dH$C@itpZ|{6KVL:5.4x6tc');
define('LOGGED_IN_KEY',    '; |f,w.LTIk4KW!S*^}H!L7TLDA@@~hr@UgU^Q)n[F;+wS~Y-s*nsca(:A-@,*^2');
define('NONCE_KEY',        'B~FSZ=mCY3,PMn65B&q0ao~iWTL{FZ|-d%NdeCrFVBgyeQDX/7@r_u]uTjj^IFd&');
define('AUTH_SALT',        ' #@nC1T$%4k%/~-RB3bLXDc=bz,o|PG2lN<xsc+qb><jPseWORJ->9v8}7G,>o5~');
define('SECURE_AUTH_SALT', '`N`%nj.o5Eny]6-u{}x_kE{Rmn+/K3E.`U5321RYP}/%SCp|zFYDlzVZo?A~Z*Uj');
define('LOGGED_IN_SALT',   '#Q)fg-Lu:p[tP|`ipXDE};iZ~5B{vq7GS+$Cjw3wnkH]N3V$:;[8229E;4KP,{:7');
define('NONCE_SALT',       't*[IF.raz!*yR26$oF/6`QPk?vaI,&^2m-jYIWK%~,Tm}?lvtm)OL{SKX?5PQ <{');

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

