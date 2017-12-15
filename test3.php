<?php
$a=$_POST["name"];
$b=$_POST["gender"];
$c=$_POST["dob"];
$e=$_POST["contact"];
$d="";
foreach($_POST["course"] as $item){
$d=$d.",$item";
}
$h=fopen("dc.txt","w+");
fwrite($h,"Name=$a\r\nContact=$e\r\nGender=$b\r\ndob=$c\r\ncourse=$d");
$txt=file_get_contents("dc.txt");
echo "$txt";
?>