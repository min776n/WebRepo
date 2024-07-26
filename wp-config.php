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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'g+uFM%i(H^,C#j7UvZ@KUyXI$qjZq!mb@$ +11^Wbw:)Z%-bItY%J4D38X6)2TCU' );
define( 'SECURE_AUTH_KEY',   '^=b5!q^-k:4VO^{EQ9XS0O|q4C%zpJ`14gs,xmh94o;6 YPxN2i;Xm[tt2BlE|_?' );
define( 'LOGGED_IN_KEY',     'lHBa3I6;aS+seU*:*u|w/i&g^2Ndh:rXQs~Oqc:9;7l{yK1W{?vvQX`cUAj]q*s3' );
define( 'NONCE_KEY',         'bidRs2*D=5h&>|pYpoI||Rl*w?zPm}juJnL%I,N)!h4jSD!pJ*VO-_jYT+{}B`0Q' );
define( 'AUTH_SALT',         'UCpeCI=9bq3K1q!jv0doBpob<Hlw)>%7ektp~qKtQe{/N@?=WZw:UH|&vAoj`308' );
define( 'SECURE_AUTH_SALT',  '4K}E*kXCsiU0fs&fLFx@28Hi1f4TLJo-=BDP4;uV,=,GN{hH0TUex+}v#%A#vF $' );
define( 'LOGGED_IN_SALT',    '4s[0YodM}Jv~Pgc^WC.nQpC}?u)Hd2%~]F}[@O:jSy.i(2-GGjv7?9LZU.98Q?SM' );
define( 'NONCE_SALT',        '1l%x_7:%kuCDINTX_ybM{rg`y#_{9u{hSiQdm;t~Ho64gPx*5P? ;IjsXD]w%mB^' );
define( 'WP_CACHE_KEY_SALT', '[q$;=E9x+*?c+oDKE}gT]FMRQ5D&cNe_W)h(warAp^v??$ .b={yv7oK`mmBSqWo' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
