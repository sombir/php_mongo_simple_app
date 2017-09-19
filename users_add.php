<?php
include "connection.php";

$userData = array(
    array(
        'first_name' => 'Sombir', 
        'last_nmae' => 'Singh',
        'username' => 'sombir', 
        'email' => "sombir@gmail.com",
        'password' => "123",
        'active' => "1"
    )
);
$users = $client->php_mongo_app->users;

// To insert a dict, use the insert method.
$users->insertMany($userData);

?>