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
define( 'DB_NAME', 'cms2338200' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'ij(wjdrVEr]|~l|:VP[f]ek4[(WZ%b,IQ-APlR7O_<~QA:]5=l8~z`R9>KWhC5c<' );
define( 'SECURE_AUTH_KEY',  '(n(DcL>ZspN<<O>GeY2<3g,TA!Y(#TMnRu0k; *fw4@R?1h&$`5ES7:?t18D90nq' );
define( 'LOGGED_IN_KEY',    'sswqFy}Jkw?P(~I4jK[>12l8`rq=yOTvZTi%&|c8%o70.kI @pFQ[YRuS%sW4WZ8' );
define( 'NONCE_KEY',        '}r M_^_Xi+vs=c^*Kw}Mks*-3%}A.nFLvP(U@)R`vAC=)rs)4B8>s%sz]Jc{8bMI' );
define( 'AUTH_SALT',        ',PJ|K9L$&r=KHyJ: nAi_F+Ojy`:9,Lhpgvgd)oX!K&OKg~+S=A&olQ(^)nhkyjd' );
define( 'SECURE_AUTH_SALT', 'WQR(MZzlCn?*jI=<sbgmx05lB*+;Q&X^AyDtq6WdeB]tZ&lj16;8j<;b@S%#h<7>' );
define( 'LOGGED_IN_SALT',   'WuB&O5&&R$6 ^oP&a%riGTwF-#vqMBDaX};o{(<z38/1+0I@6hgC*g5UF(uJ)Ijz' );
define( 'NONCE_SALT',       '=HHtt/5|b^U0#:dr$bdtGOU^{,%W#aquWqv9RhO:*pk<1pM%IgCGEqR03a}+7@)_' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
