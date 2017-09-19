<?php
include "connection.php";

if(isset($_POST["email"])){
	$subscriptions = $client->php_mongo_app->subscriptions;

	$emailsData = array(
		array(
			'email' => $_POST["email"],
			'active' => "1"
		)
	);
	// To insert a dict, use the insert method.
	$subscriptions->insertMany($emailsData);
		header('Location: http://localhost:8080/php_mongo_app/index.php?message=thanks');
}else{	
	header('Location: http://localhost:8080/php_mongo_app/');
}

?>