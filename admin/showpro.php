<h2>Add Product</h2>
<br/>

<?php
				if(!empty($_SESSION['msg']))
				{
				?>
					<label class="alert-danger"><?=$_SESSION['msg'];?></label>
				<?php
				unset($_SESSION['msg']);
				}
				?>


<table class="table">
	<tr>
		<th class="text-center" colspan=6><a href="admin.php?page=adpro" class="btn btn-info">Add Product</a></th>
	</tr>
	
	<tr>
		<th>S.No.</th>
		<th>Category</th>
		<th>Title</th>
		<th>Image</th>
        <th>Weight</th>
        <th>offer Price</th>
        <th>Old Price</th>
		<th>Date</th>
		<th>Action</th>
	</tr>
<?php
	
	$sel=mysqli_query($con,"select * from product order by dat desc");
	$sn=1;
	while($arr=mysqli_fetch_assoc($sel))
	{
	?>
		<tr>
			<td><?=$sn;?></td>
			<td><?=$arr['pname'];?></td>
            <td><?=$arr['title'];?></td>
			<td><img src="uimages/<?=$arr['image'];?>" height="30"></td>
            <td><?=$arr['weight'];?></td>
            <td><?=$arr['price'];?></td>
            <td><?=$arr['oprice'];?></td>
			<td><?=$arr['dat'];?></td>
			<td>
			<a href="admin.php?page=upro&uid=<?=$arr['id'];?>&img=<?=$arr['image'];?>" class="btn btn-info">Edit</a> 
			
			<!--<a href="?page=showpro&delid=<?=$arr['id'];?>&img=<?=$arr['image'];?>" class="btn btn-danger">Delete</a> -->
  				<a href="?page=show&delid=<?=$arr['id'];?>&img=<?=$arr['image'];?>" class="btn btn-danger">Delete</a>
			
			</td>
		</tr>
	<?php
	$sn++;
	}	
	
	?>
	
</table>
<!--Product-->

<?php
// delete category
if(!empty($_GET['delid']))
{
	$did=$_GET['delid'];
	$imgname=$_GET['img'];
	@unlink($imgname['img']);
	$result=mysqli_query($con,"delete from product where id='$did'");	
	@unlink("uimages/".$imgname);	
}
?>
















