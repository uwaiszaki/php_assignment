<?php 
session_start();
echo "<div id='content0'> ";
echo '<div id="navbar" >
<ul>
<li class="li" ><a class="ab" style="text-decoration: none;color: white;float: left; font-size: 30px; " href="login.php" title="Login If Already Registered"><b> Login</b></a></li> 
<li class="li" > <a class="ab" style="text-decoration: none;color: white;float: center; font-size: 30px; margin-left:1000px;" href="signup.php" title="Signup If New"><b >Signup</b></a>  </li> 

</ul>
</div>';

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
<style type="text/css">
ul{
  list-style-type: none;
  font-size: 30px;
  background-color:#333;
  height: 50px; 
  margin:0px 15px 0px 0px;
  text-align: center;

}

#navbar{
    background-color: #333;

  position:fixed;
  top: 0;
    width: 1450px;
    margin-left:0;
    margin-right: 0;
}


li {    
   display: inline;
  
   
}

  




.content{
  overflow: hidden;
}
</style>

</head>
<body>
<div style="background:url('login.jpg') fixed no-repeat ; background-size:cover; height: 800px; color:black; outline: 10px #333 solid;" > <div id="name" style="position: absolute; top:300px; left: 12cm; font-size: 50px; "> </div>  </div>
</div>


  
<script >
var name=['My Name Is Uwais Zaki'];
slider();


function slider()
{ var p=0;
  var name=["W", "e", "l","c","o","m","e ","T","o ","M","y ","W","e" ,"b","s","i","t","e"];
var a=setInterval(slidename,200);
function slidename()
{           name[p];

   document.getElementById("name").innerHTML+=name[p];
   p++;
   if(p==19)
   {  
      clearInterval(a);    
     document.getElementById("name").innerHTML="";
     slider();
   }
   
}
}






</script>

</div>







</body>
</html>