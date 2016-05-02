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
define('DB_NAME', 'sublime');

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
define('AUTH_KEY',         'iM7Ly]zJ~umb{o*A<x@4m9am)Ow|tf8nyRCHt&mx;s8:`Lox&Huc2nR3?F9:Mh ]');
define('SECURE_AUTH_KEY',  '[b.>(lay8zL&-_tBP3aBXYv^N2uE@w|uDS]%ek%LX)<d!X|_+YP0Um/^FmJj&OHi');
define('LOGGED_IN_KEY',    'ML~]J<(p%W;ak/[WR0cT?l&`c$*U8]-B>F)RK6D[|Im5=CQ@H/$U7`R0:]1#RgvO');
define('NONCE_KEY',        'xQ$% Bm[_(?$G+j]jj:j$Oeq/oE{rr8m7z!>NC0V[I)ogki:VCjJ/%nu4cO}f5i-');
define('AUTH_SALT',        '-8/JipL6 %baAj.A4`}`2Z7SZ|ckq-(!WuzVDo1_6x#k,94tl6i]*@?:_-U,jfBX');
define('SECURE_AUTH_SALT', 'Fuyg;}Zu:~fz-JMlZntIu4d74Y1u+u8=ie Ar(ymun+Jix}K_@XLR+$@t1r^lt+$');
define('LOGGED_IN_SALT',   'Tt[]EGUP5%8K`T+3if@0[F47/*<Uc-OH, !-v4i!/6z_2|S(,V][/dXOb=[p,y*N');
define('NONCE_SALT',       ',GPcGJDF=E.~@LX0.K:1an Q>}[/w/w^%zTzD`9qEK*0m?bwC$#O+=n v{*U#XOd');

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
