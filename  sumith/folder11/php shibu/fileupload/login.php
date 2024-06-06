<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

<?php 
$counterfile="C:/testdir/counter.txt";
if(!($fhandles=fopen($counterfile,'r')))
	die("Cannot connect " . $counterfile);
$count=(int)fread($fhandles,20);
fclose($fhandles);
$count++;
echo "Your visit no is".$count;
$fhandles=fopen($counterfile,'w');
fwrite($fhandles,$count);
fclose($fhandles);
?>

<script type="text/javascript" language="javascript1.5">
function checklogin(uname,password)
{
 if((uname=="")||(password==""))
 {
 alert("Please enter the username and password");
 }
}
var xmlhttp;
var url;

function getXMLHTTPObject()
{
 try
 {
  xmlhttp=new ActiveXObject("MSXML2.XMLHTTP");
 }catch(e)
{
 try
 {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
 }catch(e)
 {
 alert("This browser does not support AJAX");
 return false;
 }
}
return xmlhttp;
}

function showuser()
{
xmlhttp=getXMLHTTPObject();
if(xmlhttp!=null)
{
url="http://localhost/Shibu/getuser1.php?q="+document.f2.t1.value;
xmlhttp.onreadystatechange=displaymessage;
xmlhttp.open("GET", url, true);
xmlhttp.send(null);
}
}

function displaymessage()
{
if(xmlhttp.readyState==4)
{
document.getElementById("d1").innerHTML=xmlhttp.responseText;
}
}
var strurl;
function showtime()
	{
		
		strurl="time.php";
		if(window.XMLHttpRequest)
				{
						xmlHttp=new XMLHttpRequest();
				}
			if(window.ActiveXObject)
				{
						xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlHttp.open('POST',strurl,true);
				

				xmlHttp.send(strurl);
				xmlHttp.onreadystatechange=displaytime;
	}
	function displaytime()
		{
		
			
			if(xmlHttp.readyState==4)
				{
					
					
					document.getElementById("te").innerHTML="<font color='red' size='2'>" + xmlHttp.responseText+ "</font>";
					starttimer();
					
				}
		}
		
	function starttimer()
		{
			setTimeout("showtime()",1000);
			
		}


/*function showcolor()
{
alert("now the color is "+document.bgColor);
document.bgColor="pink"
}*/
</script>
<style type="text/css">
.sl {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	font-style: italic;
	line-height: normal;
	font-weight: lighter;
	font-variant: normal;
	text-transform: uppercase;
	text-decoration: blink;
	background-attachment: scroll;
	background-color: #FF33CC;
	background-image: none;
	background-repeat: repeat;
	background-position: center center;
	letter-spacing: normal;
	text-align: left;
	vertical-align: super;
	word-spacing: normal;
	white-space: normal;
	display: block;
}
.style1 {font-size: 18px}
.style2 {font-family: Arial, Helvetica, sans-serif; font-size: 10px; font-style: italic; line-height: normal; font-weight: bold; font-variant: normal; text-transform: uppercase; text-decoration: blink; background-attachment: scroll; background-color: #FF33CC; background-image: none; background-repeat: repeat; background-position: center center; letter-spacing: normal; text-align: left; vertical-align: super; word-spacing: normal; white-space: normal; display: block; }
.style3 {font-size: 20px}
</style>

</head>
<strong><h1 style="text-decoration:blink"><center></center></h1></strong>

<body bgcolor="#CCCCCC" onload="starttimer()">
<div class="style2">
  <div align="center" class="style1">
    <p class="style3">LOGIN PAGE  </p>
  </div>
</div>
<form id="form1" name="form1" method="post" action="">
<div style="float:right">
  <p>&nbsp;</p>
  <table width="206" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr>
      <td width="184"><label id="te"></label></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  </div>
</form>

<form action="search.php"method="get" name="f1" id="f1">
<div>
<table width="392" border="3" cellspacing="2" cellpadding="6">
  <tr>
    <td width="230"><input name="textfield" type="text" size="40" /></td>
    <td width="122"><input name="search" type="submit" id="search" value="search" /></td>
  </tr>
</table>

</div>
</form>
<form action="home.php" method="post" name="f2" id="f2">
<div>
<table width="392" border="2" cellspacing="2" cellpadding="6">
  <tr>
    <td width="133">login</td>
    <td width="221"><input name="t1" type="text" id="t1" onblur="showuser()" value="<?php
	if(isset($_COOKIE['uname']))
	{
	echo $_COOKIE['uname'];
	}
	?>" /></td>
  </tr>
  <tr>
    <td>password</td>
    <td><input name="t2" type="text" id="t2" value="<?php
	if(isset($_COOKIE['password']))
	{
	echo $_COOKIE['password'];
	}
	?>"
	/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="checkbox" name="c1" value="1"<?php
	if(isset($_COOKIE['uname']))
	{
echo "checked=checked";
	}
	?>
	 id="c1" />
      <label for="checkbox">save password</label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="Submit" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><a href="signup.php">signup</a> </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><a href="addenquiry.php?mode=insert">Enquiry</a></td>
  </tr>
</table>
</div>
</form>
</body>
</html>
