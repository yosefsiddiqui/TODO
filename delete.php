<?php

	require_once 'link.php';

	if(isset($_GET['as'], $_GET['item'])) {
		$as    = $_GET['as'];
		$item  = $_GET['item'];
	}

	$deleteQuery = $db->prepare("
		DELETE FROM items
		WHERE id = :item
		AND user = :user
		");

	$deleteQuery->execute([
		'item' => $item,
		'user' => $_SESSION['user_id']
		]);
	

header('Location: index.php');

?>