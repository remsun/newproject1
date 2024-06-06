<html>
	<head>
		<title>Floating numbers</title>
	</head>
<body>

<?php
	echo $myfloat=4/3; ?> 
    Round: <?php echo round($myfloat,2); ?><br/>
    Ceiling: <?php echo ceil($myfloat); ?> <br/> //round up
    Floor: <?php echo floor($myfloat); ?> <br/> //round down
    
    Absolute: <?php echo abs(0-250); ?><br/>
	Expnential: <?php echo pow(2,8); ?><br/>
    Square root: <?php echo sqrt(100); ?><br/>
    Modulo: <?php echo fmod(20,7); ?><br/>
    Random(any): <?php echo rand();; ?><br/>
    Random(mini,max) <?php echo rand(1,10); ?><br/> 
</body>

</html>