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
define( 'DB_NAME', 'cvjupaga' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'T<lP>4jfgVt2][04/HVGZLbQMW1$bOqwtU2A78|cG+X;t0 HH3_x;$L6TM[5iMs,' );
define( 'SECURE_AUTH_KEY',  'uOv/c2jl~GJ4u#WaU_Rr]1kG-{^!FTtH!ZT!`rtwq^-=X=7i8K=nFU`.7KT{JjAj' );
define( 'LOGGED_IN_KEY',    '9opzCT|}VwBCPy1~{EF/|=h~e2qv_ ]wa#[|` jSzVttC5#>S]}nH)4-sk}}L{:U' );
define( 'NONCE_KEY',        '`cPD5]Q C/WFdE9Dx&t=4]WjV%hp(: c5peNehWYs2<KY}fc.fci3uD<+`(z<TIe' );
define( 'AUTH_SALT',        ';$kD!QL`WJD`d4`fpnnU,8VMr69l>r|=W zx~A9-gzS*TUn~WA`I@Qn)F.Q~uNZs' );
define( 'SECURE_AUTH_SALT', '..VdhYf+e8%a0HKifi?g6B7)}^F#XV35ZmQ>S3~iy$qGA;@!>2k1m;3 C(L@x`/K' );
define( 'LOGGED_IN_SALT',   'mO[Z[%M0z26Irh>aIJsio)= aW)u<OsH!]#7+u22J%Bl[@t&PT8V#^}?G e,U6QJ' );
define( 'NONCE_SALT',       'DLdS#HmH?h+r4mx6Zu%fe(}mOb^j$]~qpzK$Owq 14<;5l}OIRB,d&(&y.V$@kZf' );

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
