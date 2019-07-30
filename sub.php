<?php
session_start();
$username = $_SESSION['username'];
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db("svecw", $conn);
$b = $_POST['subj'];
echo "$b";
echo "$username";
$s=mysql_query("UPDATE reg SET subject='$b' WHERE name ='$username'");
if(!$s) {
	die(mysql_error());
}
else {
	echo "Your Data Inserted";
	$Message = "Success";
	header("location:frame4.html?Message=".$Message);
}
?>