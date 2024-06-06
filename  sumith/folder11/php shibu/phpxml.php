=<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
$dom=new DOMDocument();
$c = $dom->createElement("customer");
$c->setAttribute("lang","English");

$fname=$dom->createElement("fname","sumith");
$lname=$dom->createElement("lname","Kk");
$dom->appendChild($c);
$c->appendChild($fname);
$c->appendChild($lname);

echo $dom->saveXML();


?>
<body>
</body>
</html>
