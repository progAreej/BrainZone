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
define( 'DB_NAME', 'brainzonefinal' );

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
define( 'AUTH_KEY',         'j;H #K:YnJe>G/Ndtz{lJ<at_*YJrr09i?^rICyA==}pL1I9XLKWiS!><W9?#m}<' );
define( 'SECURE_AUTH_KEY',  'SNH1;u9:lnwN~{=V$n^dU@0hIvBA~|=ptjzxW6pz2FOar2E719D5KGU6vpVF6Maw' );
define( 'LOGGED_IN_KEY',    ',:;S!;kq]OMR6haQ+@h>_IKK2A4K3aE/YB_d*mX t1s9(:~%|u@zBn2:V?2LQFE~' );
define( 'NONCE_KEY',        '$gdO.6LHP50%{{UdGiQ9u_j(U @Xr6}flW%Tnz8kJSO` Mi5GjZbV>[m{@A1}Wub' );
define( 'AUTH_SALT',        'nUKr8[a=lc$VTU0uN|c|u^H-yd|`Z]B?3bk=**j2;4dmHn]RU2(Z$P-zNi,~iw7J' );
define( 'SECURE_AUTH_SALT', '|@zuF/Bs?G)$-hPdlr.FKQP<xiP<G7ue.2OM{[3706!:6ANF5)dFPh|Ly78@2yLn' );
define( 'LOGGED_IN_SALT',   '~(%B+|b%cstaGqYp{F9/cg(JNB5KN&}?A> -<ZB,y)v98(:6@ofm?P544{-e!=j)' );
define( 'NONCE_SALT',       'guaXMEDvg`yVcUL${,2,Pw8M`y_}eik_ms3?`GIu8iYp8kbCZmmj.NvCyvxI{e{(' );

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
