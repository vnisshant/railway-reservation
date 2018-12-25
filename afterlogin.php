<?php
session_start();

mysql_connect("localhost","root","");
mysql_select_db("Database");
$a=$_SESSION['email'];
$query="SELECT * FROM user WHERE name='$a'";
$result=mysql_query($query);
$result=mysql_fetch_array($result);
echo "<html><body background='a.jpg'>";
echo "<form method='POST' method='Formuser.php'><h3><a href='settings.php'>ACCOUNT SETTINGS</a>&nbsp &nbsp|&nbsp &nbsp<a href='logout.php'>LOGOUT</a></h3></form>";
echo "<h1 style='color:black'><center>Welcome! You have successfully logged in!</center></h1>";
echo "<center><img src='d.jpg' height='50%' width='50%'><center>";
echo "<center><form method='POST' action='Trainsshow.php'><h3>SEARCH TRAINS : &nbsp&nbspSource : <input type='text' name='src' id='src' size='30'>&nbsp&nbspDestination : <input type='text' name='dest' id='dest' size='30'>
<input type='submit' value='submit here'><h3></form></center>";

echo "<br>";
echo "<center><h2><a href='view.php'>View Your Bookings Here</a></h2></center>";
echo "<center><h2><a href='del.php'>Cancel Your Bookings Here</a></h2></center>";
echo "</body></html>";
?>
