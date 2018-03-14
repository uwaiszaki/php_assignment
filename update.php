<?

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

            
          	 
include 'dbconnect.php';

          
             $usr=$_COOKIE['username'];
               echo $name."<br>";

               $sql = "UPDATE user SET profilepic='$filepp' and coverpic='$filecp'  WHERE username='$usr' ;";
               $query=mysqli_query($conn,$sql);
               if($query!=0)
				{
 					if(move_uploaded_file($tmpfile, $file))
  					{   echo "Added Successfully";  header("location: ./timeline.php"); }
  			    }

                
                    
?>