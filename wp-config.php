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
define( 'DB_NAME', 'project2' );

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
define( 'AUTH_KEY',         '6?tgJkf//W+3pb|*Vg>!r)CUg(MP%{wE+o{&G7Vfs{flX3Ei@#CJzXPK5k_O6*Al' );
define( 'SECURE_AUTH_KEY',  '(n|j4%0yO9*a<COfIk?5vvA,=[ f97$K%KX78^7^IV O50d=Jd>4Y=eDmr3weF]@' );
define( 'LOGGED_IN_KEY',    'DO{xwi)&=Q@PT<O%@rD,iR(Ee?mk}}v$7bdiU&a|CbTOen|V+Hg77hH(,>,y`>*u' );
define( 'NONCE_KEY',        '=Dn(I0WkQ8m0p$g3yX]b{4d(;7ZJ7*gm<=vM*((eu<zO0Ohg%#%cjgF7k!,&ISoa' );
define( 'AUTH_SALT',        '/.f=Xr^?X`RBJ)X`J@)b$7/6~i}-x58:fa1>`y7do1Q_&yab|J?:0F0No7]m.acf' );
define( 'SECURE_AUTH_SALT', '2GOXQJ3Adm8oQuv]TeUxl-K|qQl.M4mPN%{qLYU:7W`A?FK@3?Sy&XUrEKa;U^ei' );
define( 'LOGGED_IN_SALT',   'ju7tvkS8upo^|{t~d~DCZ;3=7b Rp5VH)zMV|NLKf=*T({~Axgs/:;CUZ05,w:Pm' );
define( 'NONCE_SALT',       'QR{=9=Qe)74LK)B{X#*?iGmF%_CSG5i]Xrh/6$3b*.$lb~GR6}|/DI}*G@6;qGco' );

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
