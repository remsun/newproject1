<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/javascript">
var xmlHttp;
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
					
					
					document.getElementById("te").innerHTML="<font color='red' size='4'>" + xmlHttp.responseText+ "</font>";
					starttimer();
					
				}
		}
		
	function starttimer()
		{
			setTimeout("showtime()",1000);
			
		}
</script>
</head>

<body onload="starttimer()">
<form id="form1" name="form1" method="post" action="">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="206" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr>
      <td width="184"><label id="te"></label></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>
