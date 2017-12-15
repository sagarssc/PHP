<?php
$cookie_name="abc";
$cookie_value=array($_POST["name"],$_POST["contact"],$_POST["event"]);
setcookie($cookie_name,$cookie_value,time()+(60*60*24));
?>
<html><body>
<?php 
if(!isset($_COOKIE[$cookie_name])){
	echo "cookie value is not set";
}
else{
	echo "cookie is set<br>";
	echo "cookie ".$cookie_name." =  ".$cookie_value;
}
?>

</body></html>
