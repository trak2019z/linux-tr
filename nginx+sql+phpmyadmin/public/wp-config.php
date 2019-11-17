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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kicor_jaklowic' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'F=t0a&} DR3@AKb}vM/f*#A>^V#l]fx]P9pwz@J(n`9Wyz?Fp:C g,q?iJr:i##I' );
define( 'SECURE_AUTH_KEY',  '(BY%1CVY!A.K?N$9TM!{~azv]CwC>?2VYZN::02/,mcLO7#SUB/SkK%9z7ZY45`[' );
define( 'LOGGED_IN_KEY',    'jTQBwy*}s>1d[kudK+-{]G4H? ;h @~vac u#de3L|2~^JZ[LNswq6VV3{Iy0ix3' );
define( 'NONCE_KEY',        'IQ<U<F+(5z+:I=p6d![D7n~!cN(WtB^3IEK5x&QG6}8=5OuUyz@3.5/&oN6tWdp7' );
define( 'AUTH_SALT',        'oh@*h}UO9}%mP&4ETWdlsuJX)v^SF}X k^eA]LwwJ!Z+o,E=}j)ppvL4Y!7x=Bsl' );
define( 'SECURE_AUTH_SALT', '2k/KO^E4j-})]p7^nOr5TvG=k[.S^Rs0?OihC8dd>e-KR52=^v2<=H9R68&tEf01' );
define( 'LOGGED_IN_SALT',   '}W#4ny O.Bv`CWbd4{1S)y#voxapW+g:Z*45~(R?D`}WxB[]o>>H*pJt+|vua<;7' );
define( 'NONCE_SALT',       '-(}=o2v;o|{O{<x5.vlg=CgIC&!.2hqlDFypH{A[A4X 6#(H?(AL<o{y4EUH`,<V' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
