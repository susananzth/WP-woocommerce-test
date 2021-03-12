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
define( 'DB_NAME', 'heroku_9e23a8364b62d43' );

/** MySQL database username */
define( 'DB_USER', 'b67ef4dc4048bb' );

/** MySQL database password */
define( 'DB_PASSWORD', '41c4873c' );

/** MySQL hostname */
define( 'DB_HOST', 'us-cdbr-east-03.cleardb.com' );

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
define( 'AUTH_KEY',         'g2n=``qJ32G~NM3tvf]o7~I3M6Ey*3@AnWZqnXL38_&;?X LN1HvwFK%hzo4NV*q' );
define( 'SECURE_AUTH_KEY',  '/3m*vsZ=EG@buSB):vGNL3T+sZ{R}TKFqIMTEB4?j}< ?H[is8]5lBlin>5pf%Nz' );
define( 'LOGGED_IN_KEY',    ':oerhmmT:iGPczCjg,2<e-^)y=`Mu7iYwDhStwD+1/cvA.2JtR.KTY]Yce@-h| *' );
define( 'NONCE_KEY',        'H?$?x&A^IA6[*JSor6pQw!BND!=1[:J `M2:&sk }`21F&8$7/,naUzjX^t8q[s~' );
define( 'AUTH_SALT',        'LRz0FS|N4&P }Q<?kAE*}eK2FWu[b34Hd#?pO((rpU$WR5b:hPzBXdr)@v8oF[Ly' );
define( 'SECURE_AUTH_SALT', '.!yWv}jL&`a>fSEoO(=sW#CJ(A5AA>z^x!~<H^ K{)mhnEnpronD2MBYfgw>UF$O' );
define( 'LOGGED_IN_SALT',   'z]MI5Ogxk*dxB5=&O$F%;7F$0Nn@X(2d/?eZ^ WR<<ND8@GI{TzH~[#{JIBb(LJJ' );
define( 'NONCE_SALT',       ' s:X;AC{b(S0Bxx~zemR sdu_3jC{X?.&V!<d/^FUdZSr6bGvWF_9|X>a:TX:[|M' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'snzth_';

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
