<?php
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
$file="c:/testdir/test.ppt";
$fhandles=fopen($file,'w');
$strdata="Test File hsdfhsdhjfsdf  dsf zd z dfgvzd fgz f gzdf gzd fg fdg d";
fwrite($fhandles,$strdata);

$strdata=fread($fhandles,filesize($file));
echo $strdata;



/*$file ="c:/testdir/test.txt";
$download_name = basename($file);
if (file_exists($file)) {
    @header('Content-Type: application/octet-stream');
    @header('Content-Disposition: attachment; filename='.$download_name);
    @header('X-Sendfile: '.$file);
    exit;
}
*/?>
