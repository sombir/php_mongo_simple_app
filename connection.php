<?php
require_once __DIR__ . "/vendor/autoload.php";
/**
    User name : admin
    Password : admin
    MongoDB host : localhost
    MongoDB port : 27017
    Database : php_mongo_app
*/
 
$server = "mongodb://admin/admin@localhost:27017/php_mongo_app";
 
$client = new MongoDB\Client();

?>