<html>
	<head>
		<title>Array</title>
	</head>
<body>

<?php
	$age=array(4,8,15,16,23,42);
	echo $age[3]."<br/>";
	
	$myArray=array(7,"Apple","ball",array("fox",6,"Orange"));
	echo $myArray[2]."<br/>";
	echo $myArray[3][0]."<br/>";
	
	echo "<pre>";
		print_r($myArray);
	echo "</pre>";	
?>
	
</body>

</html>