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
define( 'DB_NAME', 'viet_Db' );

/** Database username */
define( 'DB_USER', 'viet_Us' );

/** Database password */
define( 'DB_PASSWORD', '2024@KPmlmgONNgn!' );

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
define( 'AUTH_KEY',         'MFIuCNFwZk<@htUoE>N+G[;]i*/)gkzg|fPy,5IxY#v2qF.^;rE|Fi-9KxJr)xO}' );
define( 'SECURE_AUTH_KEY',  'XI;UWw$Ku6n(mEl.F1NKO_v:P@=$ ,G!%ybjE6jw8]!GN08nfO_YhGNn(2Q(uEn}' );
define( 'LOGGED_IN_KEY',    '!?d%kD^ S ^jP8D%) }$ggTGa2 D=6@#Y=xaBwF63^a8:0FT*3+y$mH7,zgK)k>8' );
define( 'NONCE_KEY',        '~%gK%iFK-n_kI!vDN)UnY)n`/[)57u<tj<^^A(,kpQL@@l-#TRPbk`SBG/%JI;{U' );
define( 'AUTH_SALT',        '>JR8m*XVW%B[}H!4QVTtN?XIve}yIVrneERN?,/m=F}/,t>R*+mc%CIry#3N[W1d' );
define( 'SECURE_AUTH_SALT', '(hA;?{gdp|KP |8MEVBd7fw:M3?g/|(%DUkG:oP)+p6?52ox#jMrATs(r}h?zDH8' );
define( 'LOGGED_IN_SALT',   '<(pij=,3MPlU,:dC$6fG*vO|~MGMbQ6C_k1B3AllWStSk0+=3)][<QX({b6u|)bQ' );
define( 'NONCE_SALT',       's^I[=h] A,JW%Xn;4Wa8ZBf%$b=,55WrZ|HtoW/)cGjEIy&azprL1/22E~/ ZC1c' );

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
