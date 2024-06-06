<?php
include("enquiry.php");
$d1= new enquiry();
$d1-> delete($_GET['id']);
header('location:viewenquiry.php');
?>
