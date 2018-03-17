<?php 
session_start();
echo $_SESSION['uname'];
echo "<br>HELLO"; 
?>
<form action=" " method='POST'   name='updateinfo'   enctype='multipart/form-data' onsubmit="return check();">
    Select Profile Picture: <br>
    <input type='file' name='profilepic' > <br><br>
    Select Cover Picture <br>
    <input type='file' name='coverpic' >  <br> <br>
    Branch <br><input type='text' name='branch' >  <br><br>
    <input type="submit" value="submit">
    </form>  
<br>
    <div id="b"></div>



<script type="text/javascript">
	
function check()
{ 
var pp = document.forms['updateinfo']['profilepic'].value;
var cp = document.forms['updateinfo']['coverpic'].value;
var bn = document.forms['updateinfo']['branch'].value;

if(pp==""||cp==""||bn=="")
{   
	document.getElementById("b").innerHTML="Please Fill All The Details To Continue To Profile";
	return false;
	
}
else
{

document.updateinfo.action="update.php";    


}
}
</script>


