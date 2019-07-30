<?php
session_start();
include "databaseconnection.php";
$a=$_POST['username'];
$y=$_POST['reg'];
$z=$_POST['email'];
$p=$_POST['pass'];
$q=$_POST['pho'];
$r=$_POST['branch'];
//$_SESSION = $name;
//$r=$_POST['gen'];
$sql="SELECT * FROM reg";
$result=mysql_query($sql,$conn) or die("error---query in database");
$num_rows=mysql_num_rows($result);  
$_SESSION['name']=$a;
$_SESSION['redgno']=$y;
$_SESSION['email']=$z;
$_SESSION['password']=$p;
$_SESSION['mobileno']=$q;
$_SESSION['branch']=$r;
//$_SESSION['gender']=$r
//header("location:frame3.html")
$query=mysql_query("INSERT INTO reg(name,redgno,email,password,mobileno,branch)VALUES('$a','$y','$z','$p','$q','$r')");
if(!$query){
die('insertion not successful'.mysql_error());
}
else
{
	mysql_query("INSERT INTO studentlogin(username,pass)VALUES('$a','$p')");
	header("location:slogin.html");
}
?>