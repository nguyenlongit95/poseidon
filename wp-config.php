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
define( 'DB_NAME', 'poseidon' );

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
define( 'AUTH_KEY',         't$x5U38M7[V4WgNbyuZeD~)b7F,>?BQlJ!w#:,sw+3~$|T{S((?ld9pN*zRnw}$$' );
define( 'SECURE_AUTH_KEY',  '4Qcb3QeoeUK(Sc=?|Gd$Bl;L`lU3.kQ@e-^`B;3TgTr/.|>([|UX+U`Z5K =BY4M' );
define( 'LOGGED_IN_KEY',    'I[EcBR,s8Hv$rZEMS2r]3oQuw&e@ cGr*Ou<X!;(PX~yu E}4&6;f6/E.S@T~XD%' );
define( 'NONCE_KEY',        '^Wh@*==$jpE<aOa{?UMH<v|T1L+bzMQci9Nn!?<Ys#4tVE8W92Mu{~-3`2kesEJb' );
define( 'AUTH_SALT',        'k(oNf&[veI5cvQ/e@)X,k*b2ZJVFCYiq>hYy@^|QypJTG@[?6-gJq~PPj0)cvB/b' );
define( 'SECURE_AUTH_SALT', 'Y-uxL g9A^MNZx>q/0V.F]Vf4hfj,g_`wTemLBf,e>{CW,1qW>KG5]zZ.lrfi)SA' );
define( 'LOGGED_IN_SALT',   'aXNPbUwPEYfF?<$E2{f@ptLuZgCVYhVjbyp2vJ(74[K#km}U@_(<6Z]+4%O34-ET' );
define( 'NONCE_SALT',       'JIbu0{b_}K1!5[ *5QCJoRg4<#AX(vKeq/9^. Xl)|d=!i}Uj3tzuILe8_&oCy$u' );

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
