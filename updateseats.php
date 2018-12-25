<?php
session_start();
$a=$_POST['num'];
$b=$_POST['nseats'];
if($a=="" || $b=="")
{
	echo "<br><br>Please fill in the details";
	echo "<br><br><a href='upseats.php'>CLICK HERE TO GO TO HOME PAGE.</a>";
}
else
{
	mysql_connect("localhost", "root", "");
	mysql_select_db("Database");
	$query="SELECT * FROM train WHERE number='$a'";
	$result=mysql_query($query);
	$count=mysql_num_rows($result);
	if($count==0)
	{
		echo "<br><br>Invalid train number";
		echo "<a href='upseats.php'>CLICK HERE TO GO TO HOME PAGE.</a>";
	}
	else
	{
		$query1="UPDATE train SET noofseats='$b' WHERE number='$a'";
		mysql_query($query1);
		echo "<br><br>Updated!";
	}
}
?>