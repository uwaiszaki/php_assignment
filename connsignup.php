<?php
$user = $_POST['username'];
$name = $_POST['name'];
$mbno = $_POST['mbno'];
$email = $_POST['email'];
$gender = $_POST['gender'];
include 'dbconnect.php';

/*                                       
additional columns in user table are id(auto increment) , profile pic , cover pic , branch

*/
$sql1 = "INSERT INTO user (name,username,mobileno,email,gender) VALUES ('$name','$username','$mbno','$email','$gender')";  
$query1 = mysqli_query($conn,$sql);
if($query1==0)
	{
      echo "Error In Inserting The Data in Database";
      include 'updateinfo.php'; 
      
	}
	else
	{
          
       include 'updateinfo.php';     
    }	
/*echo $user;
echo $name;
echo $mbno;
echo $email;
echo $gender;  */
?>