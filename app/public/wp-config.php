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
define('AUTH_KEY',         'mRSB+ubYzwkX7QPuA/OXrR8m2W1KxDh/DQx9ZNVfRV/aAu0f9tyre7gmsghc1wX4+pu0UKNdVN/coOXMsXS6SQ==');
define('SECURE_AUTH_KEY',  'CpCuSIOaogJ7bIzdGeW/8DDNKjWRrALvJAGm7CsTFr7dO5wRng67QfPOYSJwGt7U0H6xChNgoyecIRmTLngzUQ==');
define('LOGGED_IN_KEY',    's1HrTSbVxE4SnOe+VWEZmS6dmUuGIaDXq4lMJcbQvpeoAavQiMco9JTGLeVSI9aLK/cKiK7vn430L592L4csjg==');
define('NONCE_KEY',        'aweXwrMG4rjUwSfyYQyHDiwzMxsj1TnK0vj0zVBB+okb3w575DQiGrrh0R+NX0GgUGWCWdp0vvfyGaWmRKJwmQ==');
define('AUTH_SALT',        'GYS4wKa+1QnjOElh22no/kQLyj/wfHJJ6nJ2FmbrxeUbfndVYpDhJGYX/LVbjuSEI8loNg8DJCpDmkoZLUwViQ==');
define('SECURE_AUTH_SALT', 'nAf35tP9Jjrc10z93MRFGyKN+yr5bxrYO6dEpHyedp9+BEu2ivDM460y8f+X15DnI7cRL3kKAxDsvQpKzSSa1A==');
define('LOGGED_IN_SALT',   '/ymuXKcj+ollQKi+EgvEAiElE966O1/kuMppemhdqUfpwlPypPgQkXM7okvgiAZawfbM8+tS35XWPOA5wjicSQ==');
define('NONCE_SALT',       'APb37tjL7yqui2qtvqLXsjP6jzb095L5vzL0K2/qyVe8KzwSFMLV+/8BZ0HzkvNvU9AvJco+t3CbLXFe5BwrVQ==');

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
