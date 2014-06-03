<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cl51-a-wordp-e2t');

/** MySQL database username */
define('DB_USER', 'cl51-a-wordp-e2t');

/** MySQL database password */
define('DB_PASSWORD', 'fsx-6MV/6');

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
define('AUTH_KEY',         'Cig)S/uc+YgiaC4m62S(Bj4zvmC8fc=#==neNPFZDIf#2QSjTz1VZdrvZECr_Qz!');
define('SECURE_AUTH_KEY',  'l^bn1#zWoeAcYRUZSg0m/uefS4Pri+xP_FY^f8AiZ-WoJQ!FBItXwTT1_m1K)Ejk');
define('LOGGED_IN_KEY',    'b19saIWQh+YKCb1vqKC5dkhd4AD)wB7rR0m-Wg-5YRGrkLAsYmlhnK!NkoA4I-gY');
define('NONCE_KEY',        'tg9CgQFrcc_2E7FOfnBx/zi(T(iPYFCZ-2qa=pukRa-xGvM2El!HLGzVguCeP/zO');
define('AUTH_SALT',        'IguFDjAycC4FJQ!FTi8LH+sl^cD#pvy19VE5RNvAsKV+CV0RdFQp4JMjHcpA4tvS');
define('SECURE_AUTH_SALT', '8Yajj3eJ^r(5(i=achTs2o5sES7lr-(JedxMiUZjX^yqn=L!hJbX018F26CWwr5q');
define('LOGGED_IN_SALT',   '8+q3J_X/y0eabBj1dq_XzyRg#ZrJIhrquzhNWzxVcBlftuIKU97HQN2dIW89Kv3c');
define('NONCE_SALT',       'jYWcGf8/W+76/Y=5sCvV-l9TIYYZ9YDq8RfxCoO#Y!Dq2#_Ph3d6X)inTUpgLp5c');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/**
 *  Change this to true to run multiple blogs on this installation.
 *  Then login as admin and go to Tools -> Network
 */
define('WP_ALLOW_MULTISITE', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/* Destination directory for file streaming */
define('WP_TEMP_DIR', ABSPATH . 'wp-content/');

