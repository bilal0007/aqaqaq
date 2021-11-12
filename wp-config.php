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
define( 'DB_NAME', 'learning' );

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
define( 'AUTH_KEY',         'H.DC0x{R|+tI[@m->#@uq8er)iAa#2<V)C &,o573<4)b!}:/U{TyzhhBitP/.U0' );
define( 'SECURE_AUTH_KEY',  'j67S00)d3bB8ow&n^;=YG 5%@p}o+ HIUgi+LWVWr$i9&@5M`zQ=?3Yakq]JO7<A' );
define( 'LOGGED_IN_KEY',    'gq},=MgX-BzDoot3U7L40^bhgmEdo/V@PWHXG^?$ObwmTK-sR}2so7i9Q:w5.PBf' );
define( 'NONCE_KEY',        'XNuiQVL1VF8B 9F!%#^oK8~~kQtMN4^qGCIDRK5SbFfcs&* !MN3$8C_t:aY9fw ' );
define( 'AUTH_SALT',        'z):`E )!8TT:4SsP$JEfE%b#p~OA~51rS#7nPSZ_ca+~`3BY0BO[wi1Dm+]T2*MH' );
define( 'SECURE_AUTH_SALT', ' ufpC{. I/s}|d.Zy]fnIn*5]k$ubZ2Hg&O.;{tHh0<V972i45SB[6L0.R(.wr22' );
define( 'LOGGED_IN_SALT',   'Xk8xoUf5bGJ#{35;Kw+ad% xA`(m8QT#mR*g<GRkB!seo+URVd[H2}82mqza`#L*' );
define( 'NONCE_SALT',       'VoW?22m8S s>B86[>k4W+dI<p~:%.AJSd]&o|/;w/#jN~AVv$2#^zv2H[#|QnWSq' );

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
