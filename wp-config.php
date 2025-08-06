<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Zubair-Cloth-House' );

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
define( 'AUTH_KEY',         'RcQ<. HJW_9Sx@SdJ&`)#Nc]}w81krP(M4]#%ThxbErT{A>&7#8`o1&)1a6u`EdC' );
define( 'SECURE_AUTH_KEY',  'q.TA& 8x2PNZ^yueN=qMMAS2M3TYtA}$3]N*;~=gFl_Wu{Vh_{<Qy5W$C=[z1ty1' );
define( 'LOGGED_IN_KEY',    '4JS4X&7c8N)Q81b??F8id ,N`7e%tlSCXA-5mDGnBw,j_]T4xa(S|lTT&h$7QGmI' );
define( 'NONCE_KEY',        'yS?#rWU0O^mnjoH0*SN<V|.)1XUW<VX5C1?DRF 6qlL`MK {uIaYaxYhXL+[U[J0' );
define( 'AUTH_SALT',        'aQlq``ev;0B22`2zndnbos92Iv|;-?,qfa5qwwVN9q~ac5@@:],,9J8@Z:%u$x~3' );
define( 'SECURE_AUTH_SALT', 'L((D_ax_{(=<Q|I*a){yfhVkV1v u)<i9%D#y|_BS1dp{1~)%gUAlB}DB>-C3oya' );
define( 'LOGGED_IN_SALT',   'A7_*qM0qaL5ldP#=pIPs5f0-;?[@rB|!Yjfrn<YX!x@C!UEK. P3>un#?r,J5d|x' );
define( 'NONCE_SALT',       'YAD<: 20&Gp^$v?l#fZF[Ll ohM100&+[P:qcIw=: P02`L!(|lPJRNq)9V/>AIh' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
