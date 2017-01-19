<?php

	require_once 'link.php';

	$itemsQuery = $db->prepare("
		SELECT id, name
		FROM items
		WHERE user = :user
	");

	$itemsQuery->execute([
		'user' => $_SESSION['user_id']
	]);

	$items = $itemsQuery->rowCount() ? $itemsQuery : [];

?>



<!DOCTYPE html>
<html lang ="en">
	<head>
		<meta charset"UTF-8">
		<title>TODO-List</title>
		
	</head>
	<body>
	
			<h1>Tasks To Do</h1>
			<ul>
						<?php if(!empty($items)): ?>
			<ul class="items">
				<?php foreach($items as $item): ?>
				<li>
					<?php echo ($item['name']); ?>
					<a class="delete-button" href="delete.php?as=delete&item=<?php echo $item['id']; ?>">Delete</a>
					
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
			<?php else: ?>
				<p>*Insert Task Below*</p>
			<?php endif; ?>

			<form action="add.php" method="POST">
				<input type="text" name="name" placeholder="Please add a task"  required>
				<input type="submit" value="Add" class="submit">
			</form>
	</body>
</html>