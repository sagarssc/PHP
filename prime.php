<?php
$a=array(1,2,3,4,5,6,7,8,9);
$l=0;
for($i=0;$i<count($a);$i++){
	$counter = 0;
	for($j=2;$j<=$a[$i];$j++){
		if($a[$i]%$j==0){
			$counter++;
		}
	}
	if($counter==1){
	$b[]=$a[$i];
	}
	else{
		$c[]=$a[$i];
	}
}
print_r($b);

print_r($c);
?>