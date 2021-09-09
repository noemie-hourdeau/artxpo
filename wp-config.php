<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'projet-expo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'QFk*2c#Sl<3By4:(#Q+G!k|j6uojM[79lr_ C+n%U8uV*gqZ]EK6j_H(4J:iT?Z+' );
define( 'SECURE_AUTH_KEY',  '8.NG*D{B,@iSQCB==Qow*_M8i0@~xfk,7BS}6c2I2ACq@*Ub5@eU+4A5#-fj*T?h' );
define( 'LOGGED_IN_KEY',    '/oMP-BR$|ds]lr!Quc`^*fE $Sm9J,6~]*+1Z&c.m)lX?^ppuezSFgNY<|9oqR@J' );
define( 'NONCE_KEY',        'ZbwRn4y2Phk_.t86$o<!f!o^!?R>W5AcL!y^@5BV+n~G{C+W*2eG}o<!hb0Ck34p' );
define( 'AUTH_SALT',        'PcpWbzNhAVIb3aA,_m(q<I^5-J]93I(LC5{QMQV7qa 6QBlwrg3NndD{d{VGV3pM' );
define( 'SECURE_AUTH_SALT', '2DA.tJcI2`q)8J+}[%X?q)uslsE2ZvSD+ZJb(2alKRu9tmGh(,}]2G62dAs~zX/I' );
define( 'LOGGED_IN_SALT',   'h)=t:Y8@ovju9 q$QhBKxYdv|ev)fDYi`%.q6%.X^N2C~Vn#Q{>lp5]l]c<29PjG' );
define( 'NONCE_SALT',       '_qMSO8>DDlOSPk,{>;(==@)8+wg2FDu( Fw^9dikBa!imIp#CXRNS+QLuq]olh!0' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
