<?php
							 include("config.php");
							if(isset($_POST['submit'])) 
 {

 //define a maxim size for the uploaded images in Kb
 define ("MAX_SIZE","10000"); 

//This function reads the extension of the file. It is used to determine if the file  is an image by checking the extension.
 function getExtension($str) {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
 }

//This variable is used as a flag. The value is initialized with 0 (meaning no error  found)  
//and it will be changed to 1 if an errro occures.  
//If the error occures the file will not be uploaded.
 $errors=0;
//checks if the form has been submitted
 if(isset($_POST['submit'])) 
 {
 	//reads the name of the file the user submitted for uploading
 	$image=$_FILES['imgName']['name'];
 	//if it is not empty
 	if ($image) 
 	{
 	//get the original name of the file from the clients machine
 		$filename = stripslashes($_FILES['imgName']['name']);
 	//get the extension of the file in a lower case format
  		$extension = getExtension($filename);
 		$extension = strtolower($extension);
 	//if it is not a known extension, we will suppose it is an error and will not  upload the file,  
	//otherwise we will do more tests
 if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) 
 		{
		//print error message
 			echo '<h1>Unknown extension!</h1>';
 			$errors=1;
 		}
 		else
 		{
//get the size of the image in bytes
 //$_FILES['image']['tmp_name'] is the temporary filename of the file
 //in which the uploaded file was stored on the server
 $size=filesize($_FILES['imgName']['tmp_name']);

 
 
//compare the size with the maxim size we defined and print error if bigger
if ($size > MAX_SIZE*10024)
{
	echo '<h1>You have exceeded the size limit!</h1>';
	$errors=1;
}

 

//we will give an unique name, for example the time in unix time format
$image_name=time().'.'.$extension;
//the new name will be containing the full path where will be stored (images folder)
$imgName="upload/".$image_name;
 
 
 

//we verify if the image has been uploaded, and print error instead
$copied = copy($_FILES['imgName']['tmp_name'], $imgName);
if (!$copied) 
{
	echo '<h1>Copy unsuccessfull!</h1>';
	$errors=1;
}

//your insert query here
$date=date("Y-m-d");
$head=$_POST["title"];
$detail=$_POST["editor"];
$sql ="INSERT INTO `tbl_blog`(
`id`,
`date`,
`head`,
`image`,
`detail` 
)
VALUES (Null,'".$date."','".$head."','".$imgName."','".$detail."')";
if (!mysql_query($sql,$con)) 
{
  echo "Error Inserting Data";
  }
  else
{
 	//echo "<body >Record Inserted</body>";
}
	 


}}}

//If no errors registred, print the success message
 if(isset($_POST['submit']) && !$errors) 
 {
 	 	echo "image uploaded succesfully";
<meta http-equiv='REFRESH' content='5;url=add_blog.php'></HEAD>
 
<BODY style='color:green'>
Blog Added! Please wait...Redirecting to the Main Page
</BODY>'";
}
 
}
 mysql_close($con);
 ?>