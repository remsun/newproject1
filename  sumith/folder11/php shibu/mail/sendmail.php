<?php
$to="sumithkrishnank@gmail.com";
$subject="local mailing";
$message="Hi Vijesh how r u?";
$from="sumith";
$header="From:$from";
mail($to,$subject,$message,$header);
?>