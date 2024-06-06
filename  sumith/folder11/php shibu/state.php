
<?php
if(isset($_SESSION['uname']))
{
echo"aiready created session for the client";
echo"<br/>";
echo $_SESSION['uname'];
}
else
{
echo $_POST['l1'];
$_SESSION['uname']=$_POST['l1'];
}
?>
<body>
STATE MANAGEMENT
</body>
</html>
