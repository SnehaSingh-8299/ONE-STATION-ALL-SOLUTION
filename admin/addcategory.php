<?php
include("connect.php");
extract($_POST);
if(isset($sub))
{
	$fn=$_FILES['att']['name'];
	$tmp=$_FILES['att']['tmp_name'];
	$fnn=rand().$fn;
	
	if(mysqli_query($con,"insert into category (cname,image) values ('$cname','$fnn')"))
	{
		move_uploaded_file($tmp,"uimages/".$fnn);
		$_SESSION['msg']="Category Added Successfully";
		header("location:admin.php?page=showcat");
	}
	else
	{
		$msg="Category Already Exist";
	}
}


?>


<h2>Add Category</h2>
<br/>


<?php
				if(!empty($msg))
				{
				?>
					<label class="alert-danger"><?=$msg;?></label>
				<?php
				}
				?>


<form method="post" enctype="multipart/form-data" autocomplete="off">

<div class="form-group">
					<label class="text-primary">Category Name</label>
					<input type="text" name="cname" required class="form-control">
				</div>
				
				<div class="form-group">
					<label class="text-primary">Image</label>
					<input type="file" name="att" required class="form-control">
				</div>
			
				<div class="form-group">
					<input type="submit" name="sub"  class="btn btn-success">
				</div>
</form>