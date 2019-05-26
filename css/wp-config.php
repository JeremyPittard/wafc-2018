<?php

define( 'WP_CONTENT_DIR', '/home/whitfordafccom/staging.whitfordafc.com.au/backoffice' ); // Do not remove. Removing this line could break your site. Added by Security > Settings > Change Content Directory.
define( 'WP_CONTENT_URL', 'http://staging.whitfordafc.com.au/backoffice' ); // Do not remove. Removing this line could break your site. Added by Security > Settings > Change Content Directory.

define( 'WP_CONTENT_DIR', '/home/whitfordafccom/staging.whitfordafc.com.au/back-office' ); // Do not remove. Removing this line could break your site. Added by Security > Settings > Change Content Directory.
define( 'WP_CONTENT_URL', 'http://staging.whitfordafc.com.au/back-office' ); // Do not remove. Removing this line could break your site. Added by Security > Settings > Change Content Directory.

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define('DB_NAME', 'whitfordafccom_stagingsite');

/** MySQL database username */
define('DB_USER', 'whitfordafccom_stagingsite');

/** MySQL database password */
define('DB_PASSWORD', 'stagingsite!');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define( 'WP_CACHE', false );



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(z=HF(zJFB0_S<fH%vgiURl}Q:YB?vn7d%>@pj ;wRO2Fos0R2yMvzcQ,Ng6{4!Y');
define('SECURE_AUTH_KEY',  '^w=;xX J>miCr^a!S3N%|`{B7JxjktT#_D%<`E*J<q(m50kK)&9/e)ZrBG[)i{%C');
define('LOGGED_IN_KEY',    'Z:)B0+jMV<Yx@kea/utCyqunrC UL>x?IG+glG`D6:`3jIFM.=ppb6D,7#D>HCFE');
define('NONCE_KEY',        ']<~LDmH*8Fo`%;UHg*>gck&kagxHX)ticB_h0BbunK >RF=I:T3ZD#o}HIX>r9K!');
define('AUTH_SALT',        'No& [ *x+]0&IB<|4}DqvWoPvKo+XRT*ktY^m`tI4S^/o$x0Z3_I_J|(lal``Bgq');
define('SECURE_AUTH_SALT', '~{g;NF`A4{!5QCtBy5r#:0 kefDj>e-b-t pINE-7f1)9EYD6dV*>_{nwPgYe_?|');
define('LOGGED_IN_SALT',   '`KQV^R$E*O8t{)>%wH]Q,Sq63HCS=c~]q(;*:QlM3MCig}E[[Z:?%b<*%@QVh,V.');
define('NONCE_SALT',       '#DF!Q9bcWy) #>obUAL_5a:k%2|SxNPG}P?b!97$9~$mSJ0Czn)-#a Vw>B?(EO9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'war_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
