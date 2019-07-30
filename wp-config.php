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
 define('WP_HOME','http://localhost:8888/mmcg_wordpress');
 define('WP_SITEURL','http://localhost:8888/mmcg_wordpress');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mmc' );

/** MySQL database username */
define( 'DB_USER', 'myhost' );

/** MySQL database password */
define( 'DB_PASSWORD', 'kotletos' );

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
define( 'AUTH_KEY',         'ivgr|RCMh>JI9-*Zb2V~BdcE%L%0!e]YPX-(Uo{<H%z@u<%|ft{kqBw<? XO#&:2' );
define( 'SECURE_AUTH_KEY',  '?8`z~e$;H+Q6M9`[x>wJzg-(qmqI`I(qc#.D*)p9a(@AZ;xus`<(R&,H-7[T48tQ' );
define( 'LOGGED_IN_KEY',    'D-H1#Zl;w`1&a.~7:oV:YZ10+&MJ^ZlJrx:R*HOl5AAE*XYog7(p@Cj}iD<r`z6:' );
define( 'NONCE_KEY',        'stgYvBXu7KZ3;Ow`];tT.PD?9cXv,xmyA4n _:6GEPIHdwF?/=d;X3_+#iEjXKFr' );
define( 'AUTH_SALT',        '&no__).``u{UX$T9+30~zUMpu0ESWXZ?q(o5ZH}E?[rjG$EA,saeV*8,Kj:.@V32' );
define( 'SECURE_AUTH_SALT', '[U|Un6m-!Y~V@?HsMWAZW/At^by[1aa@0hKt+]2@bs$9zqk;,-vWmHRl:^#s+V[ ' );
define( 'LOGGED_IN_SALT',   ']-ExFT-]a!QMvea>Pp&qM6HF.6q)|>~zgHi<ol8?Y u^jRr{{7J:i~n#|h`|@T!>' );
define( 'NONCE_SALT',       '9smv 8}]?0X{Ug3_yUp[R,Ow|Mkmo=#aI3?tn%T4I`/!V<EGof=iQ5Ks&UQ4u)@=' );

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
