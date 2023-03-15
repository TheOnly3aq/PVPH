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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'wordpress_DB' );

/** Database password */
define( 'DB_PASSWORD', 'sRyhjNGnjFiFBzDf' );

/** Database hostname */
define( 'DB_HOST', 'localhost:888' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'kEn1wIe<.*j9ehi->wY`k=0yFhyX|h|P<~,@t0,;`Y*78LM!:s^:{w/i|G=K!+7+' );
define( 'SECURE_AUTH_KEY',  ';D=S=r4,ef0.)~V3twP2p+<d1h0BF+t,:I=_.[|uOA=xQM:eCb82q)Au:n/p!T7=' );
define( 'LOGGED_IN_KEY',    'q>^uegid{N<fcW?PNN?~T4^b9^FYt)K#s_&U/~)~,exYXAE!sj7OcWnFd%v)5g/|' );
define( 'NONCE_KEY',        'gEOl7_Z4%vu,h){u%@J|fl9cd-AfaSX&t1J9z#SA;+-ha{B>&rUCS o3_%U+7Cfg' );
define( 'AUTH_SALT',        '_~`FMc}0N}}*YTF.5SxF=P7CGGkX%vu-zcdh28?*&5TemDkDwok{1+LNq1vBZDBC' );
define( 'SECURE_AUTH_SALT', '+vA&r=h0O/E0/9;(:_RuB#lzVs!i!&KxzX4 -.~lWqf]%B8%/pCe@7Ie<WQ]g(])' );
define( 'LOGGED_IN_SALT',   'RsHE#jWc/zf:;BX*}pDsQoKp-z^/;~]Oc^(&Xw3LTle&Xf~MbU!g?_BM)R#5B~0o' );
define( 'NONCE_SALT',       '1WGJEcst]z=N|}0+ZC{^,@U/1|Xbch6z0-.VHGY:Jxn2EtC5]Ce$F_!~i# }G(Mz' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
