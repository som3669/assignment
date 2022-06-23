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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'assignment' );

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
define( 'AUTH_KEY',         'Z^7mpNFJG(d$y8`@=:$3qnj o.`NVO9yD/]cTxV,dhPVB4!eZ#|p~oRYP.YN})dC' );
define( 'SECURE_AUTH_KEY',  '@V,nsU|>rI9@wvc#uBP;W!6,3r{*#O7{xFv`fd-M6JPnebS4{bW2]V~h>=Jl~r$(' );
define( 'LOGGED_IN_KEY',    'chY>P H.NYAB,iRpq$./G.#DuE6B,^RftbDDt-et&GrmX5AlAJRlDqup}x!3{{,l' );
define( 'NONCE_KEY',        'E:4;k,*<3sPNmeU}f)2j@ %6==VK37+l8DctX4~SF/@lwy#mngIfiP9HPDwE9V*f' );
define( 'AUTH_SALT',        ']mM_6H8zW3.kD c%U}6(~S2<5dD/M2F2MrT.a|SAaS;Nv~KkJ|/?}2MmR)HNkj:O' );
define( 'SECURE_AUTH_SALT', ']V:$s@!{@5rO_#DSXK_@LWG|TR>V4e/z6tv]}IWoP:SP#KjT2em2y4GvG0D/]$Q`' );
define( 'LOGGED_IN_SALT',   '>{3[}[tnKj}3Q/ZjpEB|y|e3+gE-n,Wd!<M,cXS*6qk4:Nxs;$q)$4t u]^fQnf$' );
define( 'NONCE_SALT',       'zFM7bB+yDpRi}tl auT<FV6^3l}7!0sV)5BU|_[]zITQT8oEec`3Jo*1,%b*[ms$' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_assignment';

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
