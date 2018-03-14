

<form action='' method='POST'   name='updateinfo' action='/'  enctype='multipart/form-data' onsubmit="return check();">
    Select Profile Picture: <br>
    <input type='file' name='profilepic' id='fileToUpload'> <br><br>
    Select Cover Picture <br>
    <input type='file' name='coverpic' id='fileToUpload'>  <br> <br>
    Branch <br><input type='text' name='branch' >  <br><br>
    <button  >Update And Continue to Timeline</button>
    </form>  
<br>
    <div id='b'></div>
    <div id='d'></div>



<script type="text/javascript">
	
function check()
{ 
var pp = document.forms['updateinfo']['profilepic'].value;
var cp = document.forms['updateinfo']['coverpic'].value;
var bn = document.forms['updateinfo']['branch'].value;


var a;
var f;
if(pp==""||cp==""||bn=="")
{   
	document.getElementById("b").innerHTML="Please Fill All The Details To Continue To Profile";
	return false;
}
else
{
	// php starts here


	 <?php
	$filepp = $directory.basename($_FILES["profilepic"]["name"]);
	$filecp = $directory.basename($_FILES["coverpic"]["name"]);

	$arrpp=explode('.',$filepp);
	$arrcp=explode('.',$filecp);

	$extentionpp=strtolower(end($arrpp));
	$extentioncp=strtolower(end($arrcp));

	$errorpp=$_FILES["profilepic"]["error"];
	$errorcp=$_FILES["coverpic"]["error"];


	$picturetypes=array("png","jpeg");

	if($errorpp==0)
	{
		if(in_array($extentionpp, $picturetypes))
 		{
    		if($_FILES["profilepic"]["size"]<5000000)
	   		{
            }
       		else
       		{
       			$c=1;
       		}
		}
		else
		{
	       	$c=1;
		}
	}
	else
	{
	$c=1;
	}


	if($errorcp==0)
	{
		if(in_array($extentioncp, $picturetypes))
 		{
    		if($_FILES["coverpic"]["size"]<5000000)
	   		{
            }
       		else
       		{
       			$e=1;
       		}
		}
		else
		{
       		$e=1;
		}
	}
	else
	{
		$e=1;
	}

?>
a = <?php echo $c; ?>
f = <?php  echo $e; ?>
// php ends here
    if(a==1||f==1)
    {		   document.getElementById("b").innerHTML="Please Correct The Image";
       		   return false;    
     }
    else
    { 		 document.updateinfo.action="update.php";
          	
    }
}
}

</script>