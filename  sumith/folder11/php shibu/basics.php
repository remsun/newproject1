<h1>BASICS OF PHP</h1>
<?php
//numerical array//
echo "welcome";
$a=array ("hai","welcome",1,2,3);
echo $a[0];
echo "<pre>";
		print_r($a);
	echo "</pre>";	

//associative array//
$a=array (1=>"hai","two"=>2,3=>1,"four"=>2);
echo $a[1];
echo $a["four"];
$a=array("herohonda"=>array("splender","passion pro","glamour"),"bajaj"=>array("ct100","discover"));
echo$a["herohonda"][2];
 echo "Hello! world";?> <br/>
<?php print "Hello !! World"; ?>
<?php echo "hello"."World..!" ?>
<?php echo "Hello! world";?>  <br/>
<?php print "Hello !! World"; ?> <br/>
<?php echo "hello"."World..! <br/>";?> 
<?php echo 5+3; ?>
<?php 
		$myvar="The quick brown fox jump over the lazy dog <br/>";
		echo  strtolower($myvar);
?>
<?php 
	$var1=10;
	echo $var1;
?>
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
<?php
	$bool1=true; //this is boolean
	$bool2=false;
	$bool3="true"; //this represent string values
	echo "{$bool1}<br/>{$bool2}</br>{$bool3}<br/>";
?>
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

<?php
	for($count=0;$count<=10;$count++){
	echo $count;	
	if($count==10){
			break;
}	
echo ", ";
	}

	?>
	<?php
	for($count=0;$count<=10;$count+=1){
		if($count==9){
			continue;
}	
echo "{$count}, ";
	}


	?>
	<?php
	$ages=array(4,8,15,16,23,42);

	foreach($ages as $age) {
		echo $age . ",";
	}
	foreach($ages as $position => $age) { 
		echo "<br/>{$position}:{$age} ";
	}
	
	?>
	<?php
	for($count=0;$count<=10;$count+=2){
	echo "{$count}, ";
	}

	?>
	<?php
	$a=5;
	$b=4;
	if ($a>$b) {
	echo "a is larger than b";

	} elseif ($a==$b){
	echo "a equals b";

	}else{
	echo "a is smaller than b";
	}

?>
<?php
	$a=5;
	$b=4;
	$c=3;
	$d=2;
	if (($a>$b)&&($c>$d)) {
	echo "a is larger than b AND c is larger than d<br/> ";

	} if (($a>$b)||($c>$d)){
	echo "a is larger than b OR c is larger than d<br/> ";

	}else{
	echo "neither a is larger than b OR c is larger than d<br/> ";
	}
	if ($a!=$b){
	}
	echo "a is not equal to b";
?>
<?php
	$a=4;
	switch ($a){
case 0;
	echo "Your Number is zero";
	break;
	case 0;
	echo "Your Number is zero";
	break;
case 1;
	echo "Your Number is one";
	break;
case 2;
	echo "Your Number is two";
	break;
case 3;
	echo "Your Number is three";
	break;
default:
	echo "Your Number is no 1,2 and 3";
	break;
}
	?>
	<?php
	$count=0;
	while ($count<=10){
	echo "{$count}, ";
	$count++;
}
	?>
	
<?php
	$count=0;
	while ($count<=10){
	if($count==5){
echo "FIVE, ";
	}else{
	echo "{$count}, ";
	}	
$count++;
}
	?>
	<?php
echo add(5,10);
function add($num1,$num2)
{
return $num1+$num2;
}

?>