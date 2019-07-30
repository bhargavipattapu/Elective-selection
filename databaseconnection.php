 <?php
$conn=mysql_connect("localhost","root","");
	if(!$conn)
{
 die('could not coonect:'.mysql_error());
}
$dbselect=mysql_select_db("svecw",$conn);
 if(!$dbselect )
 {
 	die("could not connect".mysql_error());
}
echo "successfully created!!!";
?>