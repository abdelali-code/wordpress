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
define( 'DB_NAME', 'winwinstorefinal' );

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
define( 'AUTH_KEY',         'A]%rx SV%S0n()J^w~e$2ijI!3.@g6^2#lXzd#)8;~@W/DGVf)|vXIaLl6.^fQN,' );
define( 'SECURE_AUTH_KEY',  'H-bVs6BpkRy2=pq(W^Zok[@Kn6nW?E3m%+{!NGx2&p75jW;]FH0GMu>Jc|2QE2*Z' );
define( 'LOGGED_IN_KEY',    'vCp&boY.I$T-[Y]o+<]h/;W-`}*w Blyt+[^6IZNEfcygu]!^JDyWJy^iZi=zdDQ' );
define( 'NONCE_KEY',        '`qmP<ilw#e`Jti)UJSEaLABs)H/@:BotZ6*F~WxfKk#@#/i[=bu!TQ,S4>N pB$|' );
define( 'AUTH_SALT',        'muB/-fa<iE4OL=wG=2@9q1Utx*, $H]GBb+^_zd|#Wu[s%D!BaL>DL2CFQP0=TVL' );
define( 'SECURE_AUTH_SALT', 'O88QPT-L3q0ik(f4& dZp~4oW} &^dQzc2q4Ag0+b9r!/]`ly4j&v1>>*d5#q9g-' );
define( 'LOGGED_IN_SALT',   '2}dPF{EyLBuH&t<nI-vFI)<1xao6[fUG[b1<.>l$Y`*$(-.pRifR5]%)e9O^f<$|' );
define( 'NONCE_SALT',       'T^)D,P-2YnP/&N`V}*!7wT2Ml(yP?PR1{8H8N/Y7bM<Z20PHu<Y5!ad*vnrW{=C?' );

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
