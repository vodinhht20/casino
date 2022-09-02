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
define( 'DB_NAME', 'casino' );

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
define( 'AUTH_KEY',         'sQT!>fd1aUGLPj8;( -i^H*t! DEhw(Eo}d7<Mv^:feZJh5evxs7e`&>)sqmdj44' );
define( 'SECURE_AUTH_KEY',  'Aku!_*ErH_A!V5[LdP!K<PY:|^LZ>NR3h=lz{)8[gE.D_15w}iozWhgc5UGCdKu{' );
define( 'LOGGED_IN_KEY',    'OfPsSJUfpEb )S@<`Q)ue@?p]RKmJQ1YM6htH2IP[@OG#BSB0 4#hc,4EY~&M/6+' );
define( 'NONCE_KEY',        'r>HWn.Z{SyL!J8PKE3}1x_&UGo-mVV.L se* I2rf/SdJPTHPijgf_6ed9ou3)6m' );
define( 'AUTH_SALT',        '2eCF-dIYAc?LRG<$AQ9c|IhN<(g6_RcR12jhQ]8!+Gtx^zeR7A/$kw;gz(6ANA!#' );
define( 'SECURE_AUTH_SALT', 'AN6g%8247ix]e7_IRUDfgeAz%vQ.!^(^p_;Ks!,%;,Q0P:UJ $XI7nHl^OsTjgr~' );
define( 'LOGGED_IN_SALT',   'uTuw~4U)T8-IBU92=B6-y2/p*1FcSJ+q)TV}?at[]t[!D4qJyUT[?s<Dw)Gn;c14' );
define( 'NONCE_SALT',       'Y]d8hzv:dLY :GA|e2Q?9u.I53:jOawtEA$j_ih!9R 8fpeI?*5;hfxY;-$$7cB?' );

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
