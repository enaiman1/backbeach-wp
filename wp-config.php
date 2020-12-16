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
define('AUTH_KEY',         'QcAL25ijEc1iSO1Rk2H0xB/nrqRU2jzVdPC82/+eUc4LteXyFr0pWGj5C2HNqhCpId7LQZ9QFGGpZjcXBEhaYg==');
define('SECURE_AUTH_KEY',  'iSmMTxJ9llPBj7vJFW0y76r8Y4DnmdZTD/wFSbJRruRliTVNOsjwXYErkTAQb43gFzorgYPtyKCxsOGW3n2pzQ==');
define('LOGGED_IN_KEY',    'MEOeuuqLNOydaUSslG5ZYECpcxUORq4q5MG+GNh5cCf5zz2dfbNVGtMEXVEE9UztaObpXHA7EKauePdf5cWq6A==');
define('NONCE_KEY',        'Riitb3FtaYalPzLp58s8IV3Cu7+V6nT01OSXb2KG6VwQVm3jWtLLZXPU2nV0WbH6gDoz8JO+aLZvkibU0BuoCA==');
define('AUTH_SALT',        'yBPoStv/YZUILx4YmcOKepCRoajoWkvChJufnINHBclnMlITSILemvb2ilS9Q7jvhz67sAjrZfcERF8fDyLH0w==');
define('SECURE_AUTH_SALT', 'je4OHjhjnTFRaE0GCDWHHVvzmFJ2KALWQQfhj/pPjBESs5eF3ztzYwk2PUavkzO3cIqbmRjDLrslIfvjYEp5Fg==');
define('LOGGED_IN_SALT',   'b9spAssvp8F/ecH0iAZyjVbLt0hROjRrmFMzhMPy0oWkH+jZqlDjkOLHUv1r64zUXiLtt6MJTxr7xIyrwlOYZw==');
define('NONCE_SALT',       'SmHw+5K7h2H9JWcXbB9IIZZkTFSTVkS/AdCjSS3W8DEGCDyQmOAnZgivK72KQGutoM/elZmhQzAVedObBhrESg==');

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
