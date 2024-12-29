<?php
define( 'WP_CACHE', true );

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'smartsti_wp866' );

/** Database username */
define( 'DB_USER', 'smartsti_wp866' );

/** Database password */
define( 'DB_PASSWORD', 'p4G0S6!p6.' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'oemq9s5wsvbjs50elw8jprpwo3rxa6bkqtaqvsnwrqlxdtoz8enurwqan29p7drz' );
define( 'SECURE_AUTH_KEY',  'h1zzzdenfbjzxwcvxstsxxfsyaazprh2doroj7y5ydf9zyo68sbreuceryidx9ux' );
define( 'LOGGED_IN_KEY',    'q7ioproykic8izwcvgxfuipjmwffcq75fb0ogrx1x9jhmogxr8hea15adfzr4qxt' );
define( 'NONCE_KEY',        'tffbzcj6vxar4xhf4hamaraontjlzvn1oy3byi3sartfdkvcmmwpwqbfuwuwhvav' );
define( 'AUTH_SALT',        'yxjuu7dqwenqkaojfrdqcdp7afq0faayu9dnzmgiofghoxqsifweoaqhb1v7rxyy' );
define( 'SECURE_AUTH_SALT', 'hy9vhl1a9xmaxqrmqycgixgoxyaorsc9ad7d026qratqco6gz9wkzg5kfw8me574' );
define( 'LOGGED_IN_SALT',   'ssyu5hx7etnhjf645ufvlbncj8phqzdpzjjd6vfq5tmuwmorpqg4j2exqnomdpse' );
define( 'NONCE_SALT',       'riere43sdki4bo5znxmvajdaqvuua18xtqmolqsv0otew0ft0xglpmshfwdhkpxr' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpt8_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
