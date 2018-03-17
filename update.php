<?php
session_start();
$directory = "uploads/";
$filepp = $directory.basename($_FILES["profilepic"]["name"]);
$filecp = $directory.basename($_FILES["coverpic"]["name"]);

$tmpfilepp=$_FILES["profilepic"]["tmp_name"];
$tmpfilecp=$_FILES["coverpic"]["tmp_name"];

$arrpp=explode('.',$filepp);
$arrcp=explode('.',$filecp);

$extentionpp=strtolower(end($arrpp));
$extentioncp=strtolower(end($arrcp));

$errorpp=$_FILES["profilepic"]["error"];
$errorcp=$_FILES["coverpic"]["error"];

$picturetypes=array("png","jpg","jpeg");

$sizepp = $_FILES["profilepic"]["size"];
$sizecp = $_FILES["coverpic"]["size"];          	 

$branch = $_POST['branch'];

include 'dbconnect.php';
$usrr=$_SESSION['uname'];
               echo $usrr;
          
            if($errorpp==0&&$errorcp==0)
            {
            	if(in_array($extentionpp, $picturetypes)&&in_array($extentionpp, $picturetypes))	
                {
               		
               		$sql3 = "UPDATE user SET profilepic='$filepp' , coverpic='$filecp' ,branch='$branch' WHERE username='$usrr' ;";
               		$query3=mysqli_query($conn,$sql3);
               		
               		if($query3!=0)
						{
 							if(move_uploaded_file($tmpfilepp, $filepp)&&move_uploaded_file($tmpfilecp, $filecp))
  							{   echo "HELLO";
  								echo "Added Successfully";  header("location: /timeline.php"); 
  							}
  			    		}
  			    	else
  			    	{	
                 	die("Error in inserting the images".mysqli_error($conn));
                 	}
 


                }
                else
                	echo "Error 2";
			}             
            else
            {
            	echo "Error";
            }

             

               
                
                    
?>