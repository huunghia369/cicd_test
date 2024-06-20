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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wb_db' );

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
define( 'AUTH_KEY',         'zJf6 |=X:g|W^Jy]2 dV#*>YC6)*:l_D&<L*h?x5?v*+cM(s);U29;~E6C/Ioi8M' );
define( 'SECURE_AUTH_KEY',  'uPig66}$fgC#Eq&+oHb^zGeUBQqWSpGtbJ[eWOMnlu%TR_du6tqDch#U047mp50V' );
define( 'LOGGED_IN_KEY',    'MJ^W~0>`Ay;1R-|j!E@v>3?SwxbmOo1!!mKF1Sc-Ug;UXKNdCch*Je !Py/j-5/L' );
define( 'NONCE_KEY',        'Dny>i[4H5^i3cqd(A&>)&ct}IGS>O7G[ -@rX/ y]B2aNMQ?ce]r;6Wt,}Xwn?1]' );
define( 'AUTH_SALT',        '-jsx7h_vf;}A*}H+t2.1wG0]6IA{p)psqe^ym{78AC$r0y|?7U>^Pek<(9o.e2gS' );
define( 'SECURE_AUTH_SALT', 'Ik x3r.+xupUri+7!L2]5GRJ:^(*.FvTg7=q:eO0[Xe;6g?~`L3#hr?>U#)+:IPb' );
define( 'LOGGED_IN_SALT',   'pt%+DsEPe];ho5D)iOw>_e F4x`3Ol@W4N+Z/AO_q%.*]zI8G}nIq$3^Gv!3zXuI' );
define( 'NONCE_SALT',       'nu#Bw4!`nj.kHrl-:2?wWV`AHWACtV&i{}m7gkkY{V0K=XP{[mT)iM=7t `Gs+a4' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
