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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'xs817944_wp3' );

/** Database username */
define( 'DB_USER', 'xs817944_wp3' );

/** Database password */
define( 'DB_PASSWORD', 'hfhetbhocv' );

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
define( 'AUTH_KEY',         'O`4rL*D;%~@p-VAKv}Pm1Asj!Ad.?H.q1Qd&+Z0akf<7yPuARo^Vbb?6o,6aCJ}.' );
define( 'SECURE_AUTH_KEY',  'tOR(st~V<+@VP]vR$t7Sretz|`XPr~VUmZ{T2+>!>=<<]MI(3%Te1Z%<{wfWGK*f' );
define( 'LOGGED_IN_KEY',    'y2X?Gh&=c+8%=z|szWygWbm/DP0:q-O>|@T%|(zVTw0Ew-gmB*8c3H]V:;0p9j86' );
define( 'NONCE_KEY',        '%[zVH;Us#M7.8.yr-mZ4,nX5mZz1SMWKQ*al];uMwdv=X3p%ty^E~(tj3?#:go^o' );
define( 'AUTH_SALT',        'C=B0,*&?jUm:|8xl[??8WE3.59Ro?`bt{8=@46Ut~nz62B42i8[eCC&C@`z+&|3Y' );
define( 'SECURE_AUTH_SALT', 'Ow?Oly*EIMB^DNQi^C]=}Y<t`m?&o3-k^lY zQ+A.QpN6SSqCf%;c^N8w4G)@m^[' );
define( 'LOGGED_IN_SALT',   ' Hqt/ar)C6:}BO4Zg)qS>Jbnt{gWcB:~f~S|xUM+Pi31i^xbk_4Nbl]CT*ao+03F' );
define( 'NONCE_SALT',       'NHBq%ETC?{G*BZzmeDEv5.SY6(~=Mk~.oO|`LE@Jzh]NWQx&qE6/=`I]=(htHx6K' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
