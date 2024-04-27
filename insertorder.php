<?php
							 
							if(isset($_POST['submit'])) 


$a=$_POST["a"];
$b=$_POST["b"];
$c=$_POST["c"];
$d=$_POST["d"];
$e=$_POST["e"];
$f=$_POST["f"];
$g=$_POST["g"];
$h=$_POST["h"];
$i=$_POST["i"];




include("admin/config.php");

$insert="insert into tbl_order(`id`,`first_name`,`last_name`,`email_address`,
`phone_number` ,`your_address`,`state`,`city`,`pin_code`,`for_days`)
values('null','".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."')";
if(!mysql_query($insert,$con))
	
{
	echo"order not successfully";
	
}
else
{
	echo"<meta http-equiv='REFRESH' content='0;url=ordersuccess.php'>";
	
}