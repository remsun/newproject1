<html>
	<head>
		<title>Constant</title>
	</head>
<body>

		<?php
		
	$max_value=1000; //this is varibale
	
	define("MAX_VALUE",900);
	
	echo "{$max_value}<br/>";
	echo MAX_VALUE;
	$max_value++;
	echo "<br/>{$max_value}<br/>";
	//MAX_VALUE++;
	echo MAX_VALUE;
	
		?>
	
</body>

</html>