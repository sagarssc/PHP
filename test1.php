<?php
$a=array(2,3,4,5,6,7,8,9,10,15,89);
tsort($a);
function tsort($a){
	for($i=0;$i<count($a);$i++){
		$count = 0;
		for($j=2;$j<$a[$i];$j++){
			if($a[$i]%$j==0){
				$count++;
			}
		}
		if($count==0){
			$b[]=$a[$i];
		}
		else{
			$c[]=$a[$i];
		}
	}
	rsort($b);
	rsort($c);
	$d=array_merge($b,$c);
	print_r($d);
} 

?>