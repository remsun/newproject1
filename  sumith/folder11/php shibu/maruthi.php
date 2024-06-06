<?php
interface vehicle
{
function drive();
function start();
}
interface car 
{
function shape();
function breake();
}
class maruthi implements vehicle,car
{
function drive()
{
echo"drive started";
echo "<br\>";
}
function start()
{
echo"start implemented";
echo"<br\>";
}
function shape()
{
echo"shape is maruthi800";
echo"<br\>";
}
function breake()
{
echo"breaked";
echo"<br\>";
}
}
class zen implements vehicle,car
{
function drive()
{
echo"drive started";
echo "<br\>";
}
function start()
{
echo"start implemented";
echo"<br\>";
}
function shape()
{
echo"shape is zen";
echo"<br\>";
}
function breake()
{
echo"<br\>";
echo"breaked";

}
}
class m800 extends maruthi
{
function color()
{
parent::drive();

parent::start();
parent::shape();
parent::breake();
}
}
echo"<br\>";
$m1=new m800();
$m1->color();
echo"<br\>";
?>