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

// Load environment specific config else fall through
if (!stripos('local.', $_SERVER['HTTP_HOST'])) { // look for string start on first character
	require( dirname( __FILE__ ) . '/wp-config-local.php' );
	return;
}

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'celebuzz');
/** MySQL database username */
define('DB_USER', 'celebuzz');
/** MySQL database password */
define('DB_PASSWORD', 'celebuzz20!%');
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
define('AUTH_KEY',         '9jZqORzIFDYvCFxmKj1KRFUQ20l7UETdzN5CZdg5GZD3opFlrJjJrwdI9I2enTof');
define('SECURE_AUTH_KEY',  'SFWjwyaQFeu6K9U34P0Ji3FxBnPQWxUnb8MsZhsokceZaMdDZcq27nhyGM6b3YGN');
define('LOGGED_IN_KEY',    '8Qnvu3yKyHXzLuKHMixG9NUp4rPYaPg0vABlLqOQygFS6LwF79YAtespJDbClr8Z');
define('NONCE_KEY',        'etEcRmCfYl2W3adEDQPK7bQB6D79qYEATiqaaFJQStzL9o0cZbNMk10XImIUe2yE');
define('AUTH_SALT',        'G5LVvxR66JldMY8u97zhIeQt81xziBLf04vGiywy5K5fSIBawZzUi94kLjj7c9ao');
define('SECURE_AUTH_SALT', 'vS2vS35d7wkegkdwbBQOHlaEvpOwFjzsiUmJmnEz4s27ZoofUb4rkVhTQU8r6LEs');
define('LOGGED_IN_SALT',   'lojaAwGuzBjvfBZxJ50E8aW4MK0SWCAteeaDdmKBgd9y5AlsAAosyo8ghJv5n95i');
define('NONCE_SALT',       'cdK4rFtZktnTYqogUdmz3ea0m2FwT39kZGtR1QyE1BN1kkM480h3Qa32t3aAEebr');
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
$table_prefix  = 'cb_';
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
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'celebuzz.in');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');