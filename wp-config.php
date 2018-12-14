<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'S:+wW r1y^z?G,sj4vAri0}GT/c>BSEYgiA=Cxzz,-7P>]wPb7sEz%M9C!&nM0sJ');
define('SECURE_AUTH_KEY',  ']m(S3Qh=JG1}%nL)>%a;N=DBzaex^??Cub-hO}aHT^5*@/-3tDA#,$P66o@kr+~k');
define('LOGGED_IN_KEY',    '|qx%nhl<3&I5  e7g]J2IzVA}EFkwXN8w$gJaOb(XbM?h,1!mo)MaS,Vn/:V(R`;');
define('NONCE_KEY',        'P4rp0|3<UJc c>NU5l+M|D?`Y*x0-tV]-4k_hQ,Mg*I->A0>s*j%L%J-zN.w^c8*');
define('AUTH_SALT',        'e65#TPb5w^7$mGhbW+2QXIAh(o$Md+Q%WaT|r-`f+q<c=rD|JXYkdQmg%6<YEU A');
define('SECURE_AUTH_SALT', 'y[OL_7T~C.>TTy!}o*<nA-,[6xzSFBpKbYk$wnoO`MRHW<,K(c2(7U:IR3ZDSE}9');
define('LOGGED_IN_SALT',   'KrCo5J$%#>~:7nXb&x)uo7&`7![^A]K.xG7{6 MsDzQ!,Vf^a&PWw<p+MiMj1z{4');
define('NONCE_SALT',       'GuiNPr;gs VMr5Mw[$e0}9~xRs^eK|Y-k$c:_cO|sR3QV8+Mo(vT96aY)G7u`<3(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
