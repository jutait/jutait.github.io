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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'juta' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'pRIcNB2xEEPKpo{sfN0OJs},9Qwa_RXr _R{]V9;RFHYc<O.@#u*@pw^t2Zzr %(' );
define( 'SECURE_AUTH_KEY',  'w(Siij`-)DSZ5I(Ra M/_udEpdQ mW0U(i}Y8f1Y}IdR8G<+O=vm|CT0{{Jz,QZq' );
define( 'LOGGED_IN_KEY',    ';Ih42E2=p{`H3X/_?;ASeXIhj|Zh^3=F8yLpyu,H<A`4Y{Vyi{T&Qx=?*Z6={jLm' );
define( 'NONCE_KEY',        'Z1s].g`!R+^6Pszz>Wufe` :QtBj)V;3Fx^2X75lsPcP_ARBWs=ncItt:od%R02%' );
define( 'AUTH_SALT',        'Dc]=]_P^-NNQP_yprvG$M.<&d.XgzDKQF9<]r|Y{uQNH<Bn7)J`eTFJF<H)Q#MzD' );
define( 'SECURE_AUTH_SALT', 'E]*`#z%LD!NEkv;Y<(+Kl&E.,O^nY+OVt<~+?EboP#yLj8>{k&$7#1w[[bRwnAI)' );
define( 'LOGGED_IN_SALT',   '].8G-<dD#8 7>o,%p8]Fi}yen8J^pkkOg3,jv;N-T3.Ll|0r59r?UZXw(u09{3rY' );
define( 'NONCE_SALT',       'SQZvnf#3@}3xrw.Fz`N?[jKaJaimwCkJ2Tl(3R&s=,2=NV=-MyNabJ$Ijx2~ilzW' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
