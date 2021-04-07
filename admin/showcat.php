<h2>Category</h2>
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
		<th class="text-center" colspan=6><a href="admin.php?page=addcat" class="btn btn-info">Add Category</a></th>
	</tr>
	
	<tr>
		<th>S.No.</th>
		<th>Category</th>
		<th>Image</th>
		<th>Date</th>
		<th>Action</th>
	</tr>
<?php
	
	$sel=mysqli_query($con,"select * from category order by dat desc");
	$sn=1;
	while($arr=mysqli_fetch_assoc($sel))
	{
	?>
		<tr>
			<td><?=$sn;?></td>
			<td><?=$arr['cname'];?></td>
			<td><img src="uimages/<?=$arr['image'];?>" height="30"></td>
			<td><?=$arr['dat'];?></td>
			<td>
			<a href="admin.php?page=ucat&uid=<?=$arr['id'];?>&img=<?=$arr['image'];?>" class="btn btn-info">Edit</a> 
			<a href="?page=showcat&delid=<?=$arr['id'];?>&img=<?=$arr['image'];?>" class="btn btn-danger">Delete</a>
			
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
	$result=mysqli_query($con,"delete from category where id='$did'");	
	@unlink("uimages/".$imgname);	
}
?>





