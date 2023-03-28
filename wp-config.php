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
define( 'DB_NAME', 'productPress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '/[y-UQX)A>B&(ZIpLSQq>#kt[CGN~bG,8KC8!PZ<)4)~/Id9vdO_BlSKeOhHK.kr' );
define( 'SECURE_AUTH_KEY',  ']6a&,qau-eF{tR8>6A`M!1LgjMp<mbm4B2<{h#v:YMH99lHy[PJCAcf6/2s(_SUG' );
define( 'LOGGED_IN_KEY',    '@Zn&z[acMQr(#V+:0_4, )!{|+99WJZlx,<n?$^XC~=YO:3araKe~)0B%0{Q}ftn' );
define( 'NONCE_KEY',        'Aw%(xP0/AaL~oEqGMTt,kAzI]5`y+NRuz9-)BN^j-(3q>hWn9MDqX,d#O0P|6)N,' );
define( 'AUTH_SALT',        'gC> M5Jl{ebT@-:Za]1GUa/++]$Ms;}/OWM:*]-L9[c[wcNNFxVr|!{O|9fmW*]Y' );
define( 'SECURE_AUTH_SALT', '&><K;|d?%F0F+yi$5*(YNw%9oa,#tt(<e_K=U^I{yKb.b=aDjJ8d:0^7T&p<|`bU' );
define( 'LOGGED_IN_SALT',   '+U-(pbpHEzW$ZA ;c^a#ExLst}$(HkM1jRf/5#62Q{GBst}WiS#seJmjhN+i}Nxy' );
define( 'NONCE_SALT',       '24Rt#1E9Vq^gg]EesMM:D%:^@Y:k?kmm9Lyqe(GV=|h-R*MvVsBc|i5}A6|fkm0-' );

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
