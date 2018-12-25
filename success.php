<?php
$e=$_POST['phn'];
$b=$_POST['name'];
$c=$_POST['email'];
$d=$_POST['pass'];
if($b=="" || $c=="" || $d=="" || $e=="")
{
	echo "<br><br><h2 style='border:3px rgb(255,78,12)' text-align='center'>Fill in all the details.</h2> <br><br>
	<a href='Formuser.php'>Click here to complete the registration.</a>";
}
else if($c=="admin@gmail.com" || $b=="admin")
{   echo "<form method='POST' action='Formuser.php'>
<br><center><h2 style='background:powderblue'><a href='Formuser.php'>CLICK HERE TO GO TO HOME</a></h2></center>
</form>";
	echo "<br><br><h2  style='border:3px solid Tomato;'><center>Choose a different username and emailID.</center></h2> <br><br>";
}
else
{
	mysql_connect("localhost","root","");
	mysql_select_db("Database");
	$query="SELECT * FROM User WHERE email='$c'";
	$result=mysql_query($query);
	$count=mysql_num_rows($result);
	if($count==0)
	{
		$query1="INSERT INTO User(name,email,password,phone) VALUES('$b','$c','$d','$e')";
		mysql_query($query1);
		echo "<br><br>You have been registered for our services. <br>Use your email id as your username.<br><br>";
		
	}
	else
	{
		echo "<br><br>User already exists.<br><br>";
	}
	echo "<a href='Formuser.php'>CLICK HERE TO GO TO THE HOME PAGE</a><br>";
}
?>