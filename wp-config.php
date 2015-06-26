<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'shopifiq');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '=`ew`nshI1=DGD>x;8_8eUq2cm;;wEe4Eya4=,5@x4$.e2=NF?q].L:&$A:a#mHu');
define('SECURE_AUTH_KEY',  'oy:s:s20ov~u&>Ji9 @qv{1+mYu4?{h{%}aaFxwodPT/U909:Atv<f+WsQE/QOV.');
define('LOGGED_IN_KEY',    'CEQ*z[?ETEIX@o5n3] N8m=J1(<o%z-O|IOYG3/}1!#A+Yrp&-W~Ss-%*9qlZ5}K');
define('NONCE_KEY',        '1~,m;yor#k7ObMYql)=)m;b t8[Zlp4Z){ad:aT?F2=t{8G`zJX~104m_0SF?H%1');
define('AUTH_SALT',        'Dr|doOL s4)h6T<1-@|kfs1dTTb5.z-:]UCqG~FaMT2|w.nP8B/=2o}t5as?;+(X');
define('SECURE_AUTH_SALT', '4I7P:=;|{(*w/Np%sG>=[}HY|@C-kb3BI|5Ik!4ni&-jZzQCe=5FS`MFKG+!fK3I');
define('LOGGED_IN_SALT',   '<n8b-=#|n|<N1rT3AEE~.n8H6f`PV|icIET /|P!p!KdpPX1eNy~LK/~IL:8~R?x');
define('NONCE_SALT',       'A|`yx+nM?:-0OW-J|*WpIdk.o:#>I2mo<XpUk++Hz|2%K_d#+QV,_F,u Bb-fICb');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
