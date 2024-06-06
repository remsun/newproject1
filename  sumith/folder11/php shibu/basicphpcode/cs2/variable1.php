<html>
	<head>
		<title>variable add</title>
	</head>
<body>

<?php
	$var1=4;
	$var2=6;
	echo (1+2+($var1*$var2)/3-5); echo "<br/>";
?>
	+= <?php echo $var1 +=6; ?> <br/>
	-= <?php echo $var1 -=4; ?> <br/>
	*= <?php echo $var1 *=3; ?> <br/>
	/= <?php echo $var1 /=2; ?> <br/>
	
	Increment <?php $var2++; echo $var2; ?> <br/> 
	Decrement <?php $var2--; echo $var2; ?> <br/>

</body>

</html>