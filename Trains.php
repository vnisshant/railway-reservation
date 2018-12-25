

<?php
session_start();
echo $_SESSION['email'];
echo "<form method='POST' action='Trainsshow.php'>
Enter Your Source : <input type='text' name='src' id='src' size='30'><br><br>
Enter Your Destination : <input type='text' name='dest' id='dest' size='30'><br><br>
<input type='submit' value='submit here'></form>";

?>