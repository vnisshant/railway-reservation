<?php
session_start();
$a=$_POST['adname'];
$b=$_POST['adminpass'];
if($a==""||$b=="")
{
	
	echo "<br><br>Fill in the password.";
	echo "<br><br><a href='Formuser.php'>CLICK HERE TO GO TO HOME PAGE.</a>";
}
else if($a!="admin@gmail.com")
{
echo "You are not an admin";
}
else
{
	mysql_connect("localhost","root","");
	mysql_select_db("Database");
	$query="SELECT * FROM User WHERE email='$a' AND password='$b'";
	$result=mysql_query($query);
	$count=mysql_num_rows($result);
	if($count==0)
	{
	echo "Wrong Password";
		echo "<a href='Formuser.php'>CLICK HERE TO GO TO HOME PAGE.</a>";

	}
	else
	{
	$_SESSION['adname=$a'];
	header("location:adminlogin.php");
	}
}





?>