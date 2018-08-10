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
define('DB_NAME', 'wp_test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'd1WQg32xS$m1sA!RKd6Q+3|5(aWW#1j;dj$%Idp 8+!BR~7YhEgRk]jXKWYvwIsf');
define('SECURE_AUTH_KEY',  '#vujBqtlmtBLpsh|(J4iMgxPkUu8c{O*STvwU]ZYu*]PCd3D#`7HDa_U*B,nLjy0');
define('LOGGED_IN_KEY',    'T^u^V :19^W{%_ef&^AD$2&%l{LDFoldj%DlY@*!nq4AqKyCuS[pg`87eKll0Ra|');
define('NONCE_KEY',        '{0kl3Y)>zY%X6h`UkLl_/QMR>5q;*ys<h&yp1*AW[K[6jhA`lfO^4J;z5<x;ujwY');
define('AUTH_SALT',        'LFx>J5A*H[`W3YxQ q[!@AE*7TZSx^xjND3KM{:83q@r9^N$^fW)|wEu#` RWYw.');
define('SECURE_AUTH_SALT', '-gQ dxIqRDST*9L|lz0k![NrZcN4;Q{%(Y[F^CH8q0_K@<RcpJ]MU-.}!@1E_,C=');
define('LOGGED_IN_SALT',   'C-:|h)Nv.C0#fw4SyX*.$0oPr=1{2xRR<CQU1#Z_Re^^7p72W[Xr#L4CyMGcRAK4');
define('NONCE_SALT',       '$`wfZFJ7zp@m+M4USZIK9,-]jD)[=M6rl1,G;vfB?JonHS@ kR&EGxvj`0I$C7MU');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
