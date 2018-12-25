<?php
session_start();
$a=$_POST['num'];
if($a=="")
{
	echo "<br><br>Please fill in the train number";
	echo "<br><br><a href='deltrain.php'>CLICK HERE TO GO TO PREVIOUS PAGE.</a>";
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
		echo "<a href='deltrain.php'>CLICK HERE TO GO TO PREVIOUSs PAGE.</a>";
	}
	else
	{
		$query1="DELETE FROM train WHERE number='$a'";
		mysql_query($query1);
		echo "<br><br>Train Deleted!";
	}
}
?>