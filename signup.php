<?php    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1> Sign Up</h1>
 <form method="POST"  name="signupform"   action="/" onsubmit="return check(); "  >
 	Name <br>  <input type="text" name="name" placeholder="Enter Your Name"   onkeydown="reenter()">   <span id="nm"></span>   <br>   
    Username <br>  <input type="text" name="username" placeholder="Enter Username"  onkeyup="checkusrname()"  onkeydown="reenter()" > <span id="usr"></span> <br>Mobile No. <br> <input type="text" name="mbno" placeholder="Enter Your Mobile Number"   onkeydown="reenter()" >  <span id="mb"></span>  <br>
    Email <br> <input type="text" name="email" placeholder="Enter Your Email address"  onkeydown="reenter()" >  <span id="em"></span> <br>
    Gender  <span id ="gn" style="margin-left: 120px;"> </span>  <br>
    <input type="radio" name="gender" value="male"  onclick="reenter()"> Male <br>
    <input type="radio" name="gender" value="female"  onclick="reenter()"> Female <br>
    <input type="radio" name="gender" value="other" onclick="reenter()"> Others <br>
    <input type="submit" name="submit">
 </form>

<script type="text/javascript">
	
function checkusrname()
{    
	 var user = document.forms['signupform']['username'].value;
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {     
											if(this.readyState == 4 && this.status ==200)
												{         document.getElementById("usr").innerHTML+= this.responseText;               }
									};

 xhttp.open("GET" , "checkusername.php?user="+user ,true);
 xhttp.send();

}

function check()
{   var a =0;
  var name1 = document.forms["signupform"]["name"].value;
  var usr1 =  document.forms["signupform"]["username"].value;
  var mbno1 = document.forms["signupform"]["mbno"].value;
  var email1 = document.forms["signupform"]["email"].value;
  var gender1 = document.forms["signupform"]["gender"].value;
  
  //regex starts
  var regexemail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  var regexno = /^(\+91[\-\s]?)?[0]?(91)?[789]\d{9}$/;
   

  var regexemail2 = regexemail.test(email1);
  var regexno2 = regexno.test(mbno1);
  if(regexemail2==false)
{    document.getElementById("em").innerHTML="Please write the correct format";   a=1;        }

if(regexno2==false)
{    document.getElementById("mb").innerHTML="Please write the correct format";   a=1;        }


//regex ends
  if(name1=="" ){    document.getElementById("nm").innerHTML="Please Enter Your Name";   a=1;  }
  
  if(usr1 == "" ){    document.getElementById("usr").innerHTML="Please Enter Username";   a=1; }

  if(mbno1 == "" ){    document.getElementById("mb").innerHTML="Please Enter Your Mobile Number";  a=1;  }

  if(email1 == "" ){    document.getElementById("em").innerHTML="Please Enter Your Email";   a=1;  }

  if(gender1 == "" ){    document.getElementById("gn").innerHTML="Please Select Your gender";   a=1; }


if(a==1){     return false;   }
  else
  {  document.cookie="username="+usr1;
document.signupform.action="connsignup.php";

  }


 
}

function reenter()
{
	document.getElementById("nm").innerHTML="";
	document.getElementById("usr").innerHTML="";
	document.getElementById("mb").innerHTML="";
	document.getElementById("em").innerHTML="";
  document.getElementById("gn").innerHTML="";
}

</script>


</body>
</html>