<?php 

	$stringOne = 'my email is ';
	$stringTwo = 'mario123@thenetninja.co.uk';

	echo $stringOne.$stringTwo;

	$name = 'mario';

	// concatenation
	echo 'Hey, my name is '.$name;

	// variable interpolation
	echo "Hey, my name is $name"; 

	// escaping characters
	echo "the ninja screamed \"whaaa\"";
	echo 'the ninja scream "whaaa"';

	// get single characters
	echo $name[1];

	// string functions
	echo strlen($name);
	echo strtoupper($name);
	echo strtolower($name);
	echo str_replace('m', 'w', $name);

?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>

	<p><?php echo $name; ?></p>

</body>
</html>