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
define( 'DB_NAME', 'u565517868_2ettu' );

/** Database username */
define( 'DB_USER', 'u565517868_lpLuR' );

/** Database password */
define( 'DB_PASSWORD', 'F5Ye8Hqevk' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '/G23I.pOON?h c YzyS7bSb`%^PCZY&i}U6Nm9*&1>4`)F*V>LFNOe8o=}rVNk:p' );
define( 'SECURE_AUTH_KEY',   'w8Ac*(h^?!PekSKy>CNIxYt4*3A/N1=BTj&k7{6:TFW0<k#)W^|%Vb?6xbt_QFuG' );
define( 'LOGGED_IN_KEY',     'rMF<Dp~L)a~,6Q<YHQVvWa_XF#mB*o$[DWdD{4Nk,@L:K-qt<}U3^gxM4OWm=u+1' );
define( 'NONCE_KEY',         '9&FiB13n/kZY%Z]hHY7d5Mr~.=Ba)>ovh+suN>M.1+sRGaBZ*V;|`AaH`jcXNHQA' );
define( 'AUTH_SALT',         'nE!,^gA7l{lvvGoZLqV*}G{W?O%Ayp+4UQyW~5Ff*/:hV{m9f>_Y6r3p#W8}zd.P' );
define( 'SECURE_AUTH_SALT',  '~ iNM#2,9<O^z2%UKPs-R>HcNdK}s]hT1)}}>4mAU*hHy2MgUsc?)O<Ex{!X,CHQ' );
define( 'LOGGED_IN_SALT',    '+H0G@SSTdr>nwEL0>:G>/~^OX3Dl.a9(Rfll#zf!afHsAf,(@{v_anB/xr2+^ceP' );
define( 'NONCE_SALT',        '-@e`DEx_xptr>]C,WXfy#@rOAX(G|G{Vq]ro|PFp#DJd`Fg?m&x^OEcce< ?m,#D' );
define( 'WP_CACHE_KEY_SALT', '^TWRhh3OlsiX^?u-@;!Xy+gF>iAZVZ[9>l|jF(uN,1q)&WPV2V`vxIJ4n.B*/(5[' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
