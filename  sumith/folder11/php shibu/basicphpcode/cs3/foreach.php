<html>
	<head>
<title>for each</title>
	</head>
<body>

<?php
	$ages=array(4,8,15,16,23,42);

	foreach($ages as $age) {
		echo $age . ",";
	}
	foreach($ages as $position => $age) { 
		echo "<br/>{$position}:{$age} ";
	}
	
	?>
</body>
</html>