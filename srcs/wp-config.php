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
define( 'DB_NAME', 'wp_db' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         '%=k&FT (xOt^C|`OLd=vCqO+g.{lo|ue$*:YVySH,cbhxi)DsL6~e- ij@#[C8mf');
define('SECURE_AUTH_KEY',  'd`!;G?5M|tV--H W,{/-3LG{.hAQ}nWo+eNIu6xf3bhZJond+}a#Xc3|8,6<X-_q');
define('LOGGED_IN_KEY',    'hiwLE>}3{-{w^v-x7&!G47>n` ~))AO0+=S:E1SAeI6~tX~4ZLKW){S#4tZ>= sp');
define('NONCE_KEY',        'v.zS3({C)CDMnAsgQwc/?,+)+2%X>_AreIB=|b8|>3fM|91cJUqe-Du;-WKzf{vp');
define('AUTH_SALT',        'C$8sOqZ;:+ct- *`*Og-q4mRWIfnFO5C`[S=%.>H-FrmA;KD|O3 e0~2V>Rktl^J');
define('SECURE_AUTH_SALT', '~I,IvU2N+ag`}iT9tr6/&@VYc#^-W~,&xD=>Fd]!eGCIDAoJ_O>++`k9:HL!57ju');
define('LOGGED_IN_SALT',   '48$8,xQO5G0]QBk3o!`l?6ppAT*n7xUA]4=T|ikjygM6!Q-z4YHLO Zb+A`od|X*');
define('NONCE_SALT',       ' gwr4BD*bXe!6}=%b>-:uV+B~v;g9Z(lgv/<rx4ked(JWN*8=fLQNHPVo+JxAbb|');

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
