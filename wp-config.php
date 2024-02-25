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
define( 'DB_NAME', 'hacktech' );

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
define( 'AUTH_KEY',         'KyoOvbaH_AOf!f7c(BcV2GRkHB(::Gr(@LS}jQ[wjGqci)al1@@7`MZ OtKor)v_' );
define( 'SECURE_AUTH_KEY',  '$cH<]> m]8_!;ZMn7-;q;CE@koFUIRO@BdJMt0^|LUz,.~E?RfK:6VGqv4)[6Azb' );
define( 'LOGGED_IN_KEY',    'h^KzGs|[)F]L%U;RL;%ol/UaXDCaUrIyFiuK;qjM1rooTnsdfA77~$%Pii:e+){b' );
define( 'NONCE_KEY',        '{bZ;!-PYnwkn7Df|==K egT7^5`<wb7Nq;SdAHyZgjsVC+>K^Y#ZBMk(V8)FC]m_' );
define( 'AUTH_SALT',        '19rRld`Y7Mb P`BR=j*c z/9Dx[]-b.;.!.4=$|Oy>CPj]Nr.O;lI?&>9C_m!O@5' );
define( 'SECURE_AUTH_SALT', '#:1y~|%z~<:0^Op:K({v?bd>I|elw%TW,.oUtil|=VbiO2O.0b&QU7`K2Fwf_^X{' );
define( 'LOGGED_IN_SALT',   'ez{?`5}< cX;S)-Rs(>l/A`?6IBYN81RX>QG`?{yrYYm$.Ll=rNV~*.%:>__yvu:' );
define( 'NONCE_SALT',       'X6_iDf=T3`0T#+F;YRCSdN$>|S{q@Nmzti+c:+jn/VUwZft&@Pn*aC;m(LH  Gsc' );

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
