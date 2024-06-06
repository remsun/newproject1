<?php 
include('enquiry.php');
$e1=new enquiry();
$a=$e1->getdetails($_GET['id']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
function validateform(){
//if((document.f1.t1.value=="")
//{
// return false;
// document.f1.t1.focus();
 //}
// else
// {
// return true;
// }
//}
if((document.f1.t1.value=="")||(document.f1.t2.value=="")||(document.f1.t3.value=="")||(document.f1.t4.value=="")||(document.f1.t5.value=="")||(document.f1.t6.value==""))
 {
 document.f1.t1.focus();
 
 return false;
 }
 else
 {
 return true;
 }
} 
 </script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<div>
<form name="f1" id="f1" action="enquirysucess.php" method="post" onsubmit="return validateform();" >
  <table width="419" height="361" border="1">
    <tr>
      <td width="153">NAME</td>
      <td width="250"><input name="t1" type="text"id='t1' value="<?php echo $a[1] ?> "size="30" /></td>
    </tr>
    <tr>
      <td>DOB</td>
      <td><input name="t2" type="text"id='t2' value="<?php echo $a[2]  ?> " size="30" /></td>
    </tr>
    <tr>
      <td height="38">SEX</td>
      <td><p>
        <label></label>
        <input name="t3" type="text"id='t3' value="<?php echo $a[3] ?> " size="30" />
        <br />
      </p></td>
    </tr>
    <tr>
      <td>PLACE</td>
      <td><input name="t4" type="text" size="30" id='t4' value="<?php echo $a[4] ?> "/></td>
    </tr>
    <tr>
      <td>PHONE NO</td>
      <td><input name="t5" type="text" size="30" id='t5' value="<?php echo $a[5] ?> " /></td>
    </tr>
    <tr>
      <td>ENQ DATE </td>
      <td><input name="t6" type="text" size="30" id='t6' value="<?php echo $a[6] ?> " /></td>
    </tr>
    <tr>
      <td height="52">&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit" /></td>
    </tr>
    <tr>
      <td height="53">&nbsp;</td>
      <td><input type="hidden" name="hf1" value="<?php
	  echo $_GET['mode']?>" />
        <input type="hidden" name="hf2" value="<?php
		echo $_GET['id']?>" /></td>
    </tr>
  </table>
</form>
</div>
</body>
</html>
