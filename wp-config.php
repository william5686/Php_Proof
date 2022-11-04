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
define( 'DB_NAME', 'u286784743_tqfk3' );

/** Database username */
define( 'DB_USER', 'u286784743_mXTII' );

/** Database password */
define( 'DB_PASSWORD', 'sBqTn5qttR' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',          'KE,et0G}BeV@ywSEe$:.vrnSV4bF10N`p4cp$L ,=~k|z!$1v)?!y9d2@KXH&W6z' );
define( 'SECURE_AUTH_KEY',   'C~/A@/-WzS~<i{w t#=NbxN-XdT|a)C;{@8EiS1)$;Y[+PLi2>bs_,d73iRUQnP<' );
define( 'LOGGED_IN_KEY',     '?=@eIxF43$39mjp|(F57qB&sPfP|,r$CZfuH71a`as<[C`^g`A7KM7S&zMMb#Sl2' );
define( 'NONCE_KEY',         '4w6o KTF]J[ASEBNaK</v@va6pQcK@@R:1R]`?pCuy@({-`9lA2=JRl(mw^UYk=}' );
define( 'AUTH_SALT',         '3lbz2cG/@XZk4lfcm-=Cu4_FoJ};0/<& 3v[)7L>LXK1Q [iAypQ(lv&k23MG_iw' );
define( 'SECURE_AUTH_SALT',  'N^~1JcMdgyhM%#%Ekeq>pH^, l.np>j*n#-}S9oUROyV%D@4d?<a!)!#*mVruYK:' );
define( 'LOGGED_IN_SALT',    ';H@LOAehf;MXjRVN:B%v^%bdm^0mWPaa@U3cNqqAJkhc8/7w]s>^*Qh2[*g@BAno' );
define( 'NONCE_SALT',        ')+=l3gZv3$9N7vDxyy&elECi<^rb|+_dnZhbiL~6q#(k{ <EzPUZ`5gkgdo{Ga:I' );
define( 'WP_CACHE_KEY_SALT', '.@Ch@tx{a|,+C&0oR7;okP}L>h&9$$,B`?Lpv<XIww3n?AjJA5|_jL7<e}~[@jCE' );


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



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
