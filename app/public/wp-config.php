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
define('AUTH_KEY',         'TfjWOzlTW7YCU7vNpCMMJR88hXnTBH3q1iNG+QstCmsLzCUK5/HOTMgS3xM1svQzIEYnK3ub/ElbLOTj2P8ZSg==');
define('SECURE_AUTH_KEY',  'z9/WpQlYEgFU9RlsrPBnYm5EL9XQ6Hg+avEKP0bqhp+atZdgMWpwks0rz2lNT6rlbv2WNaeUfOd1xJFcH8t8dQ==');
define('LOGGED_IN_KEY',    'vVXw3cYj663XxT9e1MZbrMj4AWOczNyujJscUNmZ5GQLWchMZ5QOUu95tuTbQpgCMy7K4xvsF71gr1C3BRmAcQ==');
define('NONCE_KEY',        '6dvVwf4GazeoNny9dG5N3uEzm+w+OqV85XhzNNjVwIpCLTFG5JCmmpKSpYJGH1yotwo/RYy5Jhy7zdAlz8GC3w==');
define('AUTH_SALT',        'CU+Fu63ueZ/TK7GclVlc1DbJxli+AQP/ZksrwCM/8rdrnTMI/KJ+HfNalRvA3oKL3NQqUZEUT11QQc4pt9qM6g==');
define('SECURE_AUTH_SALT', 'MEUSylZ/a7P3FoCJTxfj/ZyQrFlmec5yRY/8O1olnZF4a3BQEJZTo5oAhPgwLkmwmu28NcZcM8hRYHZd8A4p1Q==');
define('LOGGED_IN_SALT',   'qbJFlseaE7okaDtG3GZKebeVJLd8BgEYRcznBk66HCHfuYf/tItPfrAmHINCHcsp0rQnFHzLs+fC/vD+LtavTw==');
define('NONCE_SALT',       'SWT9Qj377pcrMKYZmqxjO+pHEIJW3h2zLgdzFTe5SK+TPNG7j0KlvEqjghDZhtqedcOczEGcjOyimHs4yywmNQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
