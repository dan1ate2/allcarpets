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
define('DB_NAME', 'allcarpets');

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
define('AUTH_KEY',         ')FQM?we*>}.Mg*nOkX|JwKP]-e<Sc-DhQQKjP4^lnY3BsB,?y431fsxd;o<&?Kmp');
define('SECURE_AUTH_KEY',  'z+KPo|KS`_}jp>Wg_89fZRX1KsE,6iNu4Bq:6|])wkj*qelhjH;F?)BP4Lme^emd');
define('LOGGED_IN_KEY',    '%/?W^|{jW9WuS5hkc{T-M:Q6#`6ZL~]woE`2Uu1/L;bPWY]P~%#@1Gfe+u/0a;=j');
define('NONCE_KEY',        'HoqLlWnLm%sD<[yRSc<  bW6|7m.NjHQkc4O!G{h:M%-=#c^kw4g>L:/LIa-kS`R');
define('AUTH_SALT',        '+cn[d@:`y`[,CfXXDj=Z2w7dPC_7VT/Z!a[jf8R#_#R|:uUHoO LmIGiB#g^i;NY');
define('SECURE_AUTH_SALT', '[/wi|p$/n1=<HGk={cB){3>2SAy*Wp!JxsF-)=%#bsisiO7( :1gi$DfOX|LQH| ');
define('LOGGED_IN_SALT',   'Rxy|VK 8hy/.}%Aw4^7W L{r@rQ>0aqSl;eKeQ8w%*~N.~X!tShBhdH!SK((pZnZ');
define('NONCE_SALT',       'd%(zpCag}VOV|d17.r2MarK`1`W}gr_wb@)x?h,=^MR#[.Q,4@q`wEZrS#_E*)nE');

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
