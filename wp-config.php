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
define( 'DB_NAME', 'conscience' );

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
define( 'AUTH_KEY',         'C/zqO|vFJJf408bVr&qB`Q6<rq>p+wno=Tt-[Gbmc)(PQWf^(k0uV9#iSFRl:p8n' );
define( 'SECURE_AUTH_KEY',  'x,dn8]k0YE0fnd/yw+C zk|zr$&}>)Ik473gt3 OGgY@aXWnD:%8)?Ygx.LXS-cF' );
define( 'LOGGED_IN_KEY',    '% BbZ nYo|U{(o;#/iGX@rDd=Htmu/$W2l09gYS6!`Qj+SQ7}p$xa+<A,(~>K~cQ' );
define( 'NONCE_KEY',        'Y#6Or,r`cH57}4vWVHH{<A*&riL=2%E7l=Ax4l@)Tb~1M-hK0;RK;O,L}vuAv%&O' );
define( 'AUTH_SALT',        'J}7ZmIr@mV[=uXg~._.f$p6a!i|.H.Rm;:#Sz(7Yv%b5cC_pNZQVWwZQzGsVKmD=' );
define( 'SECURE_AUTH_SALT', 'cf<m`KYx&nB5N]u[H?uR/xE3tS3M OFjd;3:I{JYsCm/F>gMcZ0jxuy?Ln4*B3bs' );
define( 'LOGGED_IN_SALT',   'cdwtM7<0l!TGPM&$y! pjTP`8-))J9PvwTAPYR<#>Q=RbOKG~+b>=(QYZcs~<ea,' );
define( 'NONCE_SALT',       '$+~P5jjSdRsL>ZW>@B 7yS1x6q/WeV}Zt@.-]8;W[f0awE_b!w:2iEzBMR D+FQa' );

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
