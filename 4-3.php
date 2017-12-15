<?php
$x = $_POST["tut"]; 
$y = $_POST["travel"];
$z = $_POST["hostel"];
$a = $_POST["mess"];
$b = $_POST["library"];
$c = $_POST["id"];
$d = $_POST["exam"];
$e = $_POST["other"];
$f = $_POST["tr"];
$g = $_POST["hs"];
$h = $_POST["ms"];
$sum=$x+$d+$b+$c+$e;
if($f==1){
	$sum=$sum+$y;
}
if($g==1){
	$sum=$sum+$z;
}
if($h==1){
	$sum=$sum+$a;
}
echo "Total fee = $sum";
?>