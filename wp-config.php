<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

$url = parse_url(getenv('JAWSDB_URL'));

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($url['path'], '/'));

/** MySQL database username */
define('DB_USER', $url['user']);

/** MySQL database password */
define('DB_PASSWORD', $url['pass']);

/** MySQL hostname */
define('DB_HOST', $url['host']);

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'G`{f~Q&wW89JhCBzI$t/9XyO+3+Q_LSMbY)E0cJ-=Qzc{(n `I!pVY744xmt4F:<');
define('SECURE_AUTH_KEY',  'uPY]7Kgciadsk i#_;|c% :!nYi#b+=2+e-l-$u:tl|~k}8g*Vmwbn6DZ }.cSgO');
define('LOGGED_IN_KEY',    'f7;q<kT&<.q6|B5/-t%m&a*}>ZEf]cJd#aQB7S!|It=~TQLDaR9_]*3}R5s=RP+k');
define('NONCE_KEY',        'V Uw6Y43io+ z|dFwQO965bh_3U0+i0_nFn*&r45X`(|a;9Q?k>a-P;P}`[nL3BL');
define('AUTH_SALT',        'u6|YL5uklb|a.VK_?uA+Y.~dySItwVj|>2/9$Sy4Iw7LT0GYg&SU$xJ;v0H2UWVN');
define('SECURE_AUTH_SALT', 'wrhO0klr/IgH13upX!GlYUOMMynckfxE1+q,> 5Lz7PN-HsvF{E*oS<@+@M;qooE');
define('LOGGED_IN_SALT',   ':Zs-g,Enh7|i5Lo95UGs.1#+/ni%4`WyiidUhdX(|{-$5+U>Al|1e0u{!ML)^U3!');
define('NONCE_SALT',       't=1K!QhM[_-7pKoLR1P-y:VL`0b.qC%}AKsNz8VQ??h1Vp@Fz{f{$@8<b%_4WL-4');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
