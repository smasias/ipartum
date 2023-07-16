<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'ipartum1_wp678' );

/** Database username */
define( 'DB_USER', 'ipartum1_wp678' );

/** Database password */
define( 'DB_PASSWORD', 'pZ69(sSV8-' );

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
define( 'AUTH_KEY',         '8jzzlsuzhrjbqp6o7uiahxpqpq7slqi4f6dl1er4vputq4ko5ckratj4td3mj0kh' );
define( 'SECURE_AUTH_KEY',  'bqg4w9mnrzrljwvudt0gary9n5xhonpvixbab7y4x4icsqfbddtreiepjrwlrzvu' );
define( 'LOGGED_IN_KEY',    '7uf3rp9kqaqtj1aml3k611araz5akp7iwblrgxtgllrjlx9uzd6vlw1fkisswmeh' );
define( 'NONCE_KEY',        'tkdtn4sft0ic0qb05zwjsrh0yue6kzwcinjcbke3vpglo2lwbr3huwgwf8unczcg' );
define( 'AUTH_SALT',        'ajusu2i83havqxd7ifjxnllph8haj2ojrrwifccqt3ygpkwe4hrj5bfm3ahk6nrl' );
define( 'SECURE_AUTH_SALT', 'ykm3xh8bdkhv2xmxi6uzisdpvznurkttqoc4hxltp801wllpem47khtacvl1lwe8' );
define( 'LOGGED_IN_SALT',   '9hffvpyuxomfqygarc2vc107klpcvwqojwgjcte0pqravgvwwbcgqq6u2r7nfzss' );
define( 'NONCE_SALT',       'lmnc1pfaj0i0kowaedqyucoognpyuizre0gc82pqdxlo8n45y9yiad1fy5pmrth6' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpkf_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define('DISALLOW_FILE_EDIT', true);
                              define('DISABLE_WP_CRON', true);
                              define (WP_POST_REVISIONS, false);
                              