<?php

$a=$_POST["a"];

include("config.php");

$insert="insert into tbl_catg(`id`,`category_name`)
values('null','".$a."' )";

if(!mysql_query($insert,$con))
{
	echo"Data not inserted";
	
}
else
{
	echo"Data inserted";
	
}

mysql_close($con);

?>