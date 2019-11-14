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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'p9LLSe1Xo95F1eebr45w7RfjbMbaP8GGLNVisaEsTyy92pgmS9BQrj3y7cTZdHVQH01hwXZfSq9RTmOE3o6q7w==');
define('SECURE_AUTH_KEY',  'qkqd+afvzrBmNyPQIjVhsmPIEw1seXWgTcUFixqRHmE0N47Oc3noNnxHmJ+ek4H2dWzo6znmn9/HISJ/WjVwOA==');
define('LOGGED_IN_KEY',    'ICiV+MofHV9V/D9g9kSZysSwTi+oTTGsnrFQ/q4jpmJSZRMO548RGFzfzQnI0IN2U0iDzKk+NHXPFV4SOEE/yQ==');
define('NONCE_KEY',        'Ypqire9y/Qax8T6mWggnGV7oBnqUwC/1jpjupVzm23/dN5AOF418UqUIpmr3K5S3stIGV/mVFsCs7lg+OinskA==');
define('AUTH_SALT',        'cBae+FlQ9Ww6pk6HYdzqPlliZgO7Tp3eErr96mEORaBMIa+bTVxVB4gWRHrNp2a9VcKu3d2f60JefeM/voekBg==');
define('SECURE_AUTH_SALT', '4GTKeXHVsCTToIos5P/qHOXCcpHP5n7ZsuS77c1jQ2nKEab4BYvhrw0vBMXa5y21LXVWCd5svTnEPsDCBocoDw==');
define('LOGGED_IN_SALT',   'LRk00HY7UkrMzVcG9LBzyDBVpKGsupIQk4gphKBX7H4oTwOyMyOceksDJYGoXuSWOG4snptuyIGg5JBpy22pHg==');
define('NONCE_SALT',       'OhNnQffQSfQCHWMit8Xwj2rcTrpeZnpHj6tN3vgIJf7XUseMgVxOKh6voenJo1sJsqhy/Bc5p+RrB+RReWkB8A==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
