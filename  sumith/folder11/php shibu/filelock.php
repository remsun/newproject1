<?php 
	$f = "c:/testdir/test.txt"; 
	 
	$fo = fopen($f, "wb+") or die("cannot open"); 
	 
	if(flock($fo, LOCK_EX)){ 
	  fwrite($fo,"test add a 2 string") or die("cannot write to file"); 
	  flock($fo, LOCK_UN); 
	}else{ 
	  die("Cannot lock file"); 
	} 
	 
	fclose($fo); 
	echo "sucess"; 
	?>