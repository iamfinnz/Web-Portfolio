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
define( 'DB_NAME', 'bwaclasselementor' );

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
define( 'AUTH_KEY',         'Yd>DpTuk[~M;f,>]7bev!si]@8Mf&n7&gf_pi M32nL]!=+<%ei~;?9S;-J`U;&]' );
define( 'SECURE_AUTH_KEY',  ';]A`<+DiY{wcEYC?qc:in(X+g>dH#0NItz04m1N TbQ>R4^.PGTMk}*LBk1&?r$4' );
define( 'LOGGED_IN_KEY',    '[DBu?#*J[-t7cNoaiU]|(B#[e#MZ+ DuU#Uh/%?kOe2]+pm`u+++}UwOUB:nR9PV' );
define( 'NONCE_KEY',        ' _b/&Gz};<y#q6tbNeN/f!+am9ZmuE#~tyGP[D8/VS8Txj%Lg!W=k-Y?fU*UgUA-' );
define( 'AUTH_SALT',        '~-u@a5JT[8p3B7?.X$DH~jCi;2L1I*}vn^EwI)i,p0BF*@lE^`b,M?1HQ8s*)jmX' );
define( 'SECURE_AUTH_SALT', ' 8A#+Uv96?j2$BS&^V>cgjGc]3]wTV;SD$O?OYO>H+:p{Sg:Q=tn`E@6Vsyc(|B5' );
define( 'LOGGED_IN_SALT',   'H`h<t_2^CB.^Pf_!Oen.q<>:S2W4]{lF7FT;%|+w~~HO.xt@L;-Vu{HVBTKR1<SA' );
define( 'NONCE_SALT',       '/3G~1g8}*[[j,ClnXz*hdxj_;FcM*;B#%9G0w=I2qm@63E=U[)Dtt(RH#v(QO2Zd' );

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
