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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hippo' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '2tt.e55D0p_16=g)}ZJL`&0g`/GGkia_D`7Kfb@p>H+wL$Xjn}Ro|KN^wbr4t>~h' );
define( 'SECURE_AUTH_KEY',  'PGD}1S#c>P,qxZq?L/l8v6Xh-(QiOg!8!Y)3nn}pR!sMK6_  ]DYZK.<M?6DyiA<' );
define( 'LOGGED_IN_KEY',    'y)_LfI`%>}Kq`bbb<p(J_%pl#u@z 4L`U==Mxk7FT-vG>|K,>E+7H._tms1+v5Q+' );
define( 'NONCE_KEY',        '6t:Syk2CCDdYH7xmm1s*`CP X|L!R{Zhv_!xQX Z7Lu4/&0B`1JEm5#DDoHf=q:3' );
define( 'AUTH_SALT',        ']o :ii%7Sam_#hY1,ZT>1Ly#NKdP83f%`]:=8xjWm<7dE/ai6CzQL n,v/DiA+RF' );
define( 'SECURE_AUTH_SALT', 'KFA3t(V2jO pJ$nqx3TU+qnKeF_042Qb}:NJZ#^Et,D4V6t,7Q`UR:WbcM&H$MPu' );
define( 'LOGGED_IN_SALT',   'qBiw~{~Wu|$s;QxhM~|8;_eB+qHa,_K{HnB|y1)88{ub9G{P()cOA-6Nv76/+c0Q' );
define( 'NONCE_SALT',       '&g7@CEG-;Kw{<Jl;Ft@dC^M}*2]9$Zf9r{ZREfFZwlSnMmV&0[r `!zg]3PjjsM6' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
