<?php
$cookie_name="abcd";
$cookie_value=serialize(Array("sagar","singh","chauhan"));
setcookie($cookie_name,$cookie_value,time()-(60*60*24),"/");
?>
<html><body>
<?php 
if(!isset ($_COOKIE[$cookie_name])){
	echo "Cookie $cookie_name is not set";
}
else{
	echo "Cookie $cookie_name is set";
	echo "Cookie = $cookie_value";
	print_r(serialize($cookie_value));
}
?>
</body></html>