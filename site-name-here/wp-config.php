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
define( 'DB_NAME', 'test66' );

/** MySQL database username */
define( 'DB_USER', 'selected-user' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '3y5]BQew@Lrvl5LqWCxU_p.>:>`d{P%0R{x{!Hu{>g2d4z/jI|U/=3q~$C.dsP34' );
define( 'SECURE_AUTH_KEY',   'fU79F7uN.>89G06vsEYZhJyvf``G39JHAihNbVv3^CjljiE3;B2:T,%{/XZ#)bz#' );
define( 'LOGGED_IN_KEY',     'g%:DfoTu-uhP+Ye2B|sOkA2Ed?^FLfT_39nUA38#C&}kVg .{eMXh/NqfzT[j?hp' );
define( 'NONCE_KEY',         '9!p6~XJ{5=q^k&<Jdm4/N@%9Ho.iwz5gvO#lx>_3)<H^c_8^!HEpW<QJ~W~PJaqL' );
define( 'AUTH_SALT',         'D?HKZ#4G3b9n!AT,lNlkSaO)WKDXgdz4zNS?Ru`:RU=8t1Q3fFr]5Ag-ExS>T>_*' );
define( 'SECURE_AUTH_SALT',  'k$nX,GfI!b*f0>4{`&r}l=@R4:MLBdmj_0H@<{J3OWz}1*KDg&>nD3;L):63A_#P' );
define( 'LOGGED_IN_SALT',    '~*5Y<U31&89F7$WcDx]eZTKc<AHb}wf00/H}|v6S1 ?%a+1?Nr4o2&p*M+iz=+a&' );
define( 'NONCE_SALT',        'wvnEmN%{B%pYB;iI]pae[|1y4J_k%g{(h#4}7JP=D{^G/0%8tCz!%${;*aJPyEp4' );
define( 'WP_CACHE_KEY_SALT', 'rV1ZfAr~nCIoHS^fz3dXC*HIC,:8fhL.wT]@f$hJj#wvPBdSw-I::JTs/0]2^?ad' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
