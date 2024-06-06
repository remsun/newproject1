<html>
	<head>
		<title>Array function</title>
	</head>
<body>

<?php
	$age=array(4,8,15,16,23,42);
	echo "Count :   " .count($age)."<br/>";
	echo "Max   :     " .max($age)."<br/>";
	echo "Min   :     " .min($age)."<br/>";
	sort($age);
	echo "<pre>";
		print_r($age);
	rsort($age);
	echo "<pre>";
		print_r($age);
	echo "</pre><br/>";
	
	echo "Implode: :".implode("*",$age)."<br/>";
?>
	
</body>

</html>