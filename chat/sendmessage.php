<?php


$myfile = fopen("msglog.html", "a") or die("Unable to open file!");

$txt = "<b>".$_POST['name'].":</b>".$_POST['msg']."<br>";



fwrite($myfile, "\n". $txt);
fclose($myfile);