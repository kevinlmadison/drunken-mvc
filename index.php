<?php // Directory separator is set up here because separators are different on Linux and Windows operating systems 
define('DS', DIRECTORY_SEPARATOR); 
define('ROOT', dirname(__FILE__)); 
$url = $_GET['url'];

require_once(ROOT . DS . 'core' . DS . 'bootstrap.php');
