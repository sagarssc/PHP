<?php
$connection = mysql_connect("localhost","root","") or die ("could not connect to the server");
$m = "create database college1";
$n = mysql_query($m,$connection);
$z = mysql_select_db("college1",$connection) or die ("could not select the database"); 
$a = "create table emp1(ename varchar(20),eid integer)";
$b=mysql_query($a);
$c = "insert into emp1 values ('sagar','101')";
$d=mysql_query($c);
$e = "insert into emp1 values ('sagar1','102')";
$f=mysql_query($e);
$g = "insert into emp1 values ('sagar2','103')";
$h=mysql_query($g);
$i = "insert into emp1 values ('sagar3','104')";
$j=mysql_query($i);
$k = "insert into emp1 values ('sagar4','105')";
$l=mysql_query($k);
$o = mysql_query("select * from emp1 order by eid");
$p = mysql_num_fields($o);
$w = mysql_num_rows($o);
echo "<table border = '5'>";
echo "<tr><th>ename</th><th>eid</th></tr>";
while($row = mysql_fetch_array($o)){
	echo "<tr>";
	echo "<td>",$row['ename'],"</td><td>",$row['eid'],"</td>";
	echo "</tr>";
}
echo "</table>";
echo "num of field = $o<br>num of row = $w";
mysql_close($connection);
?>