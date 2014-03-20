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
define('DB_NAME', 'wp_SydneyRunningTours');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '+aSu:d7Rb0H]fcb$d6s:&WKB4OYbxEf)@~$Y:brP`#8iCQ~8YzxnYLE|od1VggS@');
define('SECURE_AUTH_KEY',  'snd>T>&jj6p{t`/nJ<<pAr1H~%Fm@z7&5/dU2VQe.%_w|!S`f{SU_9URZK]2E. n');
define('LOGGED_IN_KEY',    '%1#;]5~G{>n_?!ddA=3%(RI/wjJVeG;Xqx#X8k0q}(F:S=ytjnjZDpFBaDXsB_z>');
define('NONCE_KEY',        'RYejx gb#Vcg,wJiKR&s5c*;/sv$HO:W$SI0uaXq+W4fjF_+.ND`]4wO.@19-N?!');
define('AUTH_SALT',        '|+0?(Bi}$@@RwuTFz.a3*@o?%>/<(;dEI?B] ?)rF{8eCC#d!g2[22-9C[1`GtEU');
define('SECURE_AUTH_SALT', '8L~o+S++`Eg!$WQ4info V=5J+>HgA/T~}Hk,_A$/?(8ll&DV@1I VfY|vj.4iaW');
define('LOGGED_IN_SALT',   '=[(>OrI#>X3!9;Kh3)/(W;bXXo+?,*^V[(4|q>B^b|K<Sz#O1w(Ie69=h+i]T!}(');
define('NONCE_SALT',       'BE15JavRaOR%:|s3<Hp#h$7p]yhs*q60^rj6prYw&uv<bK_!u#nCFh>c=RA9rKs]');

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
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
