<?php
//session_start();
include "databaseconnection.php";
$query="select * from reg";
mysql_query($query) or die("not selected");
while($info=mysql_fetch_array($query)){
	echo"regdno:".$info['regdno'];
	echo"name:".$info['name'];
	echo"branch:".$info['branch'];
	echo"subject:".$info['subject'];
}
mysql_close();
header("Location:report.html");
?>
