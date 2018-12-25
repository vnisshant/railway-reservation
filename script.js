window.onload=initform; 
function initform()
{
document.getElementById("form1").onsubmit=function() 
{
return validform();
}
}
function validform()
{
var x=document.forms["form1"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
var mob=document.getElementById("phn").value;
var quo=Math.floor(mob/1000000000);
var password=document.getElementById("pass").value;
var cpassword=document.getElementById("cpass").value;
if(document.getElementById("name").value=="")
{
alert("*Please enter your name");
return false;
}
else if(document.getElementById("email").value=="")
{
alert("*Please enter your email");
return false;
}
else if(atpos<1 || dotpos<=(atpos+2) || dotpos+2>=x.length)
{alert("*Not a valid email-address");
return false;
}
else if(document.getElementById("pass").value.length<6)
{
alert("*Password too small");
return false;
}
else if(document.getElementById("cpass").value=="")
{
alert("*Please re-enter your password");
return false;
}
else if(password!=cpassword)
{alert("*Password do not match");
return false;
}
else if(document.getElementById("phn").value=="")
{alert("*Please enter your mobile no");
return false;
}
else if(document.getElementById("phn").value.length!=10)
{
alert("*invalid mobile no");
return false;
}
else if(quo<=5)
{
alert("*Invalid mobile no");
return false;
}
}