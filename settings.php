<?php
session_start();
echo "<a href='afterlogin.php'>MY PAGE</a><br>";
$a=$_SESSION['email'];
mysql_connect("localhost","root","");
mysql_select_db("Database");
$query="SELECT * FROM user WHERE email='$a'";
$result=mysql_query($query);
$result=mysql_fetch_array($result);

echo "Your Information :<br>";
echo "NAME : &nbsp &nbsp"; echo $result[0]; echo "<form method='POST' action='name.php'><input type='submit' value='EDIT'></form>";
echo "<br>EMAIL : &nbsp &nbsp"; echo $result[1]; echo "<form method='POST' action='email.php'><input type='submit' value='EDIT'></form>";

echo "<br>PASSWORD : &nbsp &nbsp"; echo $result[2]; echo "<form method='POST' action='password.php'><input type='submit' value='EDIT'></form>";

echo "<br>PHONE NUMBER : &nbsp &nbsp"; echo $result[3]; echo "<form method='POST' action='phone.php'><input type='submit' value='EDIT'></form>";

?>