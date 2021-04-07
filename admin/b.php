<?php
	include("connect.php");
	$sel=mysqli_query($con,"select * from product order by dat desc");
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
			
			<a href="" class="btn btn-danger">Delete</a>
			</td>
		</tr>
	<?php
	$sn++;
	}	
	
	?>