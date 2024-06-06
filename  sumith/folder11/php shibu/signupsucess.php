<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php

 $con=new mysqli("localhost","root","","logic");
 $stmt=$con->prepare("insert into login(loginname,password) values(?,?)");
 $stmt->bind_param('ss',$_POST['t1'],$_POST['t2']);
  $stmt->execute();

  
 $con=new mysqli("localhost","root","","logic");
 $stmt=$con->prepare("insert into employees(empid,employeename,DOB,DOJ,place,phoneno,desigid) values(?,?,?,?,?,?,?)");
 $stmt->bind_param('issssss', $_POST['t3'],$_POST['t4'],$_POST['t5'],$_POST['t6'],$_POST['t7'],$_POST['t8'],$_POST['t9']);
  $stmt->execute();
 echo("SIGNED UP SUCESSFULLY");
?> 

<body><a href="login.php">click here to login</a>
</body>
</html>
