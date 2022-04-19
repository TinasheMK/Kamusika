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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kamusika_wp87' );

/** MySQL database username */
define( 'DB_USER', 'kamusika_wp87' );

/** MySQL database password */
define( 'DB_PASSWORD', 'v368iSZ@p[' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'lw93slyqekvma4ok9phmbov6ojipdlr6nsdi3znse4degwbnbtfqxnzkwws48ckb' );
define( 'SECURE_AUTH_KEY',  '3th9ohkoesphmuitpcireinnhsg9gzvathscyrpqjbpefuvyzembfxv6h7hfkgve' );
define( 'LOGGED_IN_KEY',    'akbf4moijhj5gif4mmeelnroujodyqjp5flsvwurtpij2iyipdpotelborhs9ddi' );
define( 'NONCE_KEY',        '97gzytfalcew3pkepjdkgsyzu01kzpngg8olygnzpmxf6jrr5kecrzrbsgl5nwhk' );
define( 'AUTH_SALT',        'tsjfiu4tfrd4h07n3pdqe9tpz2beybdinzabn3rk4cjpl1l9blgx5tc3ndi1cc0p' );
define( 'SECURE_AUTH_SALT', 'd7qtbf3gmn4mob8lmvkqmfl87rjohwwcbyp379tpuvheapzewn7yewlsql8dngca' );
define( 'LOGGED_IN_SALT',   'gulkcepjdtzxwuqdfrmjb4vmotuj1pgpvqttndtqs0zklz9iubkaqckmo6epeqdf' );
define( 'NONCE_SALT',       'bus8x4un1k5hioqrlzz4j6rqkum3bnbvk1gsb2ognn4ynqerlpqznabx1pug5jqg' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpkg_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
