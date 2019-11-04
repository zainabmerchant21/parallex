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
define( 'DB_NAME', 'V0XviIHkq3' );

/** MySQL database username */
define( 'DB_USER', 'V0XviIHkq3' );

/** MySQL database password */
define( 'DB_PASSWORD', '1LFE27kMuy' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         '84/+SU7$4P8^VmV3},#WK.1mq&lI<QMt@8!eJ][A_]%DL1c!3A.8&>*XFv6&(n~b' );
define( 'SECURE_AUTH_KEY',  'xv6E]]F|@Uu},iA!c[l!i{mJa?,AF0PljgS`W>%7&xyxcuYJzd~*qY[E0FVCYr^E' );
define( 'LOGGED_IN_KEY',    'w8O1Y]?+CFbch,c,6~KUI=-A)&gH(cD{: ,^0{77$Q];Ph]!g2e[XhaWCuN>JuE<' );
define( 'NONCE_KEY',        'EEkJpdP< 3$ghUXa18v,wd_<Pa8K:&G3DR4(G J<%R^Cv2U0{:4.T7j3Ft<B^iK,' );
define( 'AUTH_SALT',        'P]9+0:XSFYTVGmQ&,jK^`8P8%r]&`Q|0HtIqK]]LmFPslP(}W>e,$UtQu/nO-4.J' );
define( 'SECURE_AUTH_SALT', 'uQ8+z^VB&@EPc<R0K=/_vVLEp(6xc=L)6S%_;<q{c&!1V5+76s0RSFIc1.WT Mmw' );
define( 'LOGGED_IN_SALT',   '~Y7+l.l+aYWEy:6fT4ciy-&>&k:MBYLp]KJTAd^:oX(lH.YSPF;xdx*<nrZ8C&r=' );
define( 'NONCE_SALT',       'XhTT),{w+?)$vYO)9:&H2AI0$F1re7^:8(LV9r$-KL*qGU9=HF^<K.?1Pk70SN7s' );

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
