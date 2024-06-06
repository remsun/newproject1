<?php
class car
{
 static $color="red";
 var $body;
 var $size;
 var $speed;
 var $fueltype;
 var $company;
 function start()
{
 echo"<br/>";
 echo "car start";
}
static function stop()
{
 echo"<br/>";
 echo "car is stop";
 
}
function run()
{
 $this->start();
  echo"<br/>";
   echo "car is running";
}

 function show()
{
 echo"<br/>";
 echo"car body : ".$this->body."car size : ".$this->size."car speed : ".$this->speed."car fueltype : ".$this->fueltype."company : ".$this->company;
}  
}

//echo "car color : ";
//echo car::$color ;
//$c1=new car();
//$c1->body="steel";
//$c1->size="medium";
//$c1->speed="100";
//$c1->fueltype="petrol";
//$c1->company="maruthi";
//echo $c1->color;
//$c1->show();
//$c1->run();
//$c1->stop();
//echo"<br/>";
//echo "car color : ";
//echo car::$color ;
//$c2=new car();
//$c2->body="fiber";
//$c2->size="large";
//$c2->speed="120";
//$c2->fueltype="diesel";
//$c2->company="toyotta";
//echo $c2->color;
//$c2->show();
//$c2->run();
//$c2->stop();
//echo"<br\>";

class maruthi extends car
{
var $shape;
 function viewshape()
{
 $this->shape=maruthi;
 echo"shape is".$this->shape;
}
function start() 
{
echo"maruthi";
parent::start();
}
}
$m1=new  maruthi();
$m1->start();
$m1->viewshape();
$m1->run();

 ?> 