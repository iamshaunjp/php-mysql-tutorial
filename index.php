<?php 

	define('NAME', 'Yoshi');

	// $name = 'Yoshi';
	$age = 30;

	// $name = 'Mario';
	define('NAME', 'Mario');

?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>

	<h1>User profile page</h1>

	<div><?php echo NAME; ?></div>
	<div><?php echo $age; ?></div>

</body>
</html>