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
define( 'AUTH_KEY',         'Y4<WqrKUGv6Xo_v$Sn/B`[Gwrh7YU}ZE]RS&^p_E,%j&#]z&g qE@?R$.S)TV3H5' );
define( 'SECURE_AUTH_KEY',  '2(bcyx 1B@I!z6A#Kt.OEDZwH;4Kz<{A%m!h|$OXttq*>=Xi}:7TLB`5)</%.XQY' );
define( 'LOGGED_IN_KEY',    'Bs?rfQdsVw)O/j-.4[v^=_:IFY4(]t|yog~NA^`PzbSc&=*Q+JMwAwImK[ByhOf5' );
define( 'NONCE_KEY',        'qR(/*lEnB^Eao0CL:S<|UBZhw$3BS?yfC=n,Fcmm)#?;9XaI3F?R-$PU_}fB8E~c' );
define( 'AUTH_SALT',        'Q9wjkSPh;1/iC)Kkz~<8^/,G=$I|KxQ{D.J_tX-NWXdWDt&+h`]lT2(Q&IFyU!>#' );
define( 'SECURE_AUTH_SALT', '#kZWO qZC+0`Hi]QWk/of,_v=G<L4uz)KB^^}(`O;3W(+Cg_@z)m*z~|2:wI~-&i' );
define( 'LOGGED_IN_SALT',   '(<D=#k#I|^6zX(.a0QFd^8_,aV#HW6t9%P?&Y(+w/!GE+ya&x[@m#uT-ovAI o,t' );
define( 'NONCE_SALT',       '}&sa7U=u;[e<S.S@0hPudH[:B~1YNs+WT>qJD7[A3`basJAP~rke9d7(/%pP*<By' );

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
