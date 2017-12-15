<?php
$a=$_POST["numbers"];
$numarray = explode(',', $a);
$x=$a[0];
$y=$a[0];
foreach($numarray as $num){
	if($x<$num){
	$x=$num;
	}
	if($y>$num){
		$y=$num;
	}
}
echo "largest no. is $x<br>";
echo "smallest no. is $y";
?>