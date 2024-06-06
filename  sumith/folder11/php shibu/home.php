<?php
error_reporting(0);
session_start();
//session_regenerate_id();
$username=$_POST['t1'];
$password=$_POST['t2'];
if(($username=="")||($password==""))
{
header('location:login.php');
}
$con=mysql_connect("localhost",'root','');
if(!$con)
{
die("could not connect".mysql_error());
}
mysql_select_db("logic",$con);
$sql="select * from login where loginname='".$username."' and password='".$password."'";

$result=mysql_query($sql);
$row=mysql_fetch_array($result);
if($row=="")
{
header('location:login.php');
}
mysql_close($con);


if($_GET['c1']=="1")
{
setcookie("uname",$_GET['t1'],time()+(1000*60*60));
setcookie("password",$_GET['t2'],time()+(1000*60*60));
echo("cookie set successfully");
echo"<br/>";
echo $_COOKIE['uname'];
echo $_COOKIE['password'];
}
else
{
setcookie("uname","",time()-60);
setcookie("password","",time()-60);
}
?>

<?php 



echo session_id();
echo"<br/>";
?>
<?php
if(isset($_SESSION['uname']))
{
echo"aiready created session for the client";
echo"<br/>";
echo $_SESSION['uname'];
echo"<br/>";
}
else
{
$_SESSION['uname']=$_GET['t1'];
echo"new search variable created";
echo"<br/>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
}
.style2 {color: #FF0000}
-->
</style>
</head>

<body>
<center> 
  <span class="style1">HOME PAGE</span>
</center>
<form action="state.php"method="post">
<div>
<table width="500" border="2" cellspacing="2" cellpadding="6">
  <tr>
    <td width="91"><a href="home.php">home</a></td>
    <td width="115"><a href="basics.php">Basics</a></td>
    <td width="82"><a href="state.php">state</a></td>
    <td width="71"><a href="oops.php">Oops</a></td>
    <td width="55"><a href="logout.php">logout</a></td>
  </tr>
</table>
</div>
<form action="state.php" method="post">
<div id="d1'">
  <span class="style2">
  <?php
echo "Hi Welcome ".$_GET['t1'];
echo"<br/>";
echo"<br/>";
echo"Username is "."<label id='l1'>".$username."<label>";
echo"<br/>";
echo"Your Password is "."<label id='l2'>".$password."<label>";
?>
  </span>
<input type="submit"value="submit" />
</div>
</form>
</body>
</html>
