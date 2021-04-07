
<table class="table">
	<tr>
		<th class="text-center" colspan=6><a href="admin.php?page=addvideo" class="btn btn-info">Add Video</a></th>
	</tr>
	
	<tr>
		<th>S.No.</th>
		<th>Video</th>
		<th>Description</th>
        <th>Date</th>
        <th>Delete</th>
        
	</tr>
<?php
	
	$sel=mysqli_query($con,"select * from video order by dat desc");
	$sn=1;
	while($arr=mysqli_fetch_assoc($sel))
	{
	?>
		<tr>
			<td><?=$sn;?></td>
			<td><?=$arr['code'];?></td>
            <td><?=$arr['descr'];?></td>
			<td><?=$arr['dat'];?></td>
			<td>
		<!--	<a href="admin.php?page=upvideo&uid=<?=$arr['id'];?>" class="btn btn-info">Edit</a> -->
			<a href="?page=video&delid=<?=$arr['id'];?>" class="btn btn-danger">Delete</a>
			
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
	$result=mysqli_query($con,"delete from video where id='$did'");	
}
?>


	
</table>


