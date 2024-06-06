<?php
//connect to database. Username and password need to be changed
$connection=mysql_connect("localhost", "root", "");

//Select database, database_name needs to be changed
mysql_select_db("logic");

//get decoded image data from database
$result=mysql_query("SELECT * FROM images WHERE img='".$_GET['img']."'");

//fetch data from database
$data=mysql_fetch_array($result);
$encoded=$data['data'];

//note: "$data['data']" is the row "data" in the table we made.
//The image ID would be "$data['img']" for example


//close connection
mysql_close($connection);

//decode and echo the image data
echo base64_decode($encoded);

//end
?> 