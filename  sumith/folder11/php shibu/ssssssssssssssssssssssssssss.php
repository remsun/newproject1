<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
for($i=1;$i<=4;$i++)
{
	for($j=1;$j<=4;$j++){
	if($j<$i)
	{
		echo "&nbsp;";
	}
	else
	{
		echo $j;
	}
	
	}
	echo "<br />";
}
?>
</body>
</html>