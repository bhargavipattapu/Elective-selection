<?php
session_start();
include "databaseconnection.php";
$name = $_POST['username'];
//$_SESSION['user'] = $name;
$y = $_POST['pass'];
$_SESSION['username']=$name;
$_SESSION['password']=$y;
//echo $_SESSION['username'];
$sql = "SELECT * FROM studentlogin where username = '$name' && pass = '$y'";
$result=mysql_query($sql) or die("error---query in database");
$num_rows=mysql_num_rows($result);
//echo "$num_rows";
if($num_rows > 0)
{
	header("location:frame3.html");
}
else{
	header("location:slogin.html");
}
?>