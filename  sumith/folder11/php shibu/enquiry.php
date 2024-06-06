<?php
class enquiry
{
 var $enqid;
 var $name;
 var $dob;
 var $sex;
 var $place;
 var $phoneno;
 var $enqdate;
 var $con;
 var $stmt;
 function __construct()
 {
  $this->con=new mysqli("localhost","root","","logic");
  
 }
 function insert()
 {
  $this->stmt=$this->con->prepare("insert into enquiry(name,dob,sex,place,phoneno,enqdate) values(?,?,?,?,?,?)");
  $this->stmt->bind_param('ssssss',$this->name,$this->dob,$this->sex,$this->place,$this->phoneno,$this->enqdate);
  $this->stmt->execute();
 }
 function listenq()
 {
   $this->stmt=$this->con->prepare("select * from enquiry") ;
   $this->stmt->bind_result($enqid,$name,$dob,$sex,$place,$phoneno,$enqdate);
   $this->stmt->execute();
   while($this->stmt->fetch())
   {
    echo"<tr><td>".$enqid."</td><td>".$name."</td><td>".$dob."</td><td>".$sex."</td><td>".$place."</td><td>".$phoneno."</td><td>".$enqdate."</td><td><a href='addenquiry.php?mode=update&id=$enqid'>Edit</a></td><td><a href='delete.php?id=$enqid'>Delete</a></td></tr>";   
   }
 }
 function update($enqid)
 {
  $this->stmt=$this->con->prepare("update enquiry set name=?, dob=?, sex=?, place=?, phoneno=?, enqdate=? where enqid=?");
  $this->stmt->bind_param('ssssssi',$this->name,$this->dob,$this->sex,$this->place,$this->phoneno,$this->enqdate,$enqid);  
  $this->stmt->execute();
 }
 function getdetails($eid)
 {
  $this->stmt=$this->con->prepare("select * from enquiry where enqid=?");
  $this->stmt->bind_param('i',$eid);
  
  $this->stmt->bind_result($enqid,$name,$dob,$sex,$place,$phoneno,$enqdate); 
  $this->stmt->execute();
  if($this->stmt->fetch())
  {
  $r=array($enqid,$name,$dob,$sex,$place,$phoneno,$enqdate);
    } 
	
  return $r;

  }
   function delete($enid)
 {
  $this->stmt=$this->con->prepare("delete from enquiry where enqid=?");
  $this->stmt->bind_param('i', $enid);  
  $this->stmt->execute();
 }
 }
?>