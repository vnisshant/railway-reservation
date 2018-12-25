<?php
session_start();
echo $_SESSION['email'];

$a=$_POST['b'];
$b=$_POST['c'];
$c=$_SESSION['email'];
mysql_connect("localhost","root","");
mysql_select_db("Database");
$query="SELECT * FROM usertrain WHERE useremail='$c' AND pnr='$a'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
$result=mysql_fetch_array($result);
if($count==0)
{
	echo "<br><br>Invalid details.<br><br>";
	echo "<a href='del.php'>Click here to go to the previous page.</a>";
}
else if($b>$result[2])
{
	echo "<br><br>You had booked only ";
	echo $result[2];
	echo " seats.<br><br>";
	echo "<a href='del.php'>Click here to go to the previous page.</a>";
}
else
{
	$query3="SELECT * FROM train WHERE number='$result[0]'";
	$result1=mysql_query($query3);
	$result1=mysql_fetch_array($result1);
	$w=$result1[3]-$b;
	$x=$result1[11]+$b;
	$query4="UPDATE train SET booked='$w' WHERE number='$result[0]'";
	$query8="UPDATE train SET available='$x' WHERE number='$result[0]'";
	mysql_query($query4);
	mysql_query($query8);
	if($b=='$result[2]'){
	$query5="DELETE FROM usertrain WHERE pnr='$a'";
	mysql_query($query5);}
	else
	{
		$z=$result[2]-$b;
		$query6="UPDATE usertrain SET seatsbooked='$z' WHERE pnr='$a'";
		mysql_query($query6);
	}
	echo "<br><br>Booking canceled.<br><br> ";
	echo "<a href='del.php'>Click here to go to the previous page.</a>";
}

?>