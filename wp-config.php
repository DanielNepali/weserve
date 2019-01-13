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
define('DB_NAME', 'weserve_db');

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
define('AUTH_KEY',         '0@e/RN0d@S/i9A(l}fl&UV}GoXgE`U~ANu.}AcEO@wIaPUK~/iGz*x=rBoBlK@Ta');
define('SECURE_AUTH_KEY',  '3<Kl8q_lT UTqn%JSuM#{tn,+^L^n5dq$K~U5-tDo2D/bN_=Gr8>ZKU`k64avL%&');
define('LOGGED_IN_KEY',    '+p?{3~t;xbC;.Gj-5l5WoEm#DyP.rn.eo|;Y8dh+%w<SK~1,EW/]?$^PicSY=Ewq');
define('NONCE_KEY',        '&Po#^1R QfKr=n?Xaodd8~zn<![=`bB+yI|MQ)Z2oI%=1O`$5,d$Pkw2>70c%fIg');
define('AUTH_SALT',        'FA`QnWNvXFuQNXd60a``2f]p$a:Dn^Xbh%uKolZVm;-5ds:7I2^w?t^66#P6]_zA');
define('SECURE_AUTH_SALT', '.hXBye1e_+to9=1PF:5g-]w2h^`}a=ODq=Ady]!LN9]QxAo,s@Rl-0bmCf/HgvX6');
define('LOGGED_IN_SALT',   'UsFL]}s~S-[~%J}*Q>9.l96oW}U%z=|xpyH]N=tU$+O=._B!qgOiAv9 ]+[t3@rk');
define('NONCE_SALT',       'FD$3+Ks:,C3}1wI)bQ3s$k,Kaa@pC-I-yW_y5~K!-b[xnB6zfa<)eT:I&4@8ZCfo');

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
