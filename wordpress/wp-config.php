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
define( 'DB_NAME', 'Testsite' );

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
define( 'AUTH_KEY',         'fQ5],B{EJrrw#p=0vp0{xbcA|s>U_l8g5~MPXz` USQ.jTc2A]?M7(^<QP.X?)^5' );
define( 'SECURE_AUTH_KEY',  'Kr0[oJ^Z8,#hh}>o}UD9%6&QaF6<-t*LLK{UC<QX.0*5^M5~$e/5on4V*xcb<=HV' );
define( 'LOGGED_IN_KEY',    '<8k6+~GwF2T<xm^)~N/@.38Z&+$+d61|GIh+(@xQ(VGw&WDd90&!:U1AE`6Pd{dD' );
define( 'NONCE_KEY',        'WHPdLMu)bYnbp~K]gch.CIq=O>lZMf5%a(>Bu?bPAr>Z`g(/k3>wVtRvzBae4=,3' );
define( 'AUTH_SALT',        ']{:YN[5><DtRLjC!EW1Zi:kjT>:[M_g5~-L[l;7FNxX0 [_^S]>+k!{<~!q&4_(,' );
define( 'SECURE_AUTH_SALT', '~t]&FQ=XPw9lgCRA(^Ra+ujEIK,+JAz*}lOa`k/?^pC0[Nb[bn{}smW@RWl&Q}1i' );
define( 'LOGGED_IN_SALT',   '(Z2UVVQ?5n#E[9D?f1kM%ZKj!Cmz&#z+6J($vY2{998oV+c,gCCKKwbjd&-J-=:t' );
define( 'NONCE_SALT',       'xAq9&(8;*~eIc<fDQfZy4C}nQRh5zHyTro_/dcl.^ZW]4_(P=5^Hq`O w;3pwZ--' );

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
