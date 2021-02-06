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
define( 'DB_NAME', 'rubel' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Qg&gBF7Atb(C]SO!yit%60#mTqY|>eqJ7(,V6^l8q1x-L%gEB]M*RtZ+{=&cCBV&' );
define( 'SECURE_AUTH_KEY',  'EW:Q]HWe?8EJXwl>>?YDKMvvhNvOc%{)s.#2d2_[o&5XQ=rEy}GJ+KUg[vsK Y,j' );
define( 'LOGGED_IN_KEY',    ')?hV>^s|5@S ?s{m<yWYt~TXA30Wbbm;xy-(*kk0c`U0Chy9PD:2_;{P|iF=isA`' );
define( 'NONCE_KEY',        '%DPxl_D?H7Q1Q&*o!zR&|GM&`F?#;h X8MBVnepWiGMzVK,YiSb{7Wy6Mm.Bihnk' );
define( 'AUTH_SALT',        'g+NgEoMM#:)=L}yezU;Y|(<a{ENQ^_P5(@ xeykFcwE0G0jAJQ&rM^2XV9NY#VPY' );
define( 'SECURE_AUTH_SALT', ')(O)<9JQV;4[ODi}=d~bXO<c6Jp^_hCf4t`oqG }QIaLNoxsAxEV]xI+u&a[?HAx' );
define( 'LOGGED_IN_SALT',   'P[2G}]q@@8c(lLn)Ev9!*4ylH{wnm|Y!hXE-XhzeO^-BO^BDcKhn/i2hB}o6KO]O' );
define( 'NONCE_SALT',       'd8Cd2)x6({V#u&wI#A,+-z.,%]ug+FA-c)`oqiq`:%-L0&M|lREr>=&T>f0Jd-1:' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
