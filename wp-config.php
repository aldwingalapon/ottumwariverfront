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
define( 'DB_NAME', 'orlf_orfdb' );

/** MySQL database username */
define( 'DB_USER', 'orlf_orfuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'bOeJZS69!8xJDMvItA' );

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
define( 'AUTH_KEY',         'OfPbmf{,cntWb,1JOo n7CGsz-A=&-sAbbh)UE2-Z8us`][?tsfZZ?g_2V^U^F*s' );
define( 'SECURE_AUTH_KEY',  '2H)$I=7%:[O>Q]n``cz54wyGe~SLCkR6lPGV6V=KZ~gTZ3eO160Ku S_S s.Scaw' );
define( 'LOGGED_IN_KEY',    'Bq ZFUd(;;X#xd)#_A}4$7`1X<OkA]{h.yeer@cfV$6IQElSp,JfpWKu`Us{b|nr' );
define( 'NONCE_KEY',        'u=Ae,#kMNWm0!`842NQs~E/Rjs,AL[I:Hzor{6/&X4$i%<z%W+g3+,E67:F=ati,' );
define( 'AUTH_SALT',        '< TX|jFK;B@Gvmx_GRMx]@]u=%,<9YE{sMj/[s}l*e0yw1$!y1z`uB~^bzH[&xyz' );
define( 'SECURE_AUTH_SALT', ';.B^1,O7/Kt9~6Ch,||sa0N0WM*|T,U5d6^y;HXt/[:aqcOnZ=W&>;Q%f@O4>#vE' );
define( 'LOGGED_IN_SALT',   '*Q(^d,K,n:[)sb$X!QrvI%N#ic<?!9A/e4w|Ru+z)1w7!i]^y2Pii8(1b1F?[tix' );
define( 'NONCE_SALT',       'b/b?}ZXLjKpw)0jHU1{@p5AEaJhT-Z=xZ`06%E[3&!@.KH5u=6Pp0@}(b6a#);,%' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_orf_';

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
