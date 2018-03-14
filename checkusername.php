<?php

// check usr name from database is same
$username =$_GET['user'];
include 'dbconnect.php';
$sql="SELECT * FROM user WHERE username='$username';";
$query=mysqli_query($conn,$sql);
$row= mysqli_num_rows($query);
if($row!=0)
{
	echo "Username is already taken";
}
?>