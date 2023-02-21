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
define( 'DB_NAME', 'gymfix' );

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
define( 'AUTH_KEY',         '.omMG0.XVS-k-4We_Z0A`n]v9v)UT99Xl;&j=]PXT)NP2GFmj+4#ywK^ju/:pC@9' );
define( 'SECURE_AUTH_KEY',  '[bFdv2R:Ez=>/(sB]@#?7GkaEA_HGegV0m]w(syXbK}@_31S>wKq, 5=~-7]b{@I' );
define( 'LOGGED_IN_KEY',    '__vCWEAXHN,1(93rbd8.Mzka83y^cQ(1,^i7{~~EM.M8qM@2ECEtm5eGi4DtT$sF' );
define( 'NONCE_KEY',        'Q_>[/Gjm<[F7hji7Z2Xt,WC/D&{6+9MjaQ-NxrvE;EqW/6AeHD#2nb%_0BH_G.%k' );
define( 'AUTH_SALT',        '/8X)R::&JBr-@3IB-L3yaW+U{/{O(j>e#Mpb&*F#|veC-6lzX6K{GE?O55hP=n@p' );
define( 'SECURE_AUTH_SALT', '&5wujxy_}~g#=/v!D`yl|il`x+]3Cu=y6SeV4lzb8}?3]~<>YQK[/<1+7g,Qn r9' );
define( 'LOGGED_IN_SALT',   'G&/DuND*8Q4)E1X1@V|$GHe!H.~P-[1|CkF$4XE;2^bW#^U9&u-@Hf50sSIKX>+Q' );
define( 'NONCE_SALT',       'gM@L.h?31;A^sPAbXU,JCdl,b0qA2.cj%-o^`}WQ.>y&e]L)Yxuo+Qukrw:RPr%a' );

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
