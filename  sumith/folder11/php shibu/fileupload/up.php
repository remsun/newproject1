<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Extension Check Demo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript">
var formOK = false;

function validatePDF(objFileControl){
 var file = objFileControl.value;
 var len = file.length;
 var ext = file.slice(len - 4, len);
 if(ext.toUpperCase() == ".PDF"){
   formOK = true;
 }
 else{
   formOK = false;
   alert("Only PDF files allowed.");
 }
}
</script>
</head>

<body>
<form name="MyForm" onSubmit="return formOK;" action="upll.php">
Select a PDF file:
<input type="file" name="upload" onChange="validatePDF(this)" />
<input type="submit" value="Submit" />
</form>
</body>
</html>