<?php
define('FS_METHOD','direct');
$d = $_SERVER['SERVER_NAME'];
$db = $d;
$debug_on = true;
// define('DB_USER', 'root');
// define('DB_PASSWORD', '');
// define('DB_HOST', '127.0.0.1');

// disable revisions
define('WP_POST_REVISIONS', false );

/** The name of the database for WordPress */
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');