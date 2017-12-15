<?php
$x="1,2,3,4,5,6,7,8,9";
$y=explode(',',$x);

sequence($y);

function sequence($y){
$j=0;
$k=0;
for($i=0;$i<count($y);$i++){
	if($y[$i]%2==0){
		$a[$j]=$y[$i];
		$j++;
	}
	else{
		$b[$k]=$y[$i];
		$k++;
	}
}
sort($a);
sort($b);
$c=array_merge($a,$b);
foreach($c as $key){
	echo"$key ,";
}
}
?>