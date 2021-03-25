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
define( 'DB_NAME', 'rtdsTestDB' );

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
define( 'AUTH_KEY',         'ku%q`{*AidvnE$T[5.CnNggct7K|uyNjAZX6+A[ueF/eQ5U]=K_pDHW`sIJvv,89' );
define( 'SECURE_AUTH_KEY',  'S|.f8fG5m,x[vtPM(z8{6LP^]tWtR.8jca*=tvz^GMnhai@kuff;&8I:z/BfzW Z' );
define( 'LOGGED_IN_KEY',    ':+ozm/!ITmp/QxY8gX78gRZ{]P}J:aqd{(cJG(FM.~i :|`~jH 6}T<rutOQ-+ux' );
define( 'NONCE_KEY',        '[y6te,NMggx|~@H4iOuIK7U3bHsaH^1Fy4a*J5 |I>fqac-Xp|*~|E-!]T^@0MF2' );
define( 'AUTH_SALT',        'k$i>XkTU=HWe|v+-f9xjuYWXL^pJ&0-UirP%3ya.bKQEG?Nj1bYLAd?n%qmP{o3.' );
define( 'SECURE_AUTH_SALT', '-yMsFPNU.<us!3f27fKK4YwJ{D^wX&rMecBH-P9,~sM$XIvV@k#5cxfVg2.&J8ap' );
define( 'LOGGED_IN_SALT',   'pR&jce+TOb_Fu&QY[4MV^tjNs`k8g#3L&]X^*~Zt.y++DV%h@~!?t<=w(Vi:f5ok' );
define( 'NONCE_SALT',       ']gNM_R}^MhOLzq0L?Wz](`)p$g~`LZ(4hS,pfTsSW;b&xq{.UTqmzppyT _|FdRC' );

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
