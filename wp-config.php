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
define('DB_NAME', 'yoga');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'asdf');

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
define('AUTH_KEY',         '*UEJ7B!|yw=1[sr0!)$!2pzW>l?s[OpW8qU1=xpN%vR^`wQRAb},sKbb(RJ].QHf');
define('SECURE_AUTH_KEY',  '0xi,I}u&7p-9*Yy1Jdh6tZ{x[?Se66z<Lf]B>}rTY2wH]?FQ(2bi<Qmj[oxDp^y)');
define('LOGGED_IN_KEY',    '<p}3iKEym9sTuM0PGNmsJfd_Wpph^60a;3UJG D@YZn4SA{f#C(yLhGg_CsSXVE)');
define('NONCE_KEY',        '!-ATBL~XBo]X8zv H!)@p:D93ZMay^9)Ji;n,ZxGFtcdQ#}L[7fJoB}% U`Q{7, ');
define('AUTH_SALT',        '1RNVyDz1hR0e>:w5 pDOG@KtNk6Yr$.9GL1W}G/%letD5@r%h[v(<Aw(D+a]Q9u(');
define('SECURE_AUTH_SALT', '/f?|2Y8DO`ywC#A:q1-n83PqY>}5kl$dh5[rkCd]%wtQz3T@^_zVo2 PO(wJYwF!');
define('LOGGED_IN_SALT',   'O>;;[>#n,32(okRXtdx6(DXYhy8$CZsKaDJWhw<$EvKO>s<tgGR8uXZwM>Gu4^y^');
define('NONCE_SALT',       '[Bk/r)[MK#tO_g1*w)$aCM(tcqWRU:7CllUx0|MJo]hk;5zs-K,U}b9r5&4zJaG9');

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
