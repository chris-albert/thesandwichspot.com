<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_tss');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'g!{Uc.ugaKwluVv!CI|SW%:[^fmJIm_[U*>+)r`3vGc3[Q4:Ib-Q}i5r|Yh_9 bg');
define('SECURE_AUTH_KEY',  '&xc6.?(s$_0yQ{<#_06[}Z*PkM}$0T5j%7]{!6dY_f34;E xM`-s/gT+!]gnT?wz');
define('LOGGED_IN_KEY',    '2N/![x lz/*gl,{}+Hywv(UueuI]:~Sga#6p&p+JU @WUFp.fI cD~33g*9|b*Z_');
define('NONCE_KEY',        'iB7)n8dsHbdne%5x3B/kd09vDM_S5]MSB#K<4qvA@yPR<nOwWw`Jeff[.G8F)bj<');
define('AUTH_SALT',        'CH~4y;xl:91~2*YTAbLn+,e7P&-iC4t`p`(+e9EooYXd?F7p:,wd+1,/H<4V3y2q');
define('SECURE_AUTH_SALT', 'Qp!ZiIiFun#BnNf}:8l`kdTQjVFnW)Y.2K;Y5zXY|{/Omgxd)67ik vKfplNq]qD');
define('LOGGED_IN_SALT',   ';:[yz0(+R)zE>c%(Au,>Uo@S(:*E__bnXlt/zTbf<s/@u_Nho=0?G5t M.z_syzN');
define('NONCE_SALT',       'y!Q}v$AK:{<<:gn02c??!*NFOHKY5*iHs,xec2HHlYk g,5,.SX5Ww)5`4mb~/2:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
