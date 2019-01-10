<?php 

	// functions

	function sayHello($name = 'shaun', $time = 'morning'){
		echo "Good $time, $name";
	}

	//sayHello();
	//sayHello('mario');
	sayHello('yoshi', 'night');

	function formatProduct($product){
		// echo "{$product['name']} costs £{$product['price']} to buy <br />";
		return "The {$product['name']} costs £{$product['price']} to buy <br />";
	}
	
	//formatProduct(['name' => 'gold star', 'price' => 20]);

	// $formatted = formatProduct(['name' => 'gold star', 'price' => 20]);
	// echo $formatted;

?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>

</body>
</html>