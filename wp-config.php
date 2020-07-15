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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hemen' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         's.ErNpP^nHlel]W1DD-wJdTxX%yZ7)he]X<cFkqqU%9Zfz[x9}iPns>?j`GcQvXv' );
define( 'SECURE_AUTH_KEY',  'qo9Zl4|`eVSu4dJ,?[3loY}~B0`Gx:,(k@-O#,Tm[Av8RHS/J)+#f)@|)8hp#`Ki' );
define( 'LOGGED_IN_KEY',    'Ale}DJk:5(rnIG$s0X~{zkgMk@9Scaxy^I)C`SILIiG7`vPb>CVIEU_!,S$6;v?,' );
define( 'NONCE_KEY',        'D-#NdBs774f#8FPdn4GFbZiobi3h][=hXnylKzt.u%m/hQA:@I[Ov>u:iK4AUONT' );
define( 'AUTH_SALT',        'VJD*B4L#[L}?YSOc`Q:hv.OYm+yhEM7Ykr2:^`5,c_X7,A>F=)f<A_)kIW[=s,xB' );
define( 'SECURE_AUTH_SALT', '9h/BW,3>hw`FO7;VW`0WbX.EU#aNi*IGdzuL|u<kDPXMJ^@g+jk{d@/!C1es`v=P' );
define( 'LOGGED_IN_SALT',   '^bsAD#F%`t7:TAC$w780=`d(tD=:.]H+-YfkD+0P@|(slZ/D+X%hKJ[0^ca^tz=U' );
define( 'NONCE_SALT',       'qGy-wsCE8L$qAF%ysU01j!h}MA[[3h6Kd~wyG`ocML_wdXmc6r^Q*[q4~5e$EX*q' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
