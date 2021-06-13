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
define( 'DB_NAME', 'wordpresslund' );

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
define( 'AUTH_KEY',         'V@Pqy6:}SkKAS<@|Gpf|McBeLJ0(Lt_mliYFe!h$OdMI&UU5+T*: nvXg4y].eXn' );
define( 'SECURE_AUTH_KEY',  'rU71(U[{[+Q<5[9k|T*2b/X!L/^td^Swebs>K@0`a,G()cO=D1:c}aUT)r&q4<$y' );
define( 'LOGGED_IN_KEY',    'pySU%ytu+Os=Mr2u&+-[dk6~*CY(hZDq?o8B#?|Dz6vjM5U3d*x7z%]:V_XK]2WH' );
define( 'NONCE_KEY',        'T(4B&xx62>x+8m8/6<;AO];hbLG.)N=j*MUYf|$b7&G&~jw+82s!9^:NeJuh9eW@' );
define( 'AUTH_SALT',        ':le~b!H_H4J547}4B#>=nApBAN)gAM?.0W=}M^2?+XU) @ ZY*LWd?bO4Y)_DA*~' );
define( 'SECURE_AUTH_SALT', 'l+}Qq|LXgF+B~5|q ss!~fRjI?y>8Oes.=Q?.pccBF+<Ao5eCS,@}Pf@Egw{mt-R' );
define( 'LOGGED_IN_SALT',   '0p0K+.TP<-P)T,1:g97R-@2.%#m6pQvXv ik6.lK9RCL$zKQy*  77%xP38RXZ_Q' );
define( 'NONCE_SALT',       '`kAujw10UZ0q@rjgKIyYT8>hTD);J*M^7(]gX!=9>XN!&/IxIyKbK1HT^2Lr-js(' );

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
