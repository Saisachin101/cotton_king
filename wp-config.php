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
define( 'DB_NAME', 'cotton_king' );

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
define( 'AUTH_KEY',         'wE<!RV>1YyL?)`E,Iv35G]rT8;9}*U(E4{b@o)Fk4SqY5qB#TvJo(]a1}!L/QFQ{' );
define( 'SECURE_AUTH_KEY',  'V&9h+D>+x`-iiLvnECVsce8A8)A%V=2Q~t#kV=&[o64mUnk!!J/#I1TXutMCNrW-' );
define( 'LOGGED_IN_KEY',    'CaI(=*C]b<C3j<)}y:/G)$Z?r.`nA+OL>,e(<~3YK2Q`f/gYV:lQd-}Z40v&@6yp' );
define( 'NONCE_KEY',        '2pb<#}`V1Glv|*?;hfcd?lfe*aL `5n.Hm3c1m:C#XNjl:TZM(dG0X/31.Qt!{=*' );
define( 'AUTH_SALT',        'Y, W55nz,[)-kPCe)=srXMzJi]0bt4N#kt16&D#@P&@%@8LL2H7C8ICpOz8*V2 (' );
define( 'SECURE_AUTH_SALT', 'DEc]Qq)!b=8BQRmKg,3Ggu{Ko*&zQv)w<KfoWdkCabLeOli*`&Coe@*4xG74W:3-' );
define( 'LOGGED_IN_SALT',   'm-2n_/r_U/9U:zqrSY?unK#D90y<%*J$Li&G0<zZ]?;}B?Tx,)x=Bk)y/|/}>[G{' );
define( 'NONCE_SALT',       'TH<1{]XCG:W{O<*WY9LI?Gz)|$qgo3G%^sW+m&> D/:[SA([xib1l1Dlxd,dr*k0' );

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
