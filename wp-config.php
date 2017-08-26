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
define('DB_NAME', 'mobiliariosfamarsa');

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
define('AUTH_KEY',         '^Ri<znvOnvFQ8Y+y5 MLR(}HN)ZGX@;o1}UL75JB?ZY`uK>e(OhXk]jkcK4ZY+Ww');
define('SECURE_AUTH_KEY',  'hC~HV>?!Jn48)_A5 :Nj)Pwgl!],u,z&4I{cWN@iP@|7[-oarubDRC@QYhFzIVhY');
define('LOGGED_IN_KEY',    '^ujl=E0*/Q|8[1+Y6e,obplDBZgU}iV%x?<8UMO[_)zhV28lqs]73r)__p~r/G3!');
define('NONCE_KEY',        '$a#a:1G8~!6y,9nb ;QqWLq(uV[T@d<G,]L*WK=*:ra!SRXY|~TD)_]xu--swUzX');
define('AUTH_SALT',        'L/xKFC+@vm3 U&W9uAQT7`D@(8sBR.1|o& BVyZNCD^_X^->H6j`SaT73u.{O6.3');
define('SECURE_AUTH_SALT', '=a}sEi=];Jun;c- 0MAT7mmjg>2Q|ht4j,|N$n|V(X[^nk.?G)Hnl[lCoaG`er9T');
define('LOGGED_IN_SALT',   '|Dom0,76tn`Z%A=~(71 +Ymxk7O41Tek!`zCCXZcg Tg1|0s<E`o,:8T$,Y/woeA');
define('NONCE_SALT',       'U{j.zj@Wd:B`QVs m=cE8Ln->yU9tk.Wj,;$-w@G?RR&JH.d$uJ)$v@RgjE;7zv!');

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
