<?php
$a=fopen("studentdetails.txt","w+");
fwrite($a,"101:priya:19:banglore\r\n102:prem:20:chennai\r\n103:anu:18:chennai\r\n104:john:21:banglore\r\n105:amoit:21:mumbai");
rewind($a);
read($a);
function read($a){
	while(!feof($a)){
		echo fgets($a);
	}
}
$c=file("studentdetails.txt");
$search="banglore";
foreach($c as $value){
	if(strpos($value,$search)!==FALSE){
		echo "<br>$value";
	}
}
?>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		