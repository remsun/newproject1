<html>
	<head>
<title>q2</title>
	</head>
<body>

<?php
	$var1="2 box";
	$var2=4;
	echo $var1+$var2;
	echo "<br/>";
	echo gettype($var1);
	echo "<br/>";
	echo $var1;
	echo "<br/>";
	echo gettype($var2);
	settype($var1,"integer");
	echo "<br/>";
	echo gettype($var1);
	echo "<br/>";
	echo $var1;
		
?>
</body>
</html>