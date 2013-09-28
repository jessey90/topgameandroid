<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'topgameandroid');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Fs8Pwk:}R*SDZaPNU|}==<y5?M;Hg+oZ)#p!ip8TqRkcEJXkE<O$hfVOTgfPCofR');
define('SECURE_AUTH_KEY',  'KsBsi;y|o5zZ:3{9s_uI#2d&j>#z &.[@))VSUOGJ/#N`h@{T/rktG/A7v;l`usA');
define('LOGGED_IN_KEY',    'D:szj_n>p>vUd {mq<p`Z,IsJ%G8as:O}AzAW{u>Nd[UA@#--kSpmEm{MO-kE-QT');
define('NONCE_KEY',        'awH.S,Sp?@BK1Pr?Rd>0a14!7OL019kg!Mic9HjR&FBe.QmQ^IQc.:^H<GO;*{Bc');
define('AUTH_SALT',        'z`_n.!&O/&w;cl,n60>$TFsw(@ s^Ekkfl60M?3m?$<{zredzL :f2gVj3?sdsm/');
define('SECURE_AUTH_SALT', '2BZTJqJryuSnvG=I#D%T]G3K4-%Y97FEk2.swPl((Hwuj1N.)5A&hOTgUv;353U)');
define('LOGGED_IN_SALT',   '$!}[n*X ]ME1}+zc{;fz.Nl^E{Zuv7 bF8g`>BCAO&b(uT2cS#Bv+IuHe;DxJJ%(');
define('NONCE_SALT',       ' X.im}rN Z7qusX[kWL5LY@AEw<` NGJiWwYN.N(Pqs3>l^}uVS(X&{Qz[qN#C})');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
