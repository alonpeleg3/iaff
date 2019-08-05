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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'iaff' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/*DB post Revision*/
define( 'WP_POST_REVISIONS', 1);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'x[{uW/LI/N`vg5bZ ;o$i]9J[#<&k!g}0IO(WPGyG?//g.vXfauHLa~zRhHg.xQS' );
define( 'SECURE_AUTH_KEY',  'RW$5-J,t!`fmJ}clD=#Z<80NPY`7]B^J9c02XOdP;2G6LrcE E,?!Dj|8w/8Ory#' );
define( 'LOGGED_IN_KEY',    '~&$i,XPcN+=Jp+]IPfZ;DLR*vu(6=`qmchi^Fx!Cv^8a>-sC_E^_]*WyiG5jMndl' );
define( 'NONCE_KEY',        ']RhwK!I0pt,?-yrd*[}xRfn/.1E#v(:f2yQ&k`S5yeITC/4.,@n>:oM_fR2,H%qV' );
define( 'AUTH_SALT',        'GtuR1J*x>Kf;]=s9goK2<@P1^?24<r/SU kta-7s5qu 36W#bx[#ud9j+dVM% Wt' );
define( 'SECURE_AUTH_SALT', 'IZsC>)a<BqxDDmSj.BiujGWX4$Gav;G:m@+~BZACj7y2=%IKt4;Y;/Y>D+&}p1zT' );
define( 'LOGGED_IN_SALT',   '1AajJL}G/l4S8i.&t1OJ^qi*d~A2|RY7zC0@};Z_Tl)mAE.x.2=X=9eS!Qm`99B?' );
define( 'NONCE_SALT',       'Y7xa&n`DH%]S{7MAb:I6j:hoh</yELF`W|}+z-iy_jnIjIBk7Ut:r%d2UB5@>:!_' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'iaff_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
