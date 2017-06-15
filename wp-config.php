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
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'e02;IxxO c<3{0]s?r5<1.#FSUj`I)0,[v+S00t*e`G{[8EX;!pXDM]j*$EiG*U>');
define('SECURE_AUTH_KEY',  'pQJ/esZREgk7+R.%]X}T>l0#3~^_9]3mnJ$Qnx9xb oMNB_[EOFG_R. 0x4f+m_(');
define('LOGGED_IN_KEY',    'QCv-vI,lx{8d9.yQ?a)=2ZSc3^pljf|G({`RHajYYrl=Y!:i( 4lDHQyKDRCE0~6');
define('NONCE_KEY',        'fiSh^tH1;<66?5H<|M?hyX9.(wGZe$Cbgr9u4|~_$7G9O.kKE+fFlXOTiXR:v+2&');
define('AUTH_SALT',        '$D/U8N>nM<Z8(#5?hiX~}=)9N$6_+0Y(`$W2VA(6e$[n2?YTQ|d&k _rX9#sDPE#');
define('SECURE_AUTH_SALT', 'O6)4a$IJS- wtAkOy`6-QSEAWx(SMH!AP[*)<bBJyCQ]buFP<4}%RBF$O]@0h}Xh');
define('LOGGED_IN_SALT',   'GBv&;pqI[vLw&%J1}8zykth09k7v*W4p7V?9fcQd/-jUg6Y1Fk*Mc6pA/n?9Axj3');
define('NONCE_SALT',       'AOfH1UmR!>W:Efhwn6CE[+!!byG=;];gKJ*6wP Twvl4ugZqZ_DT:errt;++_)rb');

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


