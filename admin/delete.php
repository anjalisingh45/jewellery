<?php
$id=$_GET["id"];
include("config.php");

$delete= "delete from tbl_product where `id`='".$id."'";
if(!mysql_query($delete))
{
echo "not deleted";
}
else
{
	echo " <script language ='Javascript'>
		alert('Data Deleted!');
		
		</script>
		
		<meta http-equiv='REFRESH'content='0;url=show.php>";
}
?>