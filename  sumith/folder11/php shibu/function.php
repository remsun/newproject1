<?php
	$a=5;
	function fun(){
	global $a;
	}
	fun($a=10);
	echo $a;
	

?>