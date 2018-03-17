
<?php
session_start();
$user = $_POST['username'];
$name = $_POST['name'];
$mbno = $_POST['mbno'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$pass= sha1($_POST['pass']);

$_SESSION['uname']=$user;
/*                                       
additional columns in user table are id(auto increment) , profile pic , cover pic , branch

*/

include 'dbconnect.php';
$sql2 = "INSERT INTO user (name,username,password,mobileno,email,gender) VALUES ('".$name."','".$user."','".$pass."','".$mbno."','".$email."','".$gender."');";  
$query1= mysqli_query($conn,$sql2);
if($query1==0)
	{   
      die("unable to insert".mysqli_error($conn));
       
    }
    else
	{ 
          
       include 'updateinfo.php';     
    }	  
?>