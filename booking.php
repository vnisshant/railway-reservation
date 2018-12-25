<?php
session_start();
echo $_SESSION['email'];
$a=$_POST['a'];
$b=$_POST['b'];

if($a=="" || $b=="")
{
	echo"Fill in all the details.<br><br>";
	echo "<a href='Trainshow.php'>CLICK HERE TO GO TO THE PREVIOUS PAGE.</a>";
}
else
{
	mysql_connect("localhost","root","");
	mysql_select_db("Database");
	$query="SELECT available FROM train WHERE number='$a'";
	$result=mysql_query($query);
	$count=mysql_num_rows($result);
	if($count==0)
	{
		echo "No such train exists.<br><br>";
		
	}
	else if($b>$result)
	{
		echo "<br><br>Booking of these number of seats not possible.<br><br>";
		echo "<a href='Trainshow.php'>Click here to go back to the previous page.</a>";
	}
	else
	{
		$query1="SELECT booked FROM train WHERE number='$a'";
		$query2="SELECT available FROM train WHERE number='$a'";
		$w=mysql_query($query1);
		$s=mysql_query($query2);
		$w = mysql_fetch_array($w);
		$s = mysql_fetch_array($s);
		$x=$w[0]+$b;
		$y=$s[0]-$b;
		$query3="UPDATE train SET available='$y' WHERE number='$a'";
		$query4="UPDATE train SET booked='$x' WHERE number='$a'";
		mysql_query($query4);
		mysql_query($query3);
		$query5="SELECT PNRi FROM train WHERE number='$a'";
		$d=mysql_query($query5);
		$d=mysql_fetch_array($d);
		$e=$_SESSION['email'];
		mysql_connect("localhost","root","");
		mysql_select_db("Database");
		$query6="INSERT INTO usertrain(trainnumber,useremail,seatsbooked,pnr) VALUES('$a','$e','$b','$d[0]')";
		mysql_query($query6);
		$d[0]=$d[0]+1;
		$query7="UPDATE train SET PNRi='$d[0]' WHERE number='$a'";
		mysql_query($query7);
		$d[0]=$d[0]-1;
		echo "<br><br>Booking Confirmed : Your PNR number genereated for this booking is ";
		echo $d[0];
    }
}
?>





