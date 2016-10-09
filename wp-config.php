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
define('DB_NAME', 'deals');

/** MySQL database username */
define('DB_USER', 'u843867');

/** MySQL database password */
define('DB_PASSWORD', 'kippercat');

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
define('AUTH_KEY',         'j%srMR3WL39Gy#Om07(m#XmQP]]/o9nC_?wU:*!^s;j{P2KF%1eS(t3u1^g=;Tw%');
define('SECURE_AUTH_KEY',  'Q1!{sPQg *V[[VIHY+K{I5Z=j#2M8a(MH+QQ|a7!~pe `%-O*V{;l_])MwR.J/=O');
define('LOGGED_IN_KEY',    'nsCRLt9m>{N&qU^A +y$cr6V5=8!-XOak?`B8zBK<(K9GIFu8@qde ,H&Ud%Apw+');
define('NONCE_KEY',        '/!gMPwsp;Qs6hVRKM3,?4m0llm!bHr}`MVzT`3.l0`*-pSCklWe8iJ<1lk:[h$OG');
define('AUTH_SALT',        'G]dhxSf`15,vo,BW[R4DMm%5*O{_K*PQO/6M]B`[M {J2SU`V.p7Ir~w2a|w$OSY');
define('SECURE_AUTH_SALT', '3:L9#jN)@q3D+,[MK,8-GVsY; X${&v%zosR(t:ARumk?$sv}7LB<kKZp,x1!FO)');
define('LOGGED_IN_SALT',   'MnAw~i,N4zoE8kj36$@8aRTi}KpMf-L#r?r*qO|[8 y!Oc%.XpqQDC6r|w>9XfwQ');
define('NONCE_SALT',       'JRo6.(p9,-*Ja5Tq+KRi5~H6!Gt=#P mf%K{pu`h~q&+9_%d/)YPUnB!`R8 q6]O');

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
