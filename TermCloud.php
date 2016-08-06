<html>

	<head>
	<title>Term cloud</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
	</head>
	<body>
<?php
include_once('simple_html_dom.php');

$plaintext= file_get_html('http://focusinfotech.com/faq/')->plaintext;
//Split into words
$array = explode(" ", $plaintext);

$new =array();
$wordsCount=array();
//Chunk 2 words into 1 
for($i=0;$i<count($array)-1;$i++){
	$new[$i]=$array[$i]." ".$array[$i+1];
	if(!array_key_exists($new[$i],$wordsCount) ){
		$wordsCount[$new[$i]]=1;
	}
	else{
		$wordsCount[$new[$i]]+=1;
	}
}

//Find word frequency

	
	
echo "<p>";
$i=1;
		//Build tag cloud
		foreach($wordsCount as $word => $count) {
			if($i%2!=0){
			echo '<span class="'."a".$count.'">';
			}
			echo $word;
			if($i%2!=0){
				echo '</span>  ';
			}

			$i++;
			
		}
	echo "</p>"; 
?>
	</body>
	</html>