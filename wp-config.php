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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'worpress1' );

/** MySQL database username */
define( 'DB_USER', 'opuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Opdemy@311' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '|~:AYGguz3b:Om!1X|E]4k=3U0|C^.k1F`{A{9|#.u77wJhlz%]sb/hCr9 ,vTU}');
define('SECURE_AUTH_KEY',  '^o^vH);$+9pm{y{jNq;^l>N69UDl&K/u53g,{DOObcz|q:<x`1^DQfxtG1w8-*0 ');
define('LOGGED_IN_KEY',    'bJf7AWnm_.Yv/SAPVW*~:(o)1AB-lzjd%-E,$w:?cOn=R?3}.<a-frga-&],V](u');
define('NONCE_KEY',        '(k|E!5xFhiSuW4<0]R4O3e7rU8ikZLS9mx>,jj,mE]t?]_c+[]cVONl^ ^j5b/mg');
define('AUTH_SALT',        'DCNRRn<-+IyszQ75#a>)zo<xXX4Ah[WZwN{y5c@s^XpJ$nL@5SmRc_|t5n9%-+u*');
define('SECURE_AUTH_SALT', ' Px`:,M&lngX-S#T](&!qgRS60-&SVq^Ij4_}Io(M:][e/dDXii-!1OMgaZ(.)E6');
define('LOGGED_IN_SALT',   '8<(|xRs>*b<Hn_>s2<AAXRnV4vP8z~zhA;#32K&xK/Gr$b{pg`dEodn1d-Sl6q[P');
define('NONCE_SALT',       'OTlp*lGyM3y&KOY]LO-=LI=UFbC#ZAuS{mP&6/Q|<)n&%K}R2!]}X6xQ~O/:t#i|');
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
