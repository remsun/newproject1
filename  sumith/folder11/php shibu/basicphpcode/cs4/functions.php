<html>
	<head>
<title>functions</title>
	</head>
<body>

<?php
	function my_function(){
	echo "Hello.!";
	echo "<br/>";
	}
	my_function();

	function my_fun($word){
		$d=8;
	echo "Hello..{$word}";
	echo "<br/>";

	}
	my_fun("World");
	my_fun("Everyone");
	$name="mathisugan";
	my_fun($name);
	
	?>

<?php

function show($d,$e){

echo $d+$e;

}
$a=5;
$b=6;

show($a,$b);




?>







</body>
</html>