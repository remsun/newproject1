<?php
if(!fp=fopen($counter_file,"r"))
{
die("Cannot open $counter_file");
fclose($fp);
$counter++;
echo"your-----------";
$fp=$fopen($counter_file,"w");
fwrite($fp,$counter);
fclose($fp);
?>