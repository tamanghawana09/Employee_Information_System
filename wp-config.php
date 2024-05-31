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
define( 'DB_NAME', 'employee' );

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
define( 'AUTH_KEY',         'm-+=`EJiutDO6W?&]WYzvp;BbeZzjshb%cBgcyNC&&V~2)Suw{6UQNy~9B;0O*aS' );
define( 'SECURE_AUTH_KEY',  'w]*)mU.I1BGQoTw,j={:w[`xSEI3#kDvMAZ>7)8mQO<1({z/X7X`}^BN#kKDuiL,' );
define( 'LOGGED_IN_KEY',    'vjU[_;2[;.jzgjr($x&C.PBhXs+rk*>^I$^`P^5~@J,60mtabf%@$!LSu7mygIZc' );
define( 'NONCE_KEY',        'a)9de@(jOW5(S<$9Jy[@k@[4z}[D_`2i$&^e88ViNu8U>xMinb5DsJ{Pc&7#c%*@' );
define( 'AUTH_SALT',        'Bv&Z)E4y|m_2fl:wQv:v|u~SZb^lyi7cxBl1ni*=la:aI[!=_E5leau-O@G:QL>)' );
define( 'SECURE_AUTH_SALT', 'vv}DCg}u_rO<1;4V(g6WXK1ZR%w:oLn.##z*7dqz)i`xPuEkFAOnhN$uMMnQ@qSc' );
define( 'LOGGED_IN_SALT',   '9~|8iW7ycGLHii9L)zY!tRTi[~1YfB2?yS&V||O/_pq9CG}F/S#+1]m~WtSv7I6S' );
define( 'NONCE_SALT',       'G5sQPf`*CWXCN(25TK7@dlM_k},(}jt;v+;^5-dM4Q#8aDJt=hb^JPN2((o/Y$?k' );

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
