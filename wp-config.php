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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'HIjM33kaH/lq0WlPuLHVqisYKtbK/4TyH580s2pjIx5D0JBAoSziflDnTKeJtdi/XH7sBt8tf+WYnpuf2y0I3w==');
define('SECURE_AUTH_KEY',  'pzrsJlkZEDO83oMsaG0dk1OgPmAXTzHiBex56OmnOHVv6JEWoh29b4BgcpZPrMNeV2Y0qgGB6T4ZYNqZ3+ieOA==');
define('LOGGED_IN_KEY',    '8gD3j8aA6zFXWnW9rkbiFYxnlPRMSUeW7VkJw6p8ukJmoKe+lkwPhHbpjt9tpPT0WAWlvc21nAdA4a14LQI+eA==');
define('NONCE_KEY',        'm263/ajrugi6ToYXIyA03n0rOQx1BokpC4xfkiKHHMgdX7yWWq+kpBkk4vTlNkpFdlQDWYZMnxS3R83e5T3CuA==');
define('AUTH_SALT',        'CJQ7KJLYuKd+Vd3Tu3cY+MyCoauEwd/0n4VIceODk/Iq5AeUSbTXOHBuugwiyBSGM9aF+za/0tq1lu+RrYJVrQ==');
define('SECURE_AUTH_SALT', 'vQFWQvX8gMP8DRPn9swrKcup6lmYqWaWEeTCP0qPQl5+2sPpkiRqkI6eB/dl5g74c1BvHlcykuhi18UPcwIrow==');
define('LOGGED_IN_SALT',   'PVi8mA3+lGVNNzOragefcKxwLFOAULsVtdEcO2lUkZYA2cSGM39HIXmL06dSuvff+rIgjazTHKDnkkZ4iSjl5A==');
define('NONCE_SALT',       'Mo678Qnky/+VpAQQTnS9OiJgSlz/xezm4ZfCsFANAo8aKeqNGZxu1rrQqMKbxIK978lq04BjcYL1OI841H3NzA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
