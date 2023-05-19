<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u676657087_rJ22t' );

/** Database username */
define( 'DB_USER', 'u676657087_XZPBW' );

/** Database password */
define( 'DB_PASSWORD', 'tzxGSNMGPt' );

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
define( 'AUTH_KEY',          'bE#e~t8^7EQ_?F<Nc7?$cr/:t<Z{l~9<P}vdEjr &tp3^X7vQu_<Co0~tBL^AtWE' );
define( 'SECURE_AUTH_KEY',   'H`>-L+?zG0a98sZ`!mfF023)^k@+/U?ip(CuoIoXW`=v@^1eU0=7K~bj_[6sl*J7' );
define( 'LOGGED_IN_KEY',     'n<TH,7?`2+q)1X)o$Qt=bViC=37`ZhFP#wzuG>vCVbX(abJb+M!y}fs[!JXpjx@W' );
define( 'NONCE_KEY',         ']nxmuPUzySPM5qv4S-W7hZSAq}4~g2&6RK]X?fxQL*~t@DMW{%9<s[$4|ml7aD8S' );
define( 'AUTH_SALT',         'v#+1[__g533el4>89z:v**w5?a_$7`}uFt*O`k8wa%Ke}xd{=_z/ j$;e! |?<AD' );
define( 'SECURE_AUTH_SALT',  'Ek7,^fX~E6?B_~LQpFhc!hzi^Y0KM|9%M|VML.-x3P5?&*D+/qBCa]FtuPJ>C$US' );
define( 'LOGGED_IN_SALT',    '/H(F!mrCmx~~pt4>?3Be9@#F[6NlxbC>nU]KwS(2oGfPRnWI}.M/E1to:X%s}PJ;' );
define( 'NONCE_SALT',        'MdJ>J$RDgx}9<9C.bvB+^R9h,VuNC*(DQ;S6am3CY3F:jA] b?I w/b?,5/b*W|^' );
define( 'WP_CACHE_KEY_SALT', '5o 0j(gZ,Y@:S|Mn%S()3@Yy,rkpRAxkn%nfJ79JO*DCX&=F(#is}L*##rb}VW7t' );


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
