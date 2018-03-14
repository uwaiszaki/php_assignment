<?php  session_start();     $usr=$_SESSION['username'];   ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form enctype='multipart/form-data' method="POST" name="updatepp" action="/">
	Update Profile Pic<br><input type="file" name="profilepic" >
</form> <br> <br> <br>

<form enctype='multipart/form-data' method="POST" name="updatecp" action="/">
	Update Profile Pic<br><input type="file" name="coverpic" >
</form> <br> <br> <br>

<button onclick="function Changepass(){  window.open('passchange.php');  }">Change Password</button>
<br> <br> <br>
<button  onclick="save()"></button> 

<script type="text/javascript">
	
function save()
{

var pp=document.forms['updatepp']['profilepic'].value;
var cp=document.forms['updatecp']['coverpic'].value;
if(pp=="")
{   
	
	<?php
	
	$filepp = $directory.basename($_FILES["profilepic"]["name"]);
	$arrpp=explode('.',$filepp);
	$extentionpp=strtolower(end($arrpp));
	$errorpp=$_FILES["profilepic"]["error"];
	$picturetypes=array("png","jpeg");
	

	if($errorpp==0)
	{
		if(in_array($extentionpp, $picturetypes))
 		{
    		if($_FILES["profilepic"]["size"]<5000000)
	   		{   
             include 'dbconnect.php';
             $sql = "UPDATE user SET profilepic='$filepp' WHERE username='$usr' ;";
               $query=mysqli_query($conn,$sql);
               if($query!=0)
				{
 					if(move_uploaded_file($tmpfile, $filepp))
  					{   echo "Added Successfully";  header("location: ./timeline.php"); }
  			    }


            }
       		else
       		{
       			die("ERROR in size");
       		}
		}
		else
		{
	       die("file not in png , jpg ,jpeg");
		}
	}
	else
	{
          die("ERROR");	
	}
  
    ?>

    
}

if(cp=="")
{   <?php
	$filecp = $directory.basename($_FILES["coverpic"]["name"]);
	$arrcp=explode('.',$filecp);
	$extentioncp=strtolower(end($arrcp));
	$errorcp=$_FILES["coverpic"]["error"];
	$picturetypes=array("png","jpeg","jpg");
	

	if($errorcp==0)
	{
		if(in_array($extentioncp, $picturetypes))
 		{
    		if($_FILES["coverpic"]["size"]<5000000)
	   		{ 
             include 'dbconnect.php';
             $sql = "UPDATE user SET coverpic='$filecp' WHERE username='$usr' ;";
               $query=mysqli_query($conn,$sql);
               if($query!=0)
				{
 					if(move_uploaded_file($tmpfile, $filecp))
  					{   echo "Added Successfully";  header("location: ./timeline.php"); }
  			    }


            }
       		else
       		{
       			die("ERROR in size");
       		}
		}
		else
		{
	       die("file not in png , jpg ,jpeg");
		}
	}
	else
	{
          die("ERROR");	
	}
  


   ?>
}

}

</script>

</body>
</html>