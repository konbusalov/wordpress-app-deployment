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
define( 'DB_NAME', getenv('WORDPRESS_DB_NAME'));

/** Database username */
define( 'DB_USER', getenv('WORDPRESS_DB_USER'));

/** Database password */
define( 'DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD'));

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define('AUTH_KEY',         'u/}84??~83AnMp:R7LC%+K/<R_q=FxtK%4SG_*6C6dNL8G?+*!v{uVP1^k+emU)/');
define('SECURE_AUTH_KEY',  'uTG<ZPT;|@/33<EVuYP7D&5Xn|pQv6!-Sts0@6hyP>R4#[3p zPSOstb*Y4Rd}+Z');
define('LOGGED_IN_KEY',    'i|/Z#J?m8Ef%+w75LTmCU>d_;/i!X$<+*-7?_UR8uss -%XG:zXG_7`W+8p4w8U5');
define('NONCE_KEY',        'SQ1Oeb2+i<a:0gfqrn/b0}wHW}fB-UjS+i$83Dt-g)%p%H5+QmDFf7#IrORwb6>&');
define('AUTH_SALT',        'Fq%SQ|,d|73Y+C9VB(9|1Zm2O<6BA_|xFjDD5Z+uV){P *7am}T;.G7_[mj%fF|,');
define('SECURE_AUTH_SALT', '_lUiY#pfh@-|#lRv]^&$J,#)t0<(^};-B_}zXFqwpY6jB[;0Y?{cELZ=8Fb||7N;');
define('LOGGED_IN_SALT',   'r$>8i-GJHm]I8(zb(=lZJ.;|oKV[+ti`vq4yl!U*=5g.*&?|r#|svwqF|U,}{yjQ');
define('NONCE_SALT',       '/MV`$FWU-bU-|+Ci?O#;0jD|NqyG;H[?E$M>j)B-9UkCq_,ynwe7bd*U#~h+]`.Z');
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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );

/* Add any custom values between this line and the "stop editing" line. */

define('WP_HOME', 'https://wordpresstrain.ddns.net');
define('WP_SITEURL', 'https://wordpresstrain.ddns.net');

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
