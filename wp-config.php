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
define( 'DB_NAME', 'dpmptsptk' );

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
define( 'AUTH_KEY',         'U<%p/A|ae/ysE30!=}<h]q#xNR4hf`zKeK`8wtm;N^]Iw.>a=g=-5A9]QcNMLhy%' );
define( 'SECURE_AUTH_KEY',  'z,d,f[uz_}*h5i li(m=iW8|rc9e0+a3tO)` Xz33w11_FCd3(P0e&ieO[I2H;mx' );
define( 'LOGGED_IN_KEY',    'OYqhh9m}Gk}Qy[Lh Z|~I 3=~U)ld_|8zG.d2JBF%3c{JB#w2]ey:4zyp+?!V>M8' );
define( 'NONCE_KEY',        'WBwSCzmEqgwM_Z+vUR8n5T+uTH787X<dN0$YwkE$8L7lOCV2r%2>iH-U<h}>)yq>' );
define( 'AUTH_SALT',        'KIWB`6FQ0e1Zn]Z>1))+>2#(0=fs^;GOP!!i~hF$Fm.!)_R8b(]N+@qM<mQdY(S1' );
define( 'SECURE_AUTH_SALT', 'v%k1K_axZO}]K- 85b!$6JYD;x[`)>&;L6@Y#Z3+,NcA^o5vj^XQ!oUZ1Ga:Y`g1' );
define( 'LOGGED_IN_SALT',   'xry)0NFA;9_w>!4#*xm[o{%XP/lpe0jV4?(Yxld1q.Gq_r_sTdNZ?a1]`ont%>Vk' );
define( 'NONCE_SALT',       'DhsqY&3gUK@iN8#vz f&[;f}!.1S5p7a>N-n*@**Uhg2Qwc`E_>3PY2oE(+7x}(-' );

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
