<?php

error_reporting(E_ALL);
ini_set('display_errors','On');

define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"] . "/");
session_start();

define('DB_SERVER', 'localhost:8889');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'manage');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

?>
