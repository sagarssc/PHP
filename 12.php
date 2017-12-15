<?php 
session_start();
?>
<html><body>
<?php 
echo "Sessoin = ".$_SESSION["user"]."<br>";
echo "Session count = ". $_SESSION["count"];
?>
</body></html>