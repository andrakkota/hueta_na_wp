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
define( 'DB_NAME', 'project_db' );

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
define( 'AUTH_KEY',         'OL^,[95hc6$-S?~Wx,Kss)I+@doP[b9,,NJk{lM=VZ1Kk]N*vOzKJ#2>Nbj5_NW6' );
define( 'SECURE_AUTH_KEY',  'g6!B|TJ![4<26YHOWt2G6>DlV07x?pyS{H=@osP{$ArQMc(Bdd=SwQq!v*aNh7|^' );
define( 'LOGGED_IN_KEY',    '*(X[xO+X<;0%{p,N/QktGvp&&E)V7jXnTM?^gT8P7[%= fgnaPz[y}WqkG#e40ag' );
define( 'NONCE_KEY',        'HeefXDws*}`@h>&_Uawp@j^K=Q 7/`494ZKKsuF-8oJ..d9FDmq`W91=.]`7#jK-' );
define( 'AUTH_SALT',        ';kC,3taQyg= |CEj^0yVXQxc+86)rc:%gsN1NOh2-v>>{eQ4:;u4E!Q|{;C9{RzN' );
define( 'SECURE_AUTH_SALT', '/|Q|IfVbLEI^[gzfIpf`T3!N:26iv~Fd$I4N,|h=MuctSf;G5L?Wg2^N=fJNBX;K' );
define( 'LOGGED_IN_SALT',   '(a;z5,<[uR&MZ}Dboyhj`&5Du%pHy[UeodIX&Q%1^}*~#T#YnJIq~N$fH:+lk:wz' );
define( 'NONCE_SALT',       'IEPEu8vBB9jKv^M+an$4O1>wtlapf.dOBAL>qXf8suE^U]0^M:K=}a?nf=9k3yTG' );

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
