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
define( 'DB_NAME', 'wordpresstest' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '@t$LTs`Zg.1[7!=|Qh4rKbU|oio2sZVx2IQFf85k+#xe}bN#trpx)-Y>thq6&N{:' );
define( 'SECURE_AUTH_KEY',  ';P(u!WM5R;t_NVqU|..o.f> p}J:j,2W:W_! ~8//3_yzAE,L2bCU)8C4_3vTWDk' );
define( 'LOGGED_IN_KEY',    'j3J0fQF?IFSK[_Sc:[FtaG(D=Ns)O&:h{_,:viEvUwt0C*EZ-r&,S;Ae+pquf,/w' );
define( 'NONCE_KEY',        'f!L>:NUgCY6.tI($~JV0Qrf9B`9!:XG_oW?T$Qc~aTc/[^zJqZ~6,+)K!y/Q2M}(' );
define( 'AUTH_SALT',        'BLg!M.EdE]|AwPS([+]89l0 fEsXCtM]1?t+/*#whZ,8:&n,BkK[mn/r)@ofoV@)' );
define( 'SECURE_AUTH_SALT', ' wp|+fN,g0w.~=1(,#3V/6~W+QLU=GExNb!jw%)9Sq11v6S=KXZ@RMD%MMZgQ[Q>' );
define( 'LOGGED_IN_SALT',   'C~fd/JxX/QYoLUjl;*p;34p($mo4?o8=Y?,NF.kF7f+$i3tSA(0F$7O3U0xQUNv!' );
define( 'NONCE_SALT',       'WePjcESe?@ro;m.np9o5jkDn>iRASOYBt[8n%xfG*PjE]G|L{X#,eRuBA>PrXo$B' );

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
