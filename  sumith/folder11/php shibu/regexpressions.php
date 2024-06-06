<?php
$keyword="10$ for 1 GB RAM and 20$ for 320 GB HDisk";
$keyword=preg_quote($keyword,'/');
echo $keyword;

$string="The quick brown fox jumbed over lazy dog";
$patterns=array("/quick/","/brown/","/fox/");
$replace=array("slow","black","bear");

echo preg_replace($patterns,$replace,$string);

$string="Hello World";
if(preg_match("/ell/",$string))
	{
		echo	"Match found";
	}
else
	{
		echo	"No match found";
	}
	
$username="LoGIC";

if(ereg("[^a-z]",$username))
	{
	echo	"Username must be lowercase";
	}	
else
	{
	echo	"You are correct";
	}
	
echo "/n".$_SERVER['SERVER_NAME'] ."/n";
echo $_SERVER['HTTP_HOST']."/n";
echo $_SERVER['HTTP_ACCEPT']."/n";
echo $_SERVER['REQUEST_METHOD']."/n";
echo $_SERVER['GATEWAY_INTERFACE']."\n";
echo $_SERVER['SERVER_ADMIN']."\n";
echo $_SERVER['SERVER_SIGNATURE']."\n";
echo $_SERVER['SERVER_PROTOCOL']."\n";
echo $_SERVER['DOCUMENT_ROOT']."\n";
echo $_SERVER['REQUEST_URI']."\n";

//Creating Directory

if(file_exists("c:/testdir"))
	{
	echo("Directory Already Existed");
	}
else
	{
	mkdir("c:/testdir");
	echo("Directory Created");
	}
$file="c:/testdir/test.txt";
$fhandles=fopen($file,'w');
$strdata="Test File";
fwrite($fhandles,$strdata);

$strdata=fread($fhandles,filesize($file));
echo $strdata;

?>