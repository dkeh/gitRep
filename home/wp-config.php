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
define('DB_NAME', 'makersga_wp59');

/** MySQL database username */
define('DB_USER', 'makersga_wp59');

/** MySQL database password */
define('DB_PASSWORD', ']]pSTt9403');

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
define('AUTH_KEY',         '6ypxrjrk3q4duw0bdmrtvt08jejm7alsa1qwt9s53duhsr4ob2gq0gocayhlvrka');
define('SECURE_AUTH_KEY',  'lidvw9vskjlx5mf8w6llvr3uz9recvehif8jldgbvy6lr3sqwgehvtmfljsrjpid');
define('LOGGED_IN_KEY',    'mwkpkvxouvcd3opwvr8gf7pab6fmdsspl24npgqnid3qwgbayxsebjvk5p4ftpwo');
define('NONCE_KEY',        'q2av7zwons0j29gvj17gij88dtwvibmhhe5gafrtr59pavtwczvmymke2cmb0rxt');
define('AUTH_SALT',        'wf2etwrvctgyncv2b6nr8d3gc1yulhpzphnb0tm2cy8wnbh4002pjb0vkcanagmn');
define('SECURE_AUTH_SALT', 'mliqnu9fbasgopqzyd9ra3x6cvzcunxdapfhayppptqrwfkitz1t0ia6tqgfopnt');
define('LOGGED_IN_SALT',   'ryly4fkm7ohj2jcwukrwg8gbjwsfh7tna1wc91ywidfkqa5ilvezmkacqpqvhslm');
define('NONCE_SALT',       'ayrph1f9l70q0ubedft41hqahjduln58xgrfq7xkltbvzugy6wl5eglaqqda9izx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpp8_';

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
