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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-brief7' );

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
define( 'AUTH_KEY',         '5l#6w5[IGZCUCb:VE.Q{?XOL5olwY$EeOn@+$)^l,6Oxg9LBfmUuB/q33aL~[]Qk' );
define( 'SECURE_AUTH_KEY',  'zs|A.enZ|jN!Ev>YbU7;}J!Kb!Uo;06)Ep|~l+0@/fJP>>q:+m.-]-2`uE{Cp:_T' );
define( 'LOGGED_IN_KEY',    'wszH;Co{2+xkYg>U)rpw+/;%Ju&DZBXa2r<2ieb}r-etBgt%,k9tsVbD5Skgev?%' );
define( 'NONCE_KEY',        'aofzfiQ&+Bh-%^_<c,#`g31F2eNawZssF;Z(Q_<y7?t<29T&ILi`2uub0io3msm$' );
define( 'AUTH_SALT',        '--JLmq-1CX<yqW|#ZzdD&jN@.ok^]hoQ5Fk501wD9hX du t3G$s5U:`r%L#K`X`' );
define( 'SECURE_AUTH_SALT', 'i(C4/`.o`DAmb|W/<F%sR:0^ZTtX:C)5ir-Lb,/j.i;#i;P8-;USq:pN3;Sb/W{k' );
define( 'LOGGED_IN_SALT',   '6VwNEC6~fpbq/E;v+:Qf7|Dm|ZOupxmS5hwRpk#g6!X7JkCX<G%oR)J@?xdlL}Jh' );
define( 'NONCE_SALT',       'vgy3=kIl0(OZzi;H (}u8.;Z1}a/GX9,;gxxLS]|*R+2VuZ2Cfz$vQv^%h00#aR/' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
