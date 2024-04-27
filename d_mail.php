<?php

$name = $_POST['name'];
$email = $_POST['email'];
$mobile= $_POST['mobile'];
$message= $_POST['message'];

$subject ="Website Inquiry";

$to = "shishrawat01@gmail.com";
$body= "New Message from ".$name." \n 

Email - ".$email." \n 
Mobile:-".$mobile." \n 

Message:-".$message." 
";




mail($to, $subject, $body, "from: $email");

echo "<script language='javascript'>
{
  alert(' Thank you for your Message...');	
   
}
</script>
<meta http-equiv='REFRESH' content='5;url=contact_us.php'></HEAD>
";

?>