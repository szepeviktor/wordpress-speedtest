<?php

define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress' );
define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );
define( 'FS_METHOD', 'direct' );


define( 'USE_MYSQL', false );
define( 'DB_NAME', 'sqlite' );
define( 'DB_CHARSET', 'utf8' );
//define( 'USE_MYSQL', true );
//define( 'DB_FILE', '.ht.sqlite' );
//define( 'DB_DIR', '/ABS/PATH/wp-content/database/' );

// Dummy data for plugins
define( 'DB_USER', 'sqlite' );
define( 'DB_PASSWORD', 'sqlite' );
define( 'DB_HOST', 'sqlite' );
define( 'DB_COLLATE', '' );
$table_prefix = 'sql3_';

/*
    Salts
*/
define('AUTH_KEY',         'Wu>Q-![c4Ucv+E&>rLLF<NL!4N_R}#b1}-UwFt[^#lg1pYyM&t(6uc$b|n t-s~H');
define('SECURE_AUTH_KEY',  ':rYaE-y+^|9b?jkB86[K*A+6eNdNgW9l$-n6K+pcNQJvpkL`/n8Be&^F Tdv4lH6');
define('LOGGED_IN_KEY',    '8{puK|kRUjsw`j,v,}sTy;+Un}c`P=8.SEP2.!LM-)/U_W~LwVvb+eHZn5kStn>|');
define('NONCE_KEY',        'd-Z &SD&uV#i21+hr4DE|1S1;0U?jdi%y_B;f~E6p5=H/89y`|CHA,yeA8&||5l,');
define('AUTH_SALT',        '2==YTdz1v$4X2vh5;HtAp:]UceNwV?TQM|%J|~2SPj ~/+XnBeHS+8|%[-/Lf+lg');
define('SECURE_AUTH_SALT', 'n&?^F>nA(-%ymi`KEIIPkjY&8Ky*[lq6DNVI})jrsWLwcuOEwL|SuZ>:JXz^C)k5');
define('LOGGED_IN_SALT',   'PZRxL|!k_RtO;}q:+Z.=NjEjd% X|R_V+G{8em4ht(MG;E$)G$85YhJ1s A~BMA+');
define('NONCE_SALT',       'TMS9F8V-oksk-<CHm|=0$d1Zb-Md|{cQf0Eme+V+}`/1gA$CDW@Qu9o9VXD+B+7O');


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
