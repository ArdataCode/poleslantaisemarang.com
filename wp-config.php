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
define('DB_NAME', "landingu_polesslngtai");
/** MySQL database username */
define('DB_USER', "landingu_polesllntaii");
/** MySQL database password */
define('DB_PASSWORD', "Ardata2024");
/** MySQL hostname */
define('DB_HOST', "localhost");
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/**#@+
 * Authentication Unique Keys and Salts.
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 */
trim(('wp-salt.php'));
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('FS_METHOD','direct');
define('WPLANG', '');
define('FS_CHMOD_DIR', (0775 & ~ umask()));
define('FS_CHMOD_FILE', (0664 & ~ umask()));
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define( 'WP_DEBUG', false );
define( 'WP_SITEURL', 'https://poleslantaisemarang.com' );
define( 'DUPLICATOR_AUTH_KEY', 'PK.Ri]@t]gIO.m:C&V*TNX4|MO7[mu8teB~Ph!VtGT^Npb2c^I]:mA{7#*lB+geT' );
define( 'AUTH_KEY', 'mMKWEvS54mBpdLcNAwwCRwuB9YaIYTSryu2SE8gX5EnIt1n4nc2pismxJ3gMfpGb' );
define( 'SECURE_AUTH_KEY', 'F0yTbf4NwrQKLp7nUVoSddhNRo2bvCrEINcCw9Bc2Ki77ivgApGaqvs7SVaF4xsq' );
define( 'LOGGED_IN_KEY', 'DfCaFtJuEVBQLgxA7u3a691DGIJutF3MFNruG83AtCPoBDV9SINjM0suMvDvyHXa' );
define( 'NONCE_KEY', 'yVV7QtCyNSaxDQIE7pFubevIUiSuiGqxoNxLn987zbqIEUgBe48MUWX1pccjFY7P' );
define( 'AUTH_SALT', 'nHNzKQeypoyUL71mCyVIJtFeaVJLUa3PgAIbLAh4HDVSduRubrnXVMABgbVtP0DM' );
define( 'SECURE_AUTH_SALT', '3jgmnr14UNBj6SfIvefjPt1YN4GfvhURL44BPgEJfCGeeIJcAKhGEPGxeLrtp113' );
define( 'LOGGED_IN_SALT', 'wmtnHsUfVcSPuf4PFzhxo05zyczoT15rpjwrb2MxDa2Afx2RzehtQ4SLyJjjFazM' );
define( 'NONCE_SALT', '9gAmFnCjWGviu07auWQmf1JvLbTe2aDHxymJJEse3yUKNdw8HA4BFN93bMKoXVfW' );
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');