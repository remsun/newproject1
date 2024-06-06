<html>
	<head>
<title>pointers</title>
	</head>
<body>

<?php
	$ages=array(4,8,15,16,23,42);




	
	echo "1:".current ($ages)."<br/>";
	echo "2:".next($ages)."<br/>";
	echo "3:".next($ages)."<br/>";
	//reset
	echo "After reset:".reset($ages)."<br/>";
	while($a=current($ages)){
	echo "{$a}, ";
	next ($ages);
	}
	
	?>
</body>
</html>