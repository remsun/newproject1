<html>

<head>

<title> string function </title>

</head>

<body>

<?php 
		$myVar="The quick brown fox jump over the lazy dog";
	
	echo  strtolower($myVar)."<br/>";
	
	echo  strtoupper($myVar)."<br/>";
	
	echo  ucfirst($myVar)."<br/>";

	echo  ucwords($myVar)."<br/>";
	
	echo strlen($myVar)."<br/>";
	
	echo strstr($myVar,"fox")."<br/>";
	
	echo  str_replace("quick","super-facr",$myVar)
?>
</body>

</html>
