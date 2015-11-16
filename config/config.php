<?php

$db_name = ""; // name of the database to connect to
$user = ""; // username to mysql
$pass = ""; // password to mysql
$host = ""; // where is mysql located. defaults to localhost if left empty
$url_path = ""; // url of your website
$website_title = ""; // title of your website
$default_controller = ""; // default controller. Leave blank if you don't know.
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
