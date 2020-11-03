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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'mhalli' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mhalli' );

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
define( 'AUTH_KEY',         '? `E-hqG^Y_JiiBz^0|j|_1<8[I3b1{O_iV66 }ccCr%yoK nCmU;w7c#L?BFhiA' );
define( 'SECURE_AUTH_KEY',  'K65$?P&/8#mvPp*2aLk,q0Zg+%A>)dah]VA=R]ud[p$IDK*P#=WFk.n4o%#!Ck#g' );
define( 'LOGGED_IN_KEY',    '2LhRqGsChJg_~bKK[2R(`|U<-yzIisXQ[*[YLP(SL$hApDTJL96c1Z?_NS6MEN!7' );
define( 'NONCE_KEY',        'K_Ze%]m|98ty9ML<dR4RLms%`Eq];L7SYE9x$pUl!~Y@&T8FCt{jQ/$#E>]f{=6p' );
define( 'AUTH_SALT',        'C6U]$>8.=o@4)7aY4mb%@|7yf;mgg:J`fp?jGp0`#UFleDZBl#t%g0<J9VOfR35D' );
define( 'SECURE_AUTH_SALT', 'g=Ulj7s!$>E0k2HW:}H3uAqFcrQZ0g2U}i,$Yu#LD-4TnOiv*<(9]&1gu9x=(6OB' );
define( 'LOGGED_IN_SALT',   'j(J:0#:H KVe9pXN.W|SCNfzamSgM)8I&<Y|?Ub%0WBv[SekNo7r!iJvk)Q(b[4K' );
define( 'NONCE_SALT',       '~> ZgW9%`co*Czy13f[=A0|* CPIsjX$KAYb{U{TTz*eF28{S0=]CK=q)+Re O3X' );

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
