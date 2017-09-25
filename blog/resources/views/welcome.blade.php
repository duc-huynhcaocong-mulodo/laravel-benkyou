<!DOCTYPE html>
<html>

<head>

	<title></title>
	
</head>

<body>
	<!--<h1>Hello --> <?php //echo $name; 
	foreach ($tasks as $task): ?>
		<li><?= $task->body; ?> </li>
	<?php endforeach; ?>
	<!--</h1> -->
	
</body>

</html>