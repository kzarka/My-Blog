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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'L^S<#Lk y$`SN`Y5&*& 12$:%F/=/Bii4C+Se!2+E#0)CD|^aoAoih*fkM`bUH8.' );
define( 'SECURE_AUTH_KEY',  'BY+2o<T#[|!3mOKcf:+X|=mCw{]^{+GdgvyKZgJt]ihi*g^/-wSCJpl$?He& +9*' );
define( 'LOGGED_IN_KEY',    '.%^@PTxGzo[mNgc;,u>jfK?Dk#i<+=p7AFgJ#S&8RS%rz UUt[@|vP~7MUFFm/1o' );
define( 'NONCE_KEY',        '*fQ>ho:VtmvbhLPUw7$.PVG]1Zijg}02l)b!7U2Z1DqRg$>ITL~E+eCGqm@biAD)' );
define( 'AUTH_SALT',        'pqxp;B+IijQ{6IM%YN)>Q9Td{x$7J^O&u =TA:R%JtouC:.;G0vi 5Xd5Bv_N$(L' );
define( 'SECURE_AUTH_SALT', ' o}(e?_KEc(Ua9[dtO`TT72&Elma|-0Vafr1C@Flc+dp|y(s{J(D0!@yP~7t:|]6' );
define( 'LOGGED_IN_SALT',   'fdE#.5?oMN.1@w-%>&K|;wR9e|tuA G u7q/j5ILYH2;A({m;;T~@Fz1K<dK%HE<' );
define( 'NONCE_SALT',       '{]q2bEQh+ofK^*`JUX (mtle(mQ`h7mQBuV|d5A3{@A%K`[T?aC l%FQuwsm7S Y' );

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
