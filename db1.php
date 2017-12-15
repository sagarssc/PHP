<?php
$connection = mysql_connect("localhost","root","") or die ("could not connect to server");
$m="create database college";
$n=mysql_query($m,$connection);
$db=mysql_select_db("college",$connection) or die ("could not select database");
$a="create table employe1(ename VARCHAR(20),empno VARCHAR(10),dept VARCHAR(20))";
$result = mysql_query($a) or die ("query failed: ". mysql_error());
$b="Insert into employe1(ename,empno,dept) values('william','12204092','HR')";
$c=mysql_query($b);
$d="Insert into employe1(ename,empno,dept) values('herry','12204046','Director')";
$e=mysql_query($d);
$f="Insert into employe1(ename,empno,dept) values('serah','12204030','Team Lead')";
$g=mysql_query($f);
$h="Insert into employe1(ename,empno,dept) values('mark','12204021','Engineer')";
$i=mysql_query($h);
$res=mysql_query("select * from employe1 order by empno");
$x=mysql_num_fields($res);
echo "<table border = '5'>";
echo "<tr>";
echo "<th>Ename</th><th>Empno</th><th>Dept</th>";
echo "</tr>";
while($row = mysql_fetch_array($res)){
	echo "<tr>";
	echo "<td>",$row['ename'],"</td>","<td>",$row['empno'],"</td>","<td>",$row['dept'],"</td>";
	echo "</tr>";
}
mysql_close($connection);
?>