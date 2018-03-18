<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form  method="POST" action="/php-assignment/connlogin.php" >
<?php
if(isset($_COOKIE['username']))
{
$username= $_COOKIE['username'];
echo "User Name <br>
<input type='text' name='username' placeholder='Enter Your Name' value=$username>	<br>
Password  <br>
<input type='password' name='password' value='password'>  <br>
Remember Me<input type='radio' name='remme' value='y'>   <br>
<input type='submit' name='submit'>";
}
else
	echo "User Name <br>
<input type='text' name='username' placeholder='Enter Your Name'>	<br>
Password  <br>
<input type='password' name='password' value='password'>  <br>
Remember Me<input type='radio' name='remme' value='y'>   <br>
<input type='submit' name='submit'>
 ";

?>


</form>


</body>
</html>


