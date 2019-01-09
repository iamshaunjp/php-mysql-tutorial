<?php 

	$radius = 25;
	$pi = 3.14;

	// basic operators - *, /, +, -, ^

	echo $pi * $radius^2;

	// order of operation (B I D M A S)

	echo 2 * (4 + 5) / 3;

	// increment & decrement operators

	echo $radius++;
	echo $pi--;

	// shorthand operations

	$age = 20;
	$age += 10; // age becomes 30
	$age -= 5; // age becomes 25
	$age *= 2; // age becomes 50

	echo $age;

	// number functions

	echo floor($pi);
	echo ceil($pi);
	echo pi();

?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>

	<p><?php echo $age; ?></p>

</body>
</html>