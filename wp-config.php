<?php

// Configuration common to all environments
include_once __DIR__ . '/wp-config.common.php';

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
define('DB_NAME', 'su-beta');

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
define('AUTH_KEY',         'P[{82ER^,#?b[oLK(>6SwZy@W!pbH=j+YBu/yRq`J(=+(cyJ3#BOR3#<d1;0!c8O');
define('SECURE_AUTH_KEY',  '^D/~IeMCZFPYJ$2~cyIDy#22!%xIyl+IvkflYtlXc]j Qzj^,xxQPH`3s8oT#Oc ');
define('LOGGED_IN_KEY',    'SXV`u]u<-6ovP$Q&;kKK_eiar9AUG#?]J%![$1*zgt450n>g@7mBh#F+i%:7UhVe');
define('NONCE_KEY',        '20a:~CoC/$wMDcOOVZs@y0hG>#^spT{j@)osXrFtT<,KtQ9.WvO5n!h?NP{eQ> R');
define('AUTH_SALT',        'BOo)0hD~/,AA$exjO!=@rY4[nuXNchEl+6]Rvu[]5[`kq~N$P:M:w%1}A..n1/2K');
define('SECURE_AUTH_SALT', 'a:&<?fDG3aM9bD*@7dy0#l3k280Li|[CH-6k>cHt!uJUcO1NbN_Tt6Lc2{r_DVe-');
define('LOGGED_IN_SALT',   'j:kJYI2w[O94?mFjF.KL/yse3zn#zIA>`i.V>TR8gdjE[k,Y-4LO[#*Z1In0ol+A');
define('NONCE_SALT',       'eICKadlUeGL}9|)a =J$Fx?W?A //zV?lXuI+e^T?HWXj$1goH;Sgzo%(l;K9|^}');

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
