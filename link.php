<?php

	$dbHost = 'localhost'; $dbName = 'yosef database'; $dbUsername = 'root'; $dbPassword = '';
	session_start();

	$_SESSION['user_id'] = 1;
	
	if(!isset($_SESSION['user_id'])) {

		die('Please sign in');

	}

	$db = new PDO('mysql:host=' . $dbHost . ';dbname=' . $dbName . '', $dbUsername, $dbPassword);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

	

?>