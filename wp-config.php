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
define( 'DB_NAME', 'wordpress_blog' );

/** MySQL database username */
define( 'DB_USER', 'wpadmin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Eranda1997' );

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
define( 'AUTH_KEY',         'vZ2/}MUJ2zpZ;+IOe6L#gK?Bs5z~0!C#!)r=7Ze1P?_FpSjz4eS(RPo:R4q{C/`3' );
define( 'SECURE_AUTH_KEY',  'kOkw7K+4o2O-9gOy[hswA2skt$y|ZgX]wKV82xwEuk7}zH]1 .(0<y4aa6m;jCX1' );
define( 'LOGGED_IN_KEY',    '`sLXrQ]xm3HBC#XEMYrndf}#,<0n|:,.#39<,:jwiSH}2Vu1$<A] &w`jZ4w-g(v' );
define( 'NONCE_KEY',        'i3q%3OR*luI0<[>3Q+@_^sN#qp@SZVIDuGwA{rKS%/VK/Fng|n$) R;5)MVIIlQS' );
define( 'AUTH_SALT',        ';o.!6o?p9(ngfN*}OAh`n&_0T[uQ2wQ2]55P@0orlN#x`z(+?xq(tf+?H8{?iq(V' );
define( 'SECURE_AUTH_SALT', 'EJx+11yaNedj~;a:Ph=2uN6Jm2oS1R/C132=1G{@+tQEA!C0P0LHw1<Pj;/_QKtZ' );
define( 'LOGGED_IN_SALT',   '/BrDbfomAg:OeY~Y@t]isk5h}_}7_,:N4lylM3o/pbDk^Q&#w0?gkW>-FJ&Qmu`F' );
define( 'NONCE_SALT',       'bJAT/1HA5bF&[[!EgJ @Faf+5>_wc$9ZKUR{YV:6sT&S8<9oos-i<?![vUqTk@ZN' );

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
