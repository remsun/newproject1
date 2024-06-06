<?php
$q=$_GET["q"];

$con = mysql_connect('localhost', 'root', '');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("logic", $con);

$sql="SELECT * FROM login where loginname = '".$q."'";

$result = mysql_query($sql);
echo "<table border='1'>";
$row = mysql_fetch_array($result);

if($row!="")
  {
  echo "<tr>";
  echo "<td>" . "User Name Already Exist" . "</td>";
  echo "</tr>";
  }
  else
  {
  echo "<tr>";
  echo "<td>" . "User Name Is Available" . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?> 