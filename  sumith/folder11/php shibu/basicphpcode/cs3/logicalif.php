<html>
	<head>
<title>if else with AND or NOT</title>
	</head>
<body>

<?php
	$a=5;
	$b=4;
	$c=3;
	$d=2;
	if (($a>$b)&&($c>$d)) {
	echo "a is larger than b AND c is larger than d<br/> ";

	} if (($a>$b)||($c>$d)){
	echo "a is larger than b OR c is larger than d<br/> ";

	}else{
	echo "neither a is larger than b OR c is larger than d<br/> ";
	}
	if ($a!=$b){
	}
	echo "a is not equal to b";
?>