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
define('DB_NAME', 'extklant_zdyc1');

/** MySQL database username */
define('DB_USER', 'extklant_zdyc1');

/** MySQL database password */
define('DB_PASSWORD', 'T(@et7jkhMoBgDm8oI@45,,1');

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
define('AUTH_KEY',         'SAPulcA7k7cZCe7kL78bw3LJkxvJrH3817pOjxPhpk4h6mdQ5TvXdc8G73BHdQqx');
define('SECURE_AUTH_KEY',  'NJISwUpYX5Nd7c5tJPqg911X4p4tA03VxhB6AkzKlhCDuxfMs1cungOnMweYTSRr');
define('LOGGED_IN_KEY',    'rYzQ0UW9BQGlZQ8MxXjCFbIUaFjCeJpqvakBtbOUuRZu3XsjtUieIJHU2rCVcjvy');
define('NONCE_KEY',        'DpCwnwCjRrTdf01Q6KoA7bgLvArsEVaG0Yodc3EnCbnVz7bsxBtzGp9YNIaEdWuE');
define('AUTH_SALT',        'uPsgLgfiUjm2rjKXlSxhBHZaSh09StZYBqtzk5uCvWc5OGyIqiMJQ5Lbc8qtnFnX');
define('SECURE_AUTH_SALT', 'Nfd4zjTwfuyb4rMU6hCeA1bdOZ7ZEAjNetZj9y2DemAa1q9rFTSKNhGd5pRdoAex');
define('LOGGED_IN_SALT',   'Bh0QaYu4uOVq3Z6OSwgd9UJXCx9v7Tij9lxK61LxvY2crOto52lAISjl8APa9ekh');
define('NONCE_SALT',       'Fqj7QlngCpUP44R8OrRGdsOTZa8ALFzTMmk5oZ3JYCJSF7Y3AeqU5TxGCP8WJ6PF');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'xszn_';

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
