<html>

	<head>
	<title>Word Cloud</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
	</head>
	<body>
	<?php

	

	// Read line by line until end of file
	$filecontent = file_get_contents('output.txt');

	$words = preg_split('/[\s]+/', $filecontent, -1, PREG_SPLIT_NO_EMPTY);
	echo "<p>";
	for($i=0;$i<count($words);$i=$i+2){
		$count=$words[$i+1];
		echo '<span class="'."a".$count.'">';
		echo $words[$i];
		echo "   ";
		echo "</span>";

	}
	echo "</p>"; 

	?>

	</body>
	</html>