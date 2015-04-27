<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'puntoog');

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
define('AUTH_KEY',         'FypLfK3H.K-h*tvqvGSSQjf9+%z|>!9#4?8^8Ry9;PERB8DIT(n-E^SZ|SXkb;gG');
define('SECURE_AUTH_KEY',  'V3cz+>)?&YYfai.Z!yHIZzov^(aU+,_l)-Q`CCiK:!g[JB1MeR9e2BIrvd.^y1Qp');
define('LOGGED_IN_KEY',    '|irHBz_9@@w1 QiIY0oHBpbxT!GZeniajEFO2XaLs|T!zi|Btw:#W=E;$L1md6rH');
define('NONCE_KEY',        '80HgaJQE?S~P11H]BEl8{V#j^@D|@eFs+}fa]FR)y0~!%.n$bJ f$.0!||Xu>5ON');
define('AUTH_SALT',        'Sfy`|+-(/+6VQ]0>WTI@-r;[)166_w4=bq]Y9mA:Fm&cHx-6YgiF|;b~@CO1Jjz-');
define('SECURE_AUTH_SALT', 'uMgN(^!6SK+7T^K0V=[sEbB:goLJjss(vZ~GqA|x[^#hdgy-~i!8p)Sq6R-[IkK|');
define('LOGGED_IN_SALT',   'f(`y-mjF!C/||[!-42rpZ<B$w^lXO:sb{BzGy6=V$AKrUo>fpxa(ocNTGd^[ 4|T');
define('NONCE_SALT',       'hKHPz@nG/}st}kHGpF=0%auJ3y-$+q-MWV[qra!3]2EBC[,+Ao>rLv #/AkeK4),');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
