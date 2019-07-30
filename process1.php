<?php
$username=$_POST['username'];
$password=$_POST['pass'];
$con=mysql_connect("localhost","root","");
mysql_select_db("login1");
$sql2= "SELECT * FROM admin1 where username='$username' && password='$password'";
$result=mysql_query($sql2,$con) or die('could not connect');
$num_rows= mysql_num_rows($result);
//echo $num_rows;
if($num_rows > 0){
	header("Location:frame3.html");

}
else {
	echo"INVALID USERNAME AND PASSWORD";
	
}
?>