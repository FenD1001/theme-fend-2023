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
define( 'DB_NAME', 'yvcyjsakhosting_moifend' );

/** Database username */
define( 'DB_USER', 'yvcyjsakhosting_fend1' );

/** Database password */
define( 'DB_PASSWORD', 'Fendi1590@' );

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
define( 'AUTH_KEY',         '+jclS+LNwq#enKI[S69H|zb]b-<;]|r@kqPm@wd|80@p[$RciK4`V[ej91jmzZrR' );
define( 'SECURE_AUTH_KEY',  'gO?gvw?*g$}aUpv0AIe$Q&,MReFoFVW_K|3?oi+ZAra(YNOk_Lp$CH#=.o:BB83>' );
define( 'LOGGED_IN_KEY',    'eQ2%RXSha]$]5Ga/cl3Xm<PC /ATEvL`::A[nL6}[^*?fe|~O]!PTM!w+HW$)|TV' );
define( 'NONCE_KEY',        '/c63:)coaR`ZffK<L.DXt&&/Z&k!6<;aR7]fBm`M? 8^Epb&JW*[zzrTTdS&t%;S' );
define( 'AUTH_SALT',        'Ib[ntB`]Cr>lS:!v(v:J08H,@$z<:Y]LO=Gd,R@7?P.(ZL}2bcukbbf]qFz4hu;&' );
define( 'SECURE_AUTH_SALT', '_L[-& =ZCGS_M3gaQ nTQ[kUO?%e4/.A_sV(Pcc$FPb<#)I%:ZU[xCYPr-:qF&nD' );
define( 'LOGGED_IN_SALT',   '[@4f11o=m&o -9KM|m7Qaa[(mH3$tRLtG|(_=7A,O1pF1BWlZS,iAfQPl;(R#)H+' );
define( 'NONCE_SALT',       'cY$KmTUGRF|(r1j.? xHXV=pXd{MyT8^~c~p>0>f%zPD;Ly|we% <_!tLBX? I!;' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fend_';

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
