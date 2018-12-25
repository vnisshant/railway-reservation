<?php
session_start();
echo $_SESSION['email'];
$a=$_SESSION['email'];
mysql_connect("localhost","root","");
mysql_select_db("Database");
$query="SELECT * FROM usertrain WHERE useremail='$a'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if($count==0)
{
	echo "<br><br>You have not booked any train.<br><br>";
	echo "<a href='afterlogin.php'>Click here to go back to previous page.</a>";
}
else
{
while($row=mysql_fetch_array($result))
{
echo"<table border='2'>";
echo"<tr>";
echo"<td>".$row[0]."</td>";
echo"<td>".$row[1]."</td>";
echo"<td>".$row[2]."</td>";
echo"<td>".$row[3]."</td>";
echo"</tr>";
echo"</table><br>";}
echo "<form method='POST' action='deletion.php'>Enter the pnr number whose bookings you have to delete : <br>
<input type='text' name='b' size='40'><br>
Enter the number of seats you want to delete :<br><br>
<input type='number' name='c' size='30'>
<input type='submit' value='Delete Now'></form>";
}


?>