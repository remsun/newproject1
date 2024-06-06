<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
  include('enquiry.php');
  $enq1=new enquiry();
  $enq1->name=$_POST['t1'];
  $enq1->dob=$_POST['t2'];
  $enq1->sex=$_POST['t3'];
  $enq1->place=$_POST['t4'];
  $enq1->phoneno=$_POST['t5'];
  $enq1->enqdate=$_POST['t6'];
  if($_POST['hf1']=='insert')
  {
 
   $enq1->insert();
   }
   if($_POST['hf1']=='update')
  {
 
   $enq1->update($_POST['hf2']);
   }
    echo "Enquiry details added sucessfully";
?>
<body>
</body>
</html>
