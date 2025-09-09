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
define( 'AUTH_KEY',         '4P^f5tj#@&n~+A!R)`lWRt5iK0ZHhG>a4Nb`^B28O*t/#Cm=?.[,JE5r<#1[DMdx' );
define( 'SECURE_AUTH_KEY',  'ohVKo1kWw*^m-Bca)V WFY>_PA/x,d|mIsI=!,wGoiel|;#puPo@Jc*~|>X@CZBR' );
define( 'LOGGED_IN_KEY',    '/ER[ZnCAE+d2s^x}N)J):Oy1ULobCJ65;9kZs]Jgba?z[uHM?!rE}ayCG!0Bfp6%' );
define( 'NONCE_KEY',        '8q[d:WHW+V>+kU)l/6Y-)I<U6OlP^CH+$spj& 11(J_fF8foiF&$er$!1`jSbfl;' );
define( 'AUTH_SALT',        'L*U;O>aPkNyhAK:skxT<[3@G1_-$G[L-%GWR:Ndv?{O%yS=,.cXTL7;_+(2U|q|D' );
define( 'SECURE_AUTH_SALT', 'o6uJ!K,QVWJp]AXafEQh% ?IpSkNaH1Y$pX_&s]:5kEi}:$&*v9^>aOR$;9cC}r[' );
define( 'LOGGED_IN_SALT',   'ha18CN<$4ne+S#B:#* OIo%mA.]_=<==~WCA.2XK<#g`Tp.GKHKk`a.g@H`6S!9=' );
define( 'NONCE_SALT',       '2R.Y}_] sadE.+W>%(F-rAJUL)]BE#9QQUQ01eZ3rDO]&pBHG#h_K1hnuHO,P/o}' );

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
