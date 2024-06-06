<html>
	<head>
<title>global variable function</title>
	</head>
<body>

<?php
	$bar=5;
	function fun(){
	global $bar;
	$bar=10;
	}
	fun();
	echo $bar;
	

?>
</body>
</html>