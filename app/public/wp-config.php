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
define( 'AUTH_KEY',          't=|/V.^eW_t,_qh{4DPE.#qtd||q(/Wt<$#+K2ennP%`#|PrLay(+V$7r4/7}J5F' );
define( 'SECURE_AUTH_KEY',   'y;m6lH{/U5~N8>[^:N}?/?cY+Zq<hJ.b?L-e|cRgu#p Yybg}Vl|*56[tfQDz(|i' );
define( 'LOGGED_IN_KEY',     '}Y3<g=58cWAqepG]^,<q.Y]3JB>$[m(`YACy{vXK `+r7$w4l_RHnAM5Gd[~.aR6' );
define( 'NONCE_KEY',         'z]nr9k&7~VPMHOr8?gB:j>QXKhrfYy|MU/j>jS)mBq? 2gdJI=t5}._^3uU|-q:3' );
define( 'AUTH_SALT',         'AJdlSPc305softX^7eUT0uy#Y`7,{ZN5^#c2wp6M!WxEL0_N`.*BCJyF)w!Gvw;~' );
define( 'SECURE_AUTH_SALT',  'K-$2s_V:&H7)6H3V&QB%y=P,.6{oOJ!$myqo8t={@&&.W^u=AA<?0%|v4C(}=qBp' );
define( 'LOGGED_IN_SALT',    '0rHHY.FY6qgR]2J%`5RoFO(]J-mIr.wRj_^RDKlv^ArrlLQc>r^q`}Kv0s-AJKLF' );
define( 'NONCE_SALT',        'V_,!{[<H/LzqkW+Q)e)ud+_|<]]]p,FSQyCm)M]`+2+:THpVHZZiJ~>3C~Iwrs9l' );
define( 'WP_CACHE_KEY_SALT', 'SNI-2.osCM]K2?3|gpfRz7O5n:dTv*&/lmmO :}ffIJ]9JBA~?po7h=1G{%p/_5U' );


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
