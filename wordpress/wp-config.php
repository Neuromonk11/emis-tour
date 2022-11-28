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
define( 'DB_NAME', 'freelancehunt2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ')`Cqy{Q.BLi6@@Fy@NHo0/kPXh;~&};S;cmdq^bSzt-9^:]G!7w;eeGfYzh}j80>' );
define( 'SECURE_AUTH_KEY',  '5#2-|b{QQE.&^S=H&#6a@@x}n$~I%9O-8z%^mas(pl|Nx*I$(KcfD1v( zZ5S{)=' );
define( 'LOGGED_IN_KEY',    'C_]s:@o}s=GByNpJNP*?Oh{/gZ,EQr6=D]Vy5;E(|kH5jtDo5C Ui|EwPhT$(|3I' );
define( 'NONCE_KEY',        'VugLp9Goew1l6J14RXC_&IQnsd}0u;!w?r,3_t2nTE=Z5&c8S#YiD`T) 6]4RQnj' );
define( 'AUTH_SALT',        '`@|>@+5+L.ll/>UAT.`6XvEkZuui5csv=*OA(^xqASH,[R68|6]DnU%*q%MZ7R)x' );
define( 'SECURE_AUTH_SALT', 'K:hpya8[@Z{q+^?u_I)G2t`|%&,ViT>}7W_(SQ/pC0>4@~|7Py?35}2%d;366AJG' );
define( 'LOGGED_IN_SALT',   '5B;df]+P3)V`O.x44.T_q-G y2) 6@f =T}`A39ct4j)H(B3s&M8lCX7:L]2Elz]' );
define( 'NONCE_SALT',       'wW@2y#NYEl}c4 61tR2A~=||?5m.W!qvABxZ_t{U!N6)7]mn,7+zI;M03G-tk~sJ' );

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
