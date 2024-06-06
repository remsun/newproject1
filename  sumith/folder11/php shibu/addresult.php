<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" language="javascript1.5">
function addition ()
{
//alert(document.f1.t1.value);
var a=Number(document.f1.t1.value);
var b=Number(document.f1.t2.value);
 document.f1.t3.value=a+b;
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<form id="f1" name="f1" method="post"   >
  <p>Enter Value1
    <input type="t1" id="t1" name="t1"  />
  </p>
  <p>Enter Value2  
    <input type="t2" id="t2" name="t2" />
  </p>
  <p>
    <input name="add" type="button" id="add" value="add" onclick="addition();" />
  </p>
  <p>Result
    <input type="t3" name="t3" id="t3"/>
  </p>
</form>
</body>
</html>
