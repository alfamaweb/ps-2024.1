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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'alfamaweb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         '%N=haR @B~D|9L2q[Pyi9FI$:}g`5u|Wb FQf%Gec1sOD5jFK !gbKNG?ZpaZQ}B' );
define( 'SECURE_AUTH_KEY',  '}[wmNW5hXe?B`O3hTgr&c-z&k27;=_;He|0@VH@h3T@t84DZoN-q;BcPwzw Yv(o' );
define( 'LOGGED_IN_KEY',    '3oZ^UL9I?PW+U(~#`hI.UE[uA,]3Wv#7xpaPrvn,U<u/Lw^W>}f2Y^GG8*/2bO`/' );
define( 'NONCE_KEY',        '99I,:8%/l1r-j*%G;Y?V4>7/yFdGe&1`)Te~oc6bTH^<(w=v0@m>cm6.?Sc%7GW ' );
define( 'AUTH_SALT',        'SjG9DEXV]`pMVO6*{mUi7)KX[(?Ty?ZDJeRM6Hc@X2 56kl@{Ka>pcQrx$j2]bg3' );
define( 'SECURE_AUTH_SALT', '5wm0vQ>CVi:?jaZ3;e0r:|7^O?+^6%pw@_k`G127u}3}.^)+yL6}-kXvoT_`:[9Q' );
define( 'LOGGED_IN_SALT',   'nx^@0fz8nHA`pD#q40WQ(3$d(X)Wh~8smMuFyc/e!O52<0]=aI`6l>uaVeHPJG8!' );
define( 'NONCE_SALT',       '-t;|Xd==a[KC@/MY)_}%@p@mV<SmWyu$9$(~$kEvSg.{UJJwsSex{{lm[h{;L?^5' );

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
