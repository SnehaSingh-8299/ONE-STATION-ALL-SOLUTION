<?php
//fetch category
$uid=$_GET['uid'];

$sel=mysqli_query($con,"select * from video where id='$uid'");
$arr=mysqli_fetch_assoc($sel);


// update category
extract($_POST);
if(isset($sub))
{
	
	if(empty($fn))
	{
		if(mysqli_query($con,"update category set code='$code',descr='$descr' where id='$uid'"))
		{
		$_SESSION['msg']="Category Update Successfully";
		header("location:admin.php?page=video");	
		}
		else
		{
			$_SESSION['msg']="Category Already Exist";
		}
		
	}
	else
	{
		if(mysqli_query($con,"update category set cname='$cname', descr='$descr' where id='$uid'"))
		{
		move_uploaded_file($tmp,"uimages/".$fnn);
		unlink("uimages/".$oldimg);
		$_SESSION['msg']="Category Update Successfully";
		header("location:admin.php?page=video");	
		}
		else
		{
			$_SESSION['msg']="Category Already Exist";
		}
	}
}



?>




<h2>Update Video</h2>
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


<form method="post" enctype="multipart/form-data" autocomplete="off">

<div class="form-group">
					<label class="text-primary">Update link</label>
					<input type="text" name="code" class="form-control" value="<?=$arr['code'];?>">
				</div>
				
                <div class="form-group">
					<label class="text-primary">Update Description</label>
					<input type="text" name="descr" class="form-control" value="<?=$arr['descr'];?>">
				</div>
				
			
				<div class="form-group">
					<input type="submit" name="sub"  class="btn btn-success">
				</div>
</form>
