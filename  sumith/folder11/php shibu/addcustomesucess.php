<?php
$xml=simplexml_load_file("C:\wamp\www\Shibu\customer.xml");
$newcust=$xml->addChild("customer");
$newcust->addChild("id",$_POST['t1']);
$newcust->addchild("name",$_POST['t2']);
$newcust->addchild("designation",$_POST['t3']);

$xml->asXML("C:\wamp\www\Shibu\customer.xml");
header("location.load.php");
?>
