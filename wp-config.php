<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'y+Pi0/v,pgLnU0HbuY^j7ZM^I]/lXOQlD=bV{_g/gClPQF<Ygc<|2z6#25b^=0[P' );
define( 'SECURE_AUTH_KEY',  '-JHKh}~c{AOPm=*B9{f{xs3VOd2R#>fyqOc+<XjbF<!>Xx/&)?uYk`g<#Tqsf3j!' );
define( 'LOGGED_IN_KEY',    'jB!(Ov3ao|,ZwXkZH7m16@/go,+aPxpIlI&V+olqW(eQvfgtxu,r/E,55@YR&/=1' );
define( 'NONCE_KEY',        'Q<^JI1SmRx7+7{Tv~`H[K+3_^_0@0%-2/$76^}7|Mu-P260@dUed;fBElVRo?`CZ' );
define( 'AUTH_SALT',        ':X?N~!`~9NP>q7EyZZQ%Od<k2oFz2EI]kC)+^{AV4o>|%p.0t#U>hA+@66>pMw?l' );
define( 'SECURE_AUTH_SALT', 'd],g;Q<>dsi9 dL,jQ0--BA-+@4,Nq%W%z|``@p2NKhkMV%tdLl1aRTzpzr]gTMI' );
define( 'LOGGED_IN_SALT',   'Y%06lx4Wo`i//6z$JP{vpPCGy`yZ~ %Ag7JU8 J:Dpi!_?RLsjZEW0}k7M8hiAKp' );
define( 'NONCE_SALT',       'V9&~|#SF43?2#,@/R9PKQ,-B<n`)dnga!@;JC!@B5$4n0%}_)g.b^]=X8-SBoSKh' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
