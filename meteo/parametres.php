<?php
date_default_timezone_set("Europe/Paris");
$date = date("d/m/Y");
$heure = date(" H:i");
if ($heure >= 7 && $heure <= 19)
{   $css = "body {background-color:red; color: black; }"; }
else
{   $css = "body {background-color: rgb(31, 38, 59); color: white"; }
?>