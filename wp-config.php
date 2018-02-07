<?php
define( 'WP_MEMORY_LIMIT', '64M' );
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
define('DB_NAME', 'mortgage');

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
define('AUTH_KEY',         '}NVbe$8X*NBG9{Rb%B}W1xRXTRiP%1hy[t-w. L?{AJdC_~G0k>.$fP}q(ppmr*f');
define('SECURE_AUTH_KEY',  '^99{Bc:&+$0!tCurhuRq<op(Enk`?}omt8F[.dnnXqT`b+FA,2W4i&hVyAVx}:Tt');
define('LOGGED_IN_KEY',    '-6=B7_* >Qn3n4hs-_L]I2l7.I6!%5|UJSm9n9FSPL=4XxH0b(m(wY13&+!;i)y}');
define('NONCE_KEY',        'uk^)`:jZHRk:mqK7Dkovtk?W^uVYzkgW}Hhb#)Xlo-k.ll&=GnI`Fn Z7aV[>--y');
define('AUTH_SALT',        'Q[P9&7/7LC1`AEJ~rHCF !?KP{:/+0ThP6(2@yd)S9UC(*DOY8hr.3Tav5j&vZ^]');
define('SECURE_AUTH_SALT', '51GWSyE;hg!x,yg?%srEbioB&Hy1WJHhLYxp]xr`jX?l8>TSs%{awB>PX<5`!^h;');
define('LOGGED_IN_SALT',   'n=ydrtz+&2fE_i2r5-^LqI2{c,39JTDb,K?e%lMnj--yrgXtY<E-rQ@qSS* hAI0');
define('NONCE_SALT',       'WoGb0KT9Sk?lC61rxaY]2Q#/&zsP]wy^Tx=gbRVy&gjseZ!jVFY9_mt}GG>+%L@@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'hg_';

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
