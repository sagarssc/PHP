<?php
$contacts1=array("name"=>array("sagar","prateek","shivam"),"contact"=>array("9719700541","8192852721","1234567890"),"email"=>array("a@gmail.com","b@gmail.com","c@gmail.com"));
foreach($contacts1 as $key=>$value){
	echo "<br>$key &nbsp&nbsp";
	foreach($value as $key1){
		echo "$key1 &nbsp&nbsp&nbsp&nbsp&nbsp";
	}
}
?>