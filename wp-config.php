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
define( 'DB_NAME', 'worldpress' );

/** MySQL database username */
define( 'DB_USER', 'worldpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '*hd1v!;DgPy<yaI&-,(h&2@2icvh^N9*KMJ.C(1CYK>l[Ml9&r~)/O3=jdlVU9U:' );
define( 'SECURE_AUTH_KEY',  'd[^iSBOIOBrsLV#roy:hzSwpP,XS>lt?S9?x3<H*Qh1W%jf>h<04/24=mB!s4wf]' );
define( 'LOGGED_IN_KEY',    ' H?Z5%Dxu#a8zl`x-%i^O5{>4h(:T!&Ee|?R>#fV@KjCg*eAXKD2sSbDG#OCtKgv' );
define( 'NONCE_KEY',        ',vl/Je7/W:+[(^=W%:+fCY)eHc;erR8s=U.5wiIC=K3##A3|MGfz9qK/jj}YhP(N' );
define( 'AUTH_SALT',        '~K~qj{KO+h7-0.xc7N3HShAI<9V&;6_OYLzJN9<0bh~&qy2i43&dn r6g2#3Rc#*' );
define( 'SECURE_AUTH_SALT', '7S3CILb:)*HsXT#ss-5nnB<ru;#&7PLr!j$/CGr<eE27VP,`<OG=}uscB|uS3wDS' );
define( 'LOGGED_IN_SALT',   'Ra$PtJf(].^p[}CP@=j5nJLOC.P.=C$EL&ViMDp3+,_q,>p?CCEc`s%it~L6mBr#' );
define( 'NONCE_SALT',       '/WY9!ETdW(QS]xMmhr{k?{zvwR~ %Q{qrfd6C9OTy.8PQ5.i4+T<8xZ@X6eFAhoC' );

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
