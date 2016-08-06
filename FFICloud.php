<html>

	<head>
	<title>FFI cloud</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
	</head>
	<body>
<?php

//DOM parser
include_once('simple_html_dom.php');
//Get plain text after parsing HTML
$plaintext= file_get_html('http://focusinfotech.com/faq/')->plaintext;
//Word frequency
$wordsCount=array_count_values(str_word_count($plaintext, 1));

//Split into sentences
$array = explode(".", $plaintext);
echo "<p>";
	foreach($wordsCount as $word => $count) {
		//For each word from HTML
		echo "<b>Word : ". $word . "</b><br>";
		echo "<b>Sentences :  </b><br><br>";

		//Find and print all sentences 
		for($i=0;$i<count($array);$i++){
			
			if (strpos($array[$i],$word) !== false) {
    			echo $array[$i];
    			echo "<br><br><br><br>";
			}
		}
	}
		

	
	echo "</p>"; 
?>
	</body>
	</html>