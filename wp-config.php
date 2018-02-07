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
define('DB_NAME', 'hg');

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
define('AUTH_KEY',         'PN/Nl18B&kew)UR|bBx3Ac&q,{v@]|NXgGkA8d^Y/;wi.J{$rof<9wh4FZTIZ-KT');
define('SECURE_AUTH_KEY',  '5_:^ <N%n)`*hg+uPs3]DXoj6CAu0knsCU=n*Xpp_EqNQM*mFOeg6~t:K]~ay*<x');
define('LOGGED_IN_KEY',    '3YW8E.Wvor%NM#7X=5%X2<N(@3?vK87J?:-M_vcfP~zpbo?:%I)rlXrI^ChoUGf`');
define('NONCE_KEY',        '9ezuC>{k1lytUzn-.h,rJ%0.YyC1eu*o*NDFw0AGK)#0q`F.MM6h`)@kdff(k&H#');
define('AUTH_SALT',        '_D))vIQ$D*5ao]+BbW#=qLolhRBK-`rMrHTgKy[Aj?*Qr~<(!(n7e^J~g #Bdxsb');
define('SECURE_AUTH_SALT', 't.;g}L_|;<?q2njBPt%t^rQ6qeA!*s&^lH!nxo8UaHf-]A_dd/zxt%av_sLlu:T|');
define('LOGGED_IN_SALT',   'N_$H*.xd].,P0iH{~:^QAW |sE@ |}-Na,%7Si_g|*HXTh3g5rBx85`k^Z;^~$3>');
define('NONCE_SALT',       'QW(Ih%)MJl~&?[n`5}b=$BOXB!{#nfS^i+;)Yy8eS,J<8}K8pKE~Tz,@HrI1AKUw');

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
