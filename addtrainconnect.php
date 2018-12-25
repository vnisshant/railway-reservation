<?php
session_start();
$m=$_POST['a'];
$n=$_POST['b'];
$o=$_POST['c'];
$p=$_POST['d'];
$q=$_POST['e'];
$r=$_POST['f'];
$s=$_POST['g'];
$t=$_POST['h'];
if($m==""||$n==""||$o==""||$p==""||$r==""||$s==""||t==""||$q=="")
{
echo "Please fill all";
}
else
{
mysql_connect("localhost","root","");
mysql_select_db("Database");
$query="SELECT * FROM train WHERE number='$m'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
$z=$m*100000;
if($count==0)
{$query1="INSERT INTO train(number,name,noofseats,booked,source,destination,arrival,depart,duration,PNR,PNRi,available) VALUES('$m','$n','$o','0','$p','$q','$r','$s','$t','$z','$z','$o')";

mysql_query($query1);
echo "Trains updated";
echo "<br><br><a href='addtrains.php'>CLICK HERE TO GO TO Previous PAGE.</a>";
echo "<br><br><a href='Formuser.php'>CLICK HERE TO GO TO HOME PAGE.</a>";
}
else
{
echo "Train exists";
echo "<br><br><a href='addtrains.php'>CLICK HERE TO GO TO Previous PAGE.</a>";
echo "<br><br><a href='Formuser.php'>CLICK HERE TO GO TO HOME PAGE.</a>";
}
}

?>