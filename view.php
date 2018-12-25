<?php
session_start();

$a=$_SESSION['email'];
mysql_connect("localhost","root","");
mysql_select_db("Database");
$query="SELECT * FROM usertrain WHERE useremail='$a'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if($count==0)
{
	echo "<h2><a href='logout.php'>LOGOUT</a></h2>";
	echo "<html><body background='a.jpg'>";
	echo "<br><br><h2>You have not booked any train.</h2><br><br>";
	echo "<h2><a href='afterlogin.php'>Click here to go back to previous page.</a></h2>";
}
else
{
echo "<ul>";
while($row=mysql_fetch_array($result))
{echo "<li>";
echo "Train Number : &nbsp &nbsp"; echo $row[0]; echo "&nbsp &nbsp Number Of Seats Booked : &nbsp &nbsp"; echo $row[2]; echo "&nbsp &nbsp PNR Number : ";echo $row[3];
echo "<br></li>";
}
echo "</ul>";
}
?>