<html>
	<head>
<title>returns function</title>
	</head>
<body>

<?php
	function add($a,$b){
	$sum=$a+$b;
	return $sum;
	}
	echo add(7,3);




	if(add(5,7)==12){
	echo "<br/>Yes Your answer is Correct<br/>";
	}
	function add_sub($val1,$val2){
	$add=$val1+$val2;
	$subt=$val1-$val2;	
	$answer=array($add,$subt);
	return $answer;
	}
	$ans_array=add_sub(10,5);
	echo "Addition=".$ans_array[0]."<br/>";
	echo "Subtraction=".$ans_array[1];
?>
</body>
</html>