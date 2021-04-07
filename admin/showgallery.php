<h2>Gallery</h2>
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
		<th class="text-center" colspan=6><a href="admin.php?page=addgallery" class="btn btn-info">Add into gallery</a></th>
	</tr>
	
	<tr>
		<th>S.No.</th>
		<th>Name</th>
		<th>Title</th>
		<th>Description</th>
		<th>Action</th>
	</tr>
<?php
	
	$sel=mysqli_query($con,"select * from photo order by dat desc");
	$sn=1;
	while($arr=mysqli_fetch_assoc($sel))
	{
	?>
		<tr>
			<td><?=$sn;?></td>
			<td><?=$arr['title'];?></td>
            <td><?=$arr['name'];?></td>
            <td><?=$arr['des'];?></td>
			<td><img src="uimages/<?=$arr['image'];?>" height="30"></td>
			
			<td>
			<a href="admin.php?page=ugallery&uid=<?=$arr['id'];?>&img=<?=$arr['image'];?>" class="btn btn-info">Edit</a> 
			<a href="?page=showgallery&delid=<?=$arr['id'];?>&img=<?=$arr['image'];?>" class="btn btn-danger">Delete</a>
			
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
	$result=mysqli_query($con,"delete from photo where id='$did'");	
	@unlink("uimages/".$imgname);	
}
?>

