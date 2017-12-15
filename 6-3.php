<?php
class feedback{
	function filewrite($h,$feed){
		fwrite($h,$feed);
	}
function read($h){
		echo file_get_contents("feedback.txt");
	}
}
$a=$_POST["fname"];
$b=$_POST["sub"];
$c=$_POST["date"];
$d=$_POST["sid"];
$e=$_POST["sname"];
$f=$_POST["rating"];
$g=$_POST["comment"];
$feed = "Faculty name = $a  \n"."Subject =$b  \n "."Date = $c \n"."Student Id = $d \n "."Student Name = $e \n"."Rating = $f\n"."Comment = $g \n";
$h=fopen("feedback.txt","w+");
$a = new feedback();
$a->filewrite($h,$feed);
$a->read($h);
?>