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
define('DB_NAME', 'makersga_wp723');

/** MySQL database username */
define('DB_USER', 'makersga_wp723');

/** MySQL database password */
define('DB_PASSWORD', '7KX(t14!Sp');

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
define('AUTH_KEY',         'ctx9jzebiqwk3njnhjdp1xv0iwkp5avjhnrfehi7mfexw0xyvft4hbqicljnj0vp');
define('SECURE_AUTH_KEY',  'hw91rc4sakx5lmqvi6qwuwdsisd7xxanz0qtjhq5aougyccld82gweqjybtdwa7p');
define('LOGGED_IN_KEY',    '2m94ylqth2gxvtieqre1c2oztzfmgd1yfszrkjenhthlh9zrrgq8os7ob2hjjysp');
define('NONCE_KEY',        '9rt5xcuyxnwubbrelnqgrbsrtjz0tqdgtdgywcrwptbhm8lnmnjz58n7uqncjxd3');
define('AUTH_SALT',        'hojoyzlcbp3vp75kujiqvfkzrvtydlznfyeyzyg8gn6iihsksjlkiwgt81xlynh7');
define('SECURE_AUTH_SALT', 'zecvhazyedogc5wpuzjmerdgco6andh7sjpulw6pgwkpfbsatsjzd7f0gkqw5nq8');
define('LOGGED_IN_SALT',   'os1viuaxglfroasyzgw1urwmymk492ivywftbu4yhcz3t32aaqa5ej5cdun9e3zj');
define('NONCE_SALT',       'eh3kjsx5qgikw0cczocrns4zngac7enpli2jss3oibewkyaihbu6n3t003ryj0tc');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpzs_';

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
