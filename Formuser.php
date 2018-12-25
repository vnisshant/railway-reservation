<?php

echo "
<h1 style='background-color:powderblue;'><center>WELCOME TO IRCTC</center></h1><marquee style='border:3px' behavior='scroll' direction='right'><script language='javascript'>var today=new Date(); document.write(today);</script> </marquee><br>
<img src='bullet.jpg' width='100%' height='60%'>";

?>


<html>
<script type="text/javascript" src="script.js"></script>
<form name="form1" id="form1" method="POST" action="success.php">
<body style='background-color:powderblue'>
<center><h3 style='color:blue;'><i>Register Yourself :</i></h3></center> 

<center style='color:brown'><style='font-size:100%'><i>Enter your Name :</i></center>
<center><input type="text" id="name" name="name" size="40"></center>
<center style='color:brown'><style='font-size:100%'><i>Enter your Email address :</i></center>
<center><input type="email" id="email" name="email" size="40"></center>
<center style='color:brown'><style='font-size:100%'><i>Enter a Password :</i></center> 
<center><input type="password" id="pass" name="pass" size="40"></center>
<center style='color:brown'><style='font-size:100%'><i>Confirm Password :</i></center>
<center><input type="password" id="cpass" name="cpass" size="40"></center>
<center style='color:brown'><style='font-size:100%'><i>Enter your Phone Number :</i></center>
<center><input type="number" id="phn" name="phn" size="40"></center><br>
<center><input type="submit" id="newreg" name="newreg" value="Submit"></center><br>
<center><input type="reset" id="reset" name="reset" value="Reset"></center><br><br></body>
</form>
</html>

<html>

<script type="text/javascript" src="script1.js"></script>
<form name="form2" id="form2"  method="POST" action="login.php"> 
<hr />
<center><h3 style='color:blue'><i>Existing Users.. Login Here :</i></h3></center> 
<center style='color:brown'><style='font-size:100%'><i>Enter Your Registered EmailId :</i></center> 
<center><input type="email" id="email1" name="f" size="40"></center>
<center style='color:brown'><style='font-size=100%'><i>Enter Your Password :</i></center> 
<center><input type="password" id="pass1" name="g" size="40"></center><br>
<center><input type="submit" value="Login"> </center><br>
<center><input type="reset" id="reset" name="reset" value="Reset"></center><br><br>
<hr />
</form>
</html>

<html>
<script type="text/javascript" src="script1.js"></script>

<form name="form3" id="form3" method="POST" action="admin.php">
<center><h3 style='color:blue'><i>Admin, Login Here : </i></h3></center>
<center style='color:brown'><style='font-size=100%'><i>Enter Your EmailID :</i></center>
<center><input type="email" id="adname" name="adname" size="40"></center>
<center style='color:brown'><style='font-size:100%'><i>Enter the password here : </i></center>
<center><input type="password" id="ad" name="adminpass" size="40"></center><br>
<center><input type="submit" value="Login"></center><br>
<center><input type="reset" id="reset" name="reset" value="Reset"></center><br><br>
</form>
</html>

















