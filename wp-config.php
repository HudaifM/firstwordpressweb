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
define( 'AUTH_KEY',          'QF<UX<Zl8SV#1]@.5N1L4+s#Q|F(e7Z WN-wpW:jfkaof]+sw*9(mFI>?`ud.>3;' );
define( 'SECURE_AUTH_KEY',   'wm8twOYW43(PY/gYm(`}V2q{G6/i!p3reUs4o^G^L1)Qon?KvyX.Z8K!JSi9ZVbp' );
define( 'LOGGED_IN_KEY',     '/s}Jvht[h_3E`vFJZD;ucz|FdR_4Jir3qxrm`/oW r6 r($%#%Id)+]3N94gG>y[' );
define( 'NONCE_KEY',         '}FCV<f3>*?x`0X,{(MLAHT+oTF}OdAv@=<6{*dNc*D_Jm!pjpAO:Pzj%c{Fq$Btl' );
define( 'AUTH_SALT',         'AYoKFAm`(klPnq :rqiIKDH4Tf7`=U~sI*P_RY;eOjrEG~RN;.SD5p#~ROJ7sP,{' );
define( 'SECURE_AUTH_SALT',  '8TKB.S^d=PU[Va+,c?[w|UGs($`VC#E|3Qj32/7Us]+RpMd32X?)y}u#2/SwLJ1|' );
define( 'LOGGED_IN_SALT',    '*j%EuL/yiEj;0:SbQ;RMUszS>0{JKJ#,b,mP4N-pUlHJ)u_eAT R^P@0<LRfW9$o' );
define( 'NONCE_SALT',        '[6&zk@(?w|~c!Wfa5Y.x3|0 pHPrC^g+72oH?+O,COEs`.r8uZjxUnaU#K(un()I' );
define( 'WP_CACHE_KEY_SALT', '}$wV!8H>^Q[]VgS[pv](nY~rX#=-UoZ6V45sCd7>l p{#h~vg3RC3KVrxhz/(N|Z' );


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
