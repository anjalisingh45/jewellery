<?php

include("config.php");
$select="select*from tbl_show";
$result=mysql_query($select);
while(
$row=mysql_fetch_array($result))

{
	echo $row["name"];
	echo"<br/>";
	
}

?>