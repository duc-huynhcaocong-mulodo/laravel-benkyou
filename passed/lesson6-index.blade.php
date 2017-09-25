<!DOCTYPE html>
<html>

<head>

	<title></title>
	
</head>

<body>
	<?php foreach ($tasks as $task): ?>
	<li>
		<a href="tasks/<?php echo $task->id; ?>">
			<?php echo $task->body; ?>
		</a>
	</li>
	<?php endforeach; ?>
</body>

</html>