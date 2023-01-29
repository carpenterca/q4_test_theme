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

$web_URL = "http://localhost:8888/test_theme";
define('WP_HOME',$web_URL);
define('WP_SITEURL',$web_URL);

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test_theme' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'NZ$ pC*W|}_p}KE[)Ed5ktCh}s-H69]#>RW0cD!9=ws3m-in82mLhmq{&*^sGQMy' );
define( 'SECURE_AUTH_KEY',  'IDYUAW`7&y_cm@M>fTcVR2ON2c<%L`3|R|i^e4G^&2k*I+(559.^VX]AalPW9Sh<' );
define( 'LOGGED_IN_KEY',    '_8+Y!.2m6!_z%nTn[:6OX.5=Kdw{)/cz^i?U7c Y.7R9&a0pun&3Lb$e`01nCdgR' );
define( 'NONCE_KEY',        '%qX}ZFW+j-C);>OiNiEsEO[K-}fm74i;2T.se,!]BP<kZN~HTM/$x*tFaQhh2y6n' );
define( 'AUTH_SALT',        'kRbQF~T?t/L13]exn1aPQsELFysV|<2{xykBi*K#9Z8%{6|gu`4` Yw#PjTDmZ^?' );
define( 'SECURE_AUTH_SALT', '^E<.`465tP,)14ncU@@pFhQz4{6u>Y|u*Dq]w{ %NMonLk7I: {%15s7Kbg-Yg(M' );
define( 'LOGGED_IN_SALT',   '}aI[^:%K;U[)u=&9?|EmoJJ[+z3Ln6E]W*9S^3B`cN!xcnIjKeJX1hpG1kv?UEc8' );
define( 'NONCE_SALT',       'bzQ9.}?*N6,rN~DQJu-$-t0k>AuSgP^YZ!Nf+]sv>u(1%7ij^X!v=lizHO)9sr;R' );

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

/* Add any custom values between this line and the "stop editing" line. */

// Enable WP_DEBUG mode
define( 'WP_DEBUG', true );

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );

// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', false );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
