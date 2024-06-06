<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
$xml=simplexml_load_file("C:\wamp\www\Shibu\customer.xml");

echo "<table border='1'>";
foreach($xml->customer as $c)
{
echo"<tr><td>".$c->id."</td><td>".$c->name."</td><td>".$c->designation."</td></tr>";
}
echo"</table>";

?>
<a href="addcustom.php">Add</a>

<body>
</body>
</html>
