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
define('AUTH_KEY',         'vY4l25ibFred9rUP/aw98Stppoj+QHafwnr2smOYJGkpbyg67bUiHHhbsjMjT2v2YvxzKzVPGr0riZ9NwP8rNg==');
define('SECURE_AUTH_KEY',  'd5vmp0f4InOrg3pFWTPMqmpFCd0DJyomMUtxx9Tki5UpM7t+jYQWgCIGO467Zj8yFZlMKaMlIh5RDKJpNtjpQw==');
define('LOGGED_IN_KEY',    'tvYR1lNNfA7Fg+muEu7mS/UVP874l88E2a9m8rGMykcQNl+JUV8wUqSXeKuKc3R4eiQyxw/508A+jf+ZtekMDQ==');
define('NONCE_KEY',        'R18Dvsp1YcW09TgfR93YuMKOvYVkfu76q+IoaxgB0yPmewB+B3ETYgoDOyZ4bP9vY3zopRrCmYsjiDG8aYmiHg==');
define('AUTH_SALT',        'GSz7Z7gFl9FtdzDtFMm+ZotltZzlX7hw4v3wJO/f8xmSkDQRchymbiEyM0gFyqg+iKodKeNlOIQ1+KqiUoectQ==');
define('SECURE_AUTH_SALT', 'T1fiwRO8hfSP26Il93rnntEboah+DTHdaeZidQb37EWalZZOSdWmfc91C+vcrG+XIuNqtFkNH+1+ByhFg8bM6Q==');
define('LOGGED_IN_SALT',   'zqs+ZbEpm5NJvl7qlCvZSTRrKm350d7kY9KMBwopO2YSNAG+3uF7195CUKubGQY/iTE5Fmyk/8bdMDP4znZcHA==');
define('NONCE_SALT',       'XT4TGy56j96WB/7W2ZVvSmfe49JOZyPBjrgJIf04GfTUHw5m+LIe6hR9OuRnT8guDGm5K/CLwfvkg64cq+s8tw==');

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
