<?php
session_start();
$username = $_POST['username'];
$pass = $_POST['password'];
$pass1= sha1($pass);
$remme = $_POST['remme'];
include 'dbconnect.php';
$sql="SELECT * FROM user WHERE username='$username' and password='$pass1';"; 
$query=mysqli_query($conn,$sql);
$row=mysqli_num_rows($query);
if($row==1)
{
$_SESSION['username']=$username;
header('location: /timeline.php');	
}
else
{
	echo "Username or Password Incorrect"; header('location: /login.php');
}
?>