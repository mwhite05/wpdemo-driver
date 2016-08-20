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
define('DB_NAME', 'web');

/** MySQL database username */
define('DB_USER', 'web');

/** MySQL database password */
define('DB_PASSWORD', 'glugtunnel');

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
 define('AUTH_KEY',         'w;iPAEqu?,3I:2|B$a,Xn4W(YU}h(2-vG0j{/`i4;@-|hb/KKRNO6W2AD!r+YuK+');
 define('SECURE_AUTH_KEY',  '@rWgtqC[U`$+}YA%SLHYT/2DUrsdVmX>+O^vq8-@?,+r)IW3=rwP@<j vC.NVN30');
 define('LOGGED_IN_KEY',    'bdqOc)|vw^}<bI5q`W++py#`5W^.-x:{CxU!zS)&U`a}Q}w]z!ob(^`d##VUV=-H');
 define('NONCE_KEY',        '@|:21|:qUS9)f}} @rrn&h+:j+U{XdxyFIGL-$=GZeu.cN+8n@d{-Is$W9h9|AM=');
 define('AUTH_SALT',        'C(6jAVXHb|D(R+r04Kfy [R->?Of-^+S8L4)*~$_,[t2|ycEt9QXgR/EETjXWs-.');
 define('SECURE_AUTH_SALT', '4/V@)MT2|6Yl0yCyko5*ckYhh}Gv7;)){fF~WrHUEHH#n@KSmuhtJ.Pq d+R0Igh');
 define('LOGGED_IN_SALT',   '?T-U~eYT_}Ki/||TrkjZDVCN9`rhJQ+@wZfw{f?TXE&XM_)y41|TrQjqxwtsNFu)');
 define('NONCE_SALT',       'Yggeb EvJ`!^sy]I~5#3olB|9]+Z>U6?[qW-NFSkB2Jas31ue68$dmiAi:Mwa5L)');

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
