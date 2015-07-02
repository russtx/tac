<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tac_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'F6WYCkbkiEfnP5rZsDKLyUG6P0ZNb7qdYItsQjHWF2SKhr_OTtp3JYZTwjEI36dN');
define('SECURE_AUTH_KEY',  'zR4Jl7oTCCQ6Y8ICLi06kyN3JdqqJUP5b90rODHQVu2zZ5v5SW0vfGiSmaZ684gu');
define('LOGGED_IN_KEY',    'jwXeVussKzRke6gT8VYcvUDm2nbzOIZ6EBlrYeCSCote0uWqg1XH9gS0dDfjWtq7');
define('NONCE_KEY',        'wC0BL_vmNtVjmoWgLfnyAsayyBEzbXjfrv7twgcnai2DkHfqrrl8byHcioHuT7ll');
define('AUTH_SALT',        'eU226HONAnJY9ZCrdJy6SEIHwZH5ZUDi0Joi4MrKIj2zbxw88yRe1JREtGgMnAwi');
define('SECURE_AUTH_SALT', 'ZP4iE8p6vxFWDaZg0f2ZaNqoJ_l8dD7AMybTYWjIuNYaVKp259gupnjRnEaSIB9e');
define('LOGGED_IN_SALT',   'EgNZLMCwKtw00sx3D0byBSFkqQHUI8B_KCmiB18o1krV4Wp_bjyBRXq7EWri4Ed_');
define('NONCE_SALT',       'UfDZWQSbFzCc2rmtgk6IZgsEzdXuCNNDBdFNZybTnrEwUwqG3FMkLi2hB7UQZPuE');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

define( 'WP_MEMORY_LIMIT', '96M' );
