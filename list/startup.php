<?php

// define our database connection
define('DB_SERVER', 'localhost'); 
define('DB_DATABASE', 'Permaculture');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_PORT', 3306);

// get our user
$user = $_SERVER["REMOTE_USER"];
define("USER", "$user");

// time zone fix
putenv("TZ=US/Eastern");

?>
