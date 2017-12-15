<?php
$p=$_POST["name"];
$y=$_POST["rollno"];
$a[0]=$_POST["math"];
$a[1]=$_POST["science"];
$a[2]=$_POST["english"];
$a[3]=$_POST["language"];
$a[4]=$_POST["moral"];
$sum=0;
for($i=0;$i<5;$i++){
	$sum=$sum+$a[$i];
}
function avg($x){
	$avg=$x/5;
	return $avg;
}
$avg=avg($sum);
if($avg<=100&&$avg>=90){
	$x="O";
}
else if($avg<=89&&$avg>=70){
	$x="A";
}
else if($avg<=69&&$avg>=60){
	$x="B";
}
else if($avg<=59&&$avg>=50){
	$x="C";
}
else if($avg<50){
	$x="F";
}
echo "NAME = $p <br> Rollno = $y <br>";
echo "Total = $sum <br> Average = $avg <br> Grade = $x";
?>