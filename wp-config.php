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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'EV52_>5GCl+6k`C6U;MS]/Fw3M|m@_|Y#YAa!{PS{{&<BA66vk`bB%[W=-Mn`6/F' );
define( 'SECURE_AUTH_KEY',   'ubk,T,l;4cYR|M_(A~#Y3tlwb..0CMCSX$;.(hgBzzP/c0rG68hYmX-fG$QDtLfm' );
define( 'LOGGED_IN_KEY',     '(>Q%S^,wMqSITfw},($/rR9Avu3$t65G)0,9A`8&So/qwI^~)-iEg[7cqnQ5C,Kt' );
define( 'NONCE_KEY',         'dH<pEYL4PITCudyx+HtZTnll/,$kfE]Wxobv450vo;Z9bSi_x&,tm7BXU}_g}_Y3' );
define( 'AUTH_SALT',         '&8wT=c^_SwM/8TV8bnE@_)Y36hT7+j5WG,mK(k4VV`4{K` x]H5k[L(95`<hM0>-' );
define( 'SECURE_AUTH_SALT',  '<Z~_V7bw_jYO`}+E|8h0`wDIqTj@|8eSp,?bve1U GMS._[{rpSHI;,0o Pj-R*]' );
define( 'LOGGED_IN_SALT',    '?xF2v(|r{s-Durj81>k$mPPODx%xnXul=O;!}Q3?+RTKJ`:iL.u.mY~/nj+b)c-@' );
define( 'NONCE_SALT',        ']#*zVxRl|(%I@i10&PTF-t2R&i|lVi~$5[*k;cO]z;3?}**J!{<hfVy$8@g)kK]S' );
define( 'WP_CACHE_KEY_SALT', 'mBXL=Gx<nrRRFL;9BP?_{fe0!Fi^oMGe!MqG`RmBwILj4N:0EwZb+97I+b0{Ni3M' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
