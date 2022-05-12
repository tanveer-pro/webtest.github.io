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
define( 'DB_NAME', 'corporate' );

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
define( 'AUTH_KEY',         '@!!:rxce+4eG8^]IHlEK|Cm~vdU7c%L9dnH`Y5sp@E_gTi*<UV~_>a7WNfOe^4eg' );
define( 'SECURE_AUTH_KEY',  '`PNXF%8C5L1f&)q89^~s%pyQ[CNn/H~g8`hf7v[D~*20RMEz~umc/>I@>sV<z5RO' );
define( 'LOGGED_IN_KEY',    '>l{^_RBRAC1Hr0T8nf{QRy$tp^Tp&l[~Yo07j.V5dYq]r)4>Um<@eteCNGGr#@y<' );
define( 'NONCE_KEY',        '{A^R[:4!tX d<wKf)k(xoqf1.80B9;bRU(V?K}8wcU[l):QM]nX4p?,./HwnK0w+' );
define( 'AUTH_SALT',        'ma~1vsH,17 hzwbSGihV,YOuw2NhV$a{rkN#.!qWra|nYPpQ60}j)U?ffyr{JJ}C' );
define( 'SECURE_AUTH_SALT', 'TBj-C=Tvfi0NLsAgut-Y[]/LQF0F412-^mAq8:RoW2:{Z t3xm,o^aI%Hz0:P-uL' );
define( 'LOGGED_IN_SALT',   'a^S!w(MKnNP1=&M_YRxgANJo[mAXwI]N)1]cXPR=wnj?4/hkd@F*`!lEqItU#36%' );
define( 'NONCE_SALT',       '(08Zu,WQ,f g`Y)rsoHwg4>2*8}6-G=<Wc8aR+P>db(p&tYfL}p1^TuMS^Cj-+8Q' );

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
