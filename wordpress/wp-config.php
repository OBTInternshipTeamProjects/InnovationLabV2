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
define('DB_NAME', 'i3995355_wp2');

/** MySQL database username */
define('DB_USER', 'i3995355_wp2');

/** MySQL database password */
define('DB_PASSWORD', 'ilab2017!');

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
define('AUTH_KEY',         '&BPsXaHr0[ed$j5|jI;w8i_x^@!2<+A<vf54zc({7{0MYfTzjqu 3I048#jk+XfC');
define('SECURE_AUTH_KEY',  '9NS,hmHpMNttS:j)m~g9nH%?9)SoVF[OSDzbn7Q.)0, d:`0C-a4Il72ZF=PF0AV');
define('LOGGED_IN_KEY',    '?Ss_7h`E,kw^Q;!1V4+pMInU^Gg{b^:<`)aY:q}7gYkD?Mm^,@t(3YbQxz3MpRCZ');
define('NONCE_KEY',        'P{;+MO_7dhA9XS71$N*85r9FBvaa:_CcS(N6U_p-|T*dSWIE&N(D~T&Kt2t&f1BH');
define('AUTH_SALT',        ')Xf;nR(I%3ZTG.@76tO+q!~Xjy3{DHAqb^oqe2o)jl*eDGJJD5Fc44P/k5_R8?Pl');
define('SECURE_AUTH_SALT', '3M@nLb7l{?@7~Mr|aiDT1V;j]T/Rn[Te)J=GqBd/}h7KNI40h6:.#?m@kAj+^8WQ');
define('LOGGED_IN_SALT',   'Q8l )g;^C(8{J,14Oo79uZ<(X:wYl2x @t8a d&)Y4mb`&4aqv:]w~5~x$*oQ`(C');
define('NONCE_SALT',       '#UqK)sZx-/5d<a4!?d.Orcv(q%bIX 7J5N52ZmdUJGh1F+dc[ybIzQC3.T]8)1m1');

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
define('WP_DEBUG', true);

/* Multisite */
define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
