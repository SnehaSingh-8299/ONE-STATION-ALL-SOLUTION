
<table class="table">
<th>	<h2 class="text-center" colspan=6>Contact Details</h2>
<br/>
	
	<tr>
		<th>S.No.</th>
        <th>Name.</th>
		<th>Email</th>
        <th>Subject</th>
		<th>Message</th>
        <th>Date</th>
		<th>Delete</th>
	</tr>
    
    
    <?php
	
	$sel=mysqli_query($con,"select * from contact order by dat desc");
	$sn=1;
	while($arr=mysqli_fetch_assoc($sel))
	{
	?>
		<tr>
			<td><?=$sn;?></td>
			<td><?=$arr['name'];?></td>
			<td><?=$arr['email'];?></td>
			<td><?=$arr['subject'];?></td>
            <td><?=$arr['message'];?></td>
            <td><?=$arr['dat'];?></td>
			<td>
			<a href="?page=scontact&delid=<?=$arr['id'];?>" class="btn btn-danger">Delete</a>
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
	
	$result=mysqli_query($con,"delete from contact where id='$did'");	

}
?>

