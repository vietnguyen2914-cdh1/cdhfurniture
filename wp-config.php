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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '(~H1}Jz_#_xKXc@Di|oq(A/wi#x@(vlCvC8<[|$R(,}b2bS@-KCl,d^f`-uB7B#(');
define('SECURE_AUTH_KEY',  'b!!*pJW^|9gTYnkIV:Wwr>7gSFCN#as}~rWn9 6H`RG%S:Ie.JV8`A6Cph+9TZ<A');
define('LOGGED_IN_KEY',    '$5o<z_)E~B6QH ;(qS(jigh5dUFXXqEZ4o&?3+>Oc2 qK=uf~-Q+>B^y*!!jwXfd');
define('NONCE_KEY',        'Tj|%txoOQKyGab?.n=h^Ibv0TA;M!#,jq)V-t`!;8ZEzsu&uG9v;rI(;pz#bGTk%');
define('AUTH_SALT',        'S]B,..T^Dku0m`P0AafY~`uC`62D<bwaA wNk(cp xCu,dZ`Us_$@}KT4zp/?:&s');
define('SECURE_AUTH_SALT', 'T4WZH`SGN?NrSDoKO3md1AKtjWE*j;)fKJiamOz|6^3?}Y{348P8&#rO;&SL!/V3');
define('LOGGED_IN_SALT',   ' lQ?:^}kj`d^tkt~!4X;7[V8=2$+3E,JwJAxs4lV#?RX&^ R}@4u6w.-6O#]c~f8');
define('NONCE_SALT',       ')hUV0F[]I/$]nvtY<Q~p[`b&E2zw8bVa;}EE1u-Z!s|DtL6x=Yr0!Q7J+L6bs%r>');

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
