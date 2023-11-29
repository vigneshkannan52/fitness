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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fitness_db' );

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
define( 'AUTH_KEY',         'oR~-3NsbOqH`OD|dKz`3_.A(Iq[Y:.IJ{%CZA,:BO|T-q$(==ubvf`Ul?o~>k9?2' );
define( 'SECURE_AUTH_KEY',  '7$Yh20HMYbPbADhi4-TqKW}1!b8j`]u>V9{R]G=]7;~]q?Y+,6J|`3tGthk2i]}d' );
define( 'LOGGED_IN_KEY',    '}5;BhJg/U6j-s7+AyyH^%;QJYrqBeCI~;op@-G!?yS,rwExmBhVS^S;b.UQG`2{/' );
define( 'NONCE_KEY',        'r($1C6C?Ss>yw=V:Y_OLsBt-D95k@G@DB0.%yh~*.iU4$Wc>bgG4;@%.}A[3:u-k' );
define( 'AUTH_SALT',        'b-#MWs[u-t.{7kRUeR=@&<h>&-Hqz,W4/(%l_N2=wqm$&<fpb.e&]8%fSd@0EZ]A' );
define( 'SECURE_AUTH_SALT', 'wKO4[d2%+WA_^:sDPC8F++UB9>p###wFRQI_#i.861,Y!d*yC]NChYLMtTxsH`E-' );
define( 'LOGGED_IN_SALT',   '#}g+5wY95?p8iDvUTpJ|+e,@=>I-VYw.sT?CfLJfd+q1qoc+9zDiBtrRpzKALvvq' );
define( 'NONCE_SALT',       'i->EdFZyDde5GITOByw8DqQjB84Vpq`;APX#+#Yt%X9+`>^Tep%(=Top2>[J0.El' );

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
