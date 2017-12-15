<?php
$h=fopen("source.txt","w+");
$v=fopen("destination.txt","w+");
fwrite($h,"Welcome to PHP");
copy("source.txt","destination.txt");
echo file_get_contents("destination.txt");
?>