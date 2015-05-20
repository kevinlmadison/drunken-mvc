<?php

$db_name = "";
$user = "";
$pass = "";
$host = "";
$url = "";
$title = "";
$default_controller = "";
$debug = TRUE;



/* Change Below At Your Own Risk */
if(empty($default_controller))
    $default_controller = "home";

if(empty($host))
    $host = "localhost";

if(empty($url))
    $url = "127.0.0.1";



define('DEBUG', $debug);
define('DB_NAME', $db_name);
define('DB_USER', $user);
define('DB_PASSWORD', $pass);
define('DB_HOST', $host);
define('PATH', $url_path);
define('WEBSITE_TITLE', $website_title);

define('DEFAULT_CONTROLLER', $default_controller);
