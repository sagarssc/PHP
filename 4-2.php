<?php
$x=$_POST["name"];
$q=$_POST["gender"];
$name=explode(' ',$x);
echo"first name = $name[0]<br>";
echo"middle name = $name[1]<br>";
echo"last name = $name[2]<br>";
$num=0;
$num1=0;
$vowels=array('a','e','i','o','u','A','E','I','O','U');
for($i=0;$i<strlen($x);$i++){
if(in_array($x[$i],$vowels)){
	$num++;
}
if(substr($x,$i,1)==" "){
	$num1++;
}
}
echo "no. of vowels = $num <br> no. of space=$num1 <br>";
echo "NAME = ".strtoupper($x)."<br>";
	echo "NAME = $q$x"

?>