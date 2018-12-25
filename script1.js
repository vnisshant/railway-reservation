window.onload=initform; 
function initform()
{
document.getElementById("form2","form3").onsubmit=function() 
{
return validform();
}
}
function validform()
{
var x=document.forms["form2"]["email1"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
var password=document.getElementById("pass1").value;
else if(document.getElementById("email1").value=="")
{
alert("*Please enter your email");
return false;
}
}