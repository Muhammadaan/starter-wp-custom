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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'landak');

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
define('AUTH_KEY',         '{@YG@`8(<O`KC8DiOwQ,X.>?7A^k~QzyFN$2Kg})_xp6TdLGW}G&]@}F*CLCpxA-');
define('SECURE_AUTH_KEY',  '3PyQS0+rEhxwhO?km{g#F)EFMd9iD`{7#%jjCVh4d(lW NR a`-7vqHH[sohpQmV');
define('LOGGED_IN_KEY',    '[dVx]5<h<S^e`2cmKJ7AMtd`),LS$hSSC#wYV[#z%Ynx.!#%eHOof[uGLX 7`21F');
define('NONCE_KEY',        'XeMR6jIw=HndlNp]/)A)q-%ROp=Sk*=e{b]eaNq0U(;B-#gARrQTMc/Kl99H C->');
define('AUTH_SALT',        '@^@wD|yz).j|cswV_:eWmcqgUAJb~{3){`A)^3FZKbo}.h9EU>[e+m2^=O:p!T&^');
define('SECURE_AUTH_SALT', 'Bpjb:gz4+L9?$jM DGCAs:LGQ<I CmIUDD^s!1/Y$|-|/:t7[__*f+WMvzs,bY#[');
define('LOGGED_IN_SALT',   '|T& qXxZFJj45$/d2fFp;u1*JBEIb{ ?S0XYa~4E+ICaxF]?Ox]T.~b[T0)JGsu+');
define('NONCE_SALT',       '{w6,()E-9ewv<d]9V@0)#f]X*}DJq{SI%I}H)lX:#P[Tr.Lh^<c%F#0|v4Za,bx~');

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
