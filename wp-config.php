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
define('DB_NAME', 'seo_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'wPdXP&`lU1I3WB&!C#o#c*k`93LXIYv8]ObX]X=qV],rtV23nx~Dz@X|ZGZSW<ba');
define('SECURE_AUTH_KEY',  '$HQ#xLEV5 8F]&{&?PFmmBaq.T`|^c8&cOT@I4WR49,G3Q`1*j.s%Qv}p^MkxRjO');
define('LOGGED_IN_KEY',    '1xKTRT}W/>wvr?@=:&vW!Tg3|AHFS%[%k_AA}%1NeSrC|HvZecz-?M.ge6yoEOKi');
define('NONCE_KEY',        ']firUM@2KfQ]YQMe6_^Rc<jOSU8F^#BkFaJ^`S/ekqP9wb.B)?_A>/Gjo!RE>L((');
define('AUTH_SALT',        '#/4^5g]ES$!]b&XOU;sc~N93iympu/[X&PYFXyF#P+}]pPSs5$-5Lg]F$6?(yOn8');
define('SECURE_AUTH_SALT', 'iqvH4u/!jSoy1uF;{axdVUJ+K.%YBHcYjvxT3?,Y7B3G5Bo~:6,_]{lK?DuK=unF');
define('LOGGED_IN_SALT',   'u@C-TEr9Q#5`d@w$Be_qJ5No`5p&.D:XL);Hq{8k=<=IfAg~5M+:>&OH}sd>0v[E');
define('NONCE_SALT',       'x8$KHr;S(@dYil:=Lc?G]A*JL5*F.d{`RM&hOufjre_ONQt3BE%,.Rr6jMO/Ea8!');

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
