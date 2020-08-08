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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'proyectodb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'lh3uUL6aYKrS$i?HhvyPX*T~m[u7<-A~r^y>4p<4:|gD8Bdu6>-`^{V$Tr>c6d1E' );
define( 'SECURE_AUTH_KEY',  ';<%q?a5Ld4:^C5D:CZLdDg7o#n4F8B/]AMJf2[T (tbI5!i2QZ*?P{yT&`31Dg9L' );
define( 'LOGGED_IN_KEY',    'y>sP1Kh/D$.W7RdY41o _@b3$M+( /F,X66)lzNs|er><J9XkT%Qjl:-pFcm<6im' );
define( 'NONCE_KEY',        'PRJ;k%nV*YI,wbk<Q[XN1R(HaBLS4^&@a7-.:gWCK_QHe!YG$fp#q:ce![EsAOfZ' );
define( 'AUTH_SALT',        'EA3?+Qz24?=0_GgC}Rckd4vM(0-0r+SMK11AqP83;^K]#kqi4#j2<|C:ryU`G!}8' );
define( 'SECURE_AUTH_SALT', '`6R1C+qQ&|WoM8PSR2a]+?F&]hXWnL^Ld2+?5vTe+Hx0SmIHMejr|?*$7{wC6.PX' );
define( 'LOGGED_IN_SALT',   '@VkWXBNP/SiTgt5o2#/^3]Uk&*|e!Lj8x:,d>&HkXHqK{fJnt4$[_A*}_e~/Sg?X' );
define( 'NONCE_SALT',       '/)=.^XGIdHF#rtaaR35c:yJ__N+#t/JJci`K/by+k!HBI]|(Bbn}rcHR{imi2} Q' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
