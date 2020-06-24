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
define( 'DB_NAME', 'wordpress_toko_online' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'yLe48@_uWK>SMM5DyA<Zj*9{q~bE:}.a_.=_D5Q1zQtYo`o+/eUML%gYI:Z=I.kl' );
define( 'SECURE_AUTH_KEY',  'OS{HF%;Gb!&G)t_dDE~oGSGyAX7hS^8.i>Rx0 Tdv=z1P#DEVx(>4!p(GF*F*[Gb' );
define( 'LOGGED_IN_KEY',    'g?&?AU>H wF>gndNW+&Z*=EA6)4!5teX]L=Exl+M1M;65eKQQ /.]t4-Pzi5F=@g' );
define( 'NONCE_KEY',        '.9W7{oF(O2Du%K|&2WrR^@<nPUe[8MLJ]dz_1E!R_`,Pna|VO.S0uH~=1bERb!n=' );
define( 'AUTH_SALT',        ',BMSJ.>,`5LQN)87Khe:*td?& 4n?3rO8M+(G,vT@y2Re|z;$Wa3;m6:#IOtg{2F' );
define( 'SECURE_AUTH_SALT', 'Rv&.TlUb?47)Bba=?Q,y$}bfe?&?jcJ?ZjTktdN#2&>KI@I6!9J|AAe.|IK$M?8z' );
define( 'LOGGED_IN_SALT',   '%`SoUl|%$,pvY+j-U-(k]]Ows/#Le({EE.`*P#c3T>ap2k~W3,XLut9+m=%wuFki' );
define( 'NONCE_SALT',       '`6*gnRQNV~O}dln;iJbRQ|0[jOWv;ux$cUK?&z4=x!6x}i>bXnyu3dZoPo9!FMJA' );

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
