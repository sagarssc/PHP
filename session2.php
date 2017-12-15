<?php
session_start();
?>
<html><body>
<?php
$_SESSION["user"]="abc";
echo "session variable is set ". $_SESSION["user"];
if(!isset($_SESSION["count"])){
	$_SESSION["count"]=0;
}
else{
	$_SESSION["count"]++;
	}
echo "you are here". $_SESSION["count"] ."time before";
?>
<a href="12.php">check session</a>
</body></html>