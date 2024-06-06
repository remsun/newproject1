<?php
if(is_uploaded_file($_FILES["upload"]["tmp_name"]))
{
copy($_FILES["upload"]["tmp_name"],"C:\\wamp\\www\\". $_FILES["upload"]["name"]);
echo "<p>FILE UPLOADED SUCCESSFULLY.</p>";
}?>
