
<table class="table">
<th>	<h2 class="text-center" colspan=6>Email Details</h2>
<br/>
	
	<tr>
		<th>S.No.</th>
		<th>EMAIL</th>
		<th>Date</th>
		<th>Delete</th>
	</tr>
    
    
    <?php
	
	$sel=mysqli_query($con,"select * from email order by dat desc");
	$sn=1;
	while($arr=mysqli_fetch_assoc($sel))
	{
	?>
		<tr>
			<td><?=$sn;?></td>
			<td><?=$arr['email'];?></td>
			<td><?=$arr['dat'];?></td>
			<td>
			
			<a href="?page=email&delid=<?=$arr['id'];?>" class="btn btn-danger">Delete</a>
			
			</td>
		</tr>
	<?php
	$sn++;
	}	
	
	?>
    </table>
    
    
    <?php
// delete category
if(!empty($_GET['delid']))
{
	$did=$_GET['delid'];
	
	$result=mysqli_query($con,"delete from email where id='$did'");	

}
?>

