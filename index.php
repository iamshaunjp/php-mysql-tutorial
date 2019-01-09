<?php 

	// multidimensional array

	$blogs = [
		['title' => 'mario party', 'author' => 'mario', 'content' => 'lorem'],
		['title' => 'mariokart cheats', 'author' => 'toad', 'content' => 'lorem'],
		['title' => 'zelda hidden chests', 'author' => 'link', 'content' => 'lorem']
	];

	//print_r($blogs);
	//print_r($blogs[2]);
	//echo $blogs[1]['title'];
	//echo count($blogs);

	$blogs[] = ['title' => 'castle party', 'author' => 'peach', 'content' => 'lorem'];
	//print_r($blogs);

	$popped = array_pop($blogs);
	//print_r($popped);


?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>

	<p></p>

</body>
</html>