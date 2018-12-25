<?php
session_start();
echo $_SESSION['email'];
$x=$_POST['src'];
$y=$_POST['dest'];

if($x=="" ||$y=="")
{
echo "FILL ALL";
echo "<a href='Trains.php'>Click here to go back to the previous page</a>";
}
else
{
mysql_connect("localhost","root","");
mysql_select_db("Database");
$query="SELECT * FROM train WHERE source='$x' AND destination='$y' ";

$result=mysql_query($query);
$count=mysql_num_rows($result);
if($count==0)
{echo "Train not found";}
else
{while($row=mysql_fetch_array($result))
{
echo"<table border='2'>";
echo"<tr>";
echo"<td>".$row[0]."</td>";
echo"<td>".$row[1]."</td>";
echo"<td>".$row[2]."</td>";
echo"<td>".$row[3]."</td>";
echo"<td>".$row[4]."</td>";
echo"<td>".$row[5]."</td>";
echo"<td>".$row[6]."</td>";
echo"<td>".$row[7]."</td>";
echo"<td>".$row[8]."</td>";
echo"</tr>";
echo"</table><br>";}}

}
echo "<form method='POST' action='booking.php'>
Enter The Train Number You Want To Book : <input type='text' name='a' size='40'> <br><br>
Enter the number of seats you want to book : <input type='number' name='b' size='40'><br><br>
<input type='submit' value='Book Now'>
</form>";
?>








