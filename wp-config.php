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

define('FS_METHOD','direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'odyssey_domains');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'zrx185196!');

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
define('AUTH_KEY',         '{![GDk]gwXAPKFZfKmz-O[w#K6^wLI]c.>A79s.VT1o(Y}![gwncN4g/P_wLnEVh');
define('SECURE_AUTH_KEY',  'C!D,rKs;j%yK<5$brjpQ+t 8C&h);y7QARV1+=-o8U%Dl+oaoSsjZe5l:3U?A!+&');
define('LOGGED_IN_KEY',    '0e5~GK:ye$BZ+.op,P=9>u0F_PSRp>r-t460c+6gJCc~0>;X6ycqd;tdVQ!_pd+h');
define('NONCE_KEY',        '}/ Y q+#k1Ed+lv[`dzlL<AE(+hJIkGyUG2.R$QHZdz`B-`Y!A@xKVt+1T0QVSje');
define('AUTH_SALT',        'u{ZaUdfY`Xu$<>g7B`SV>fhdu6OR;L7u=;z0|Si<FTQirwH^#,};G*`i]#c}rnh^');
define('SECURE_AUTH_SALT', '.jv+,|*Y7BN[ZM6Ia9:[f+f0kN5!b#u_-k-LLx9YW(+mpwt7^An+~jfDNiacINUA');
define('LOGGED_IN_SALT',   'SZ)Aw@ZSQm5EM{eU:XJrp<Ww` qiU z3PPIT$<1gj%6FW(:w+]tS:nS8>IF1_S3E');
define('NONCE_SALT',       'Qy*Q#a4? <@CU|9|}0rEmL#dh`]E*S~(,i$O*,y4~:Gr/&FZ}A7vv;TK+@>QK:u|');

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
