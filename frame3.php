<?php
session_start();
$_SESSION['username'];
	//header("location:frame3.html")
?>

<html>
<head>
<frameset rows="30%,70%">
<frameset cols="100%">
<frame name="f1"src="back.html"frameborder="0">
<!--<frame name="f4"src="logout.html" frameborder = "0">-->
</frameset>
<frameset cols="20%,80%">
<frame name="f2" src="branches.html">
<frame name="f3">
</frameset>
</frameset>
</head>



</html>
