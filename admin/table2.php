<?php include ("header.php");?>

        </nav> <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Show Product</h1>
                        <h1 class="page-subhead-line">show product form. </h1>

                    </div><Br/>
		<Br/> <Br/> <Br/>
		
		<!-- /. TABLE SIDE  -->
		
		<table  style="width:100%" border="1"  >
		<tr>
		<th>Category</th>
		<th>product</th>
		<th>price</th>
		<th>selling price</th>
		<th>Action</th>
		</tr>
		<?php

include("config.php");
$select="select * from  tbl_product";
$result=mysql_query($select);
while($row=mysql_fetch_array($result))

{
	

?>
	<tr>
<td><?php echo $row["category"];?></td>	
<td><?php echo $row["product"];?></td>	
<td><?php echo $row["price"];?></td>	
<td><?php echo $row["selling price"];?></td>	
<td><a href="edit.php?id=<?php echo $row["id"];?>">Edit</a> | <a href="delete.php?id=<?php echo $row["id"];?>">Delete</a></td>
</tr>

<?php }	?>
		</table>
		