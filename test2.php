<?php
$a=$_POST["name"];
$c=$_POST["course"];
echo "NAME= $a<br> Course=$c<br>";
foreach($_POST['qualification'] as $item){
$b=$item;
echo "Qualification=$b<br>";
}

?>