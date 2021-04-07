

<h2 class="text-center" colspan=6>Signup Details</h2>
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
		<th>S.No.</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile no.</th>
        <th>Password</th>
        <th>Confirm Password</th>
		<th>Date</th>
		<th>Delete</th>
	</tr>
<?php
	
	$sel=mysqli_query($con,"select * from form order by dat desc");
	$sn=1;
	while($arr=mysqli_fetch_assoc($sel))
	{
	?>
		<tr>
			<td><?=$sn;?></td>
			<td><?=$arr['name'];?></td>
            <td><?=$arr['email'];?></td>
			
            <td><?=$arr['mobile'];?></td>
            <td><?=$arr['password'];?></td>
            <td><?=$arr['cpassword'];?></td>
			<td><?=$arr['dat'];?></td>
			<td>
			
			
			
  				<a href="?page=signup&delid=<?=$arr['id'];?>" class="btn btn-danger">Delete</a>
			
			</td>
		</tr>
	<?php
	$sn++;
	}	
	
	?>
	
</table>
<!--Signup Delete-->

<?php
// delete category
if(!empty($_GET['delid']))
{
	$did=$_GET['delid'];

	$result=mysqli_query($con,"delete from form where id='$did'");	

}
?>
















