<?php
$cookie_name = "user";
//$cookie_value = "sagar";
$cookie_value = serialize(array("sagar","abcd"));
setcookie($cookie_name,$cookie_value,time()+(60*60*24*30),"/");
?>
<html>
<body>
<?php 
if(!isset($_COOKIE[$cookie_name]))
{
	echo "Cookie named '" . unserialize($_COOKIE["user"])."' is not set!";	
}
else{
	echo "Cookie '" . "user" . "'is set!<br>";
	echo "Cookie " . $_COOKIE["user"]."<br>";
	//print_r(serialize($_COOKIE["user"]));
}
?>
</body>
</html>