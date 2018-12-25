<?php
session_start();
$a=$_POST['f'];
$b=$_POST['g'];
if($a=="" || $b=="")
{
echo "<br><a href='Formuser.php'><h2 style='background-color:powderblue'><center>CLICK HERE TO GO TO HOME PAGE</center></h2></a>";
	echo "<br><br><center><h2 style='border:3px solid Tomato'>Fill in the details.</h2></center><br><br>";
	
}
else if($a=="admin@gmail.com")
{
	echo "<br><br>Admin login not allowed here. <br><br>
	<a href='Formuser.php'>Click here to complete the registration.</a>";
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
		echo "<br><a href='Formuser.php'><h2 style='background-color:powderblue'><center>CLICK HERE TO GO TO HOME PAGE</center></h2></a>";
		echo "<br><br><center><h2 style='border:3px solid Tomato'>Incorrect Email Or Password.</h2></center><br><br>";
	}
    else
	{
		$_SESSION['email']=$a;
		header("location:afterlogin.php");
	}

}







?>