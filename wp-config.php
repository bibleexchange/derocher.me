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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/luke1915/public_html/derocher.me/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'luke1915_wp1');

/** MySQL database username */
define('DB_USER', 'luke1915_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'W[#kQ4Fd9F65(@4');

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
define('AUTH_KEY',         'vNFWfbXVlhb8tcYmtHHWyLNl6DhETHKDL6rDxmHgCEfuzqm6QzTIUW2dtnDmVmgN');
define('SECURE_AUTH_KEY',  'HqNHm0gnn7V56IBwDaciI5RpraKpNUFFMlAo81Nz9EVrlQOdxLDcP1efejUkMNgr');
define('LOGGED_IN_KEY',    'O8VCeB9i51FaxLujaBzVhV0eHEkEBo49KQbXETP7kdsyX2V6hCUHKDjCSeyt7lwB');
define('NONCE_KEY',        '2yux7t6YWaSvipLC3YAc07KvVCmOrjYCPBQTcqbfIRuo8WNl1RlDlZeTRvRlT7lF');
define('AUTH_SALT',        'pqCcjLYzoglg9PyZBmi8vModUHeN0kuLC58sRomQbvLIMTBRHg56AMuu5tZj6BM9');
define('SECURE_AUTH_SALT', 'Tnfs0OrpBf9b4dtGrY0DyEUdkfSuAusJtEytKcKc7vANHYTOceQJK5ZVrM2EsVGt');
define('LOGGED_IN_SALT',   'TxWUrCdkYV5Bnrw6hVNJxRfPsxIDJJVmVuxgKlYI5y5PVTYKtEyecEwtWAcSMzjo');
define('NONCE_SALT',       'qnWedwKPd4ZC0NAzNHvt6QM8Idvs5u5xrkyiD2VpPqW1K64aCS2AtaIUFcXM8fLl');

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
$table_prefix  = 'wp_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
