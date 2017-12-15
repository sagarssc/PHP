<?php
session_start();
?>
<html>
<body>
<a href="">
<?php 
$_SESSION["username"] = "abc";
echo "session variable are set .".$_SESSION["username"];
?>
</body>
</html>