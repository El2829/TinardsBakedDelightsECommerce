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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         '@N,Gc 3v2.,XU>Rc:Pe(}X:)fe]U#K dWq:mGRFB7yAMIj+Dg}Gz_jox3<OPBuj7' );
define( 'SECURE_AUTH_KEY',  'S-vm)~>mspU?kF3$MB>YELwEx#cJf(G~(evDoEwA^@{oJ,9jDCy3[w!~<#uUB~Cw' );
define( 'LOGGED_IN_KEY',    'N6ISG<R&7G+<SYq~_#.;g^T3T=|Q>0GJJCSYvn/1-+C-*mZj!M%1F I8FeVn0-17' );
define( 'NONCE_KEY',        '=c}ZY..j9=|R>Eov))jI9Xa,1obT<$~;(%5HU[)_MVYvrQUJ*Xh67~Enq O  h(X' );
define( 'AUTH_SALT',        'f vg$a?wn#;4:Q~E4gg7OJ3i;A9fsz~CNB0+KE]MX-$lCgcrNE8eg6rvIKLl+<fq' );
define( 'SECURE_AUTH_SALT', '_z>qw5i.RM%?L=[6u>$zg#j,oBMS~6o$OThk9 .RLao.MDE4Go2s,bUyR+=o?#g~' );
define( 'LOGGED_IN_SALT',   '/6kENG0B5dgS.s2pK^e+g7wB<N`f9v3)1&.q+_mMyk`=(%|oRGvoaYA@Kn|U*SG1' );
define( 'NONCE_SALT',       'WUIqNz5i![n4&8B_2=b>>B%m`<C~::,jhx5VDY`+1a}`vA[+t#8gqdF342]+{]GF' );

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
