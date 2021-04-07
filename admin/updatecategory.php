<?php
//fetch category
$uid=$_GET['uid'];
$oldimg=$_GET['img'];
$sel=mysqli_query($con,"select * from category where id='$uid'");
$arr=mysqli_fetch_assoc($sel);


// update category
extract($_POST);
if(isset($sub))
{
	$fn=$_FILES['att']['name'];	
	$tmp=$_FILES['att']['tmp_name'];	
	$fnn=rand().$fn;
	if(empty($fn))
	{
		if(mysqli_query($con,"update category set cname='$cname' where id='$uid'"))
		{
		$_SESSION['msg']="Category Update Successfully";
		header("location:admin.php?page=showcat");	
		}
		else
		{
			$_SESSION['msg']="Category Already Exist";
		}
		
	}
	else
	{
		if(mysqli_query($con,"update category set cname='$cname', image='$fnn' where id='$uid'"))
		{
		move_uploaded_file($tmp,"uimages/".$fnn);
		unlink("uimages/".$oldimg);
		$_SESSION['msg']="Category Update Successfully";
		header("location:admin.php?page=showcat");	
		}
		else
		{
			$_SESSION['msg']="Category Already Exist";
		}
	}
}



?>




<h2>Update Category</h2>
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
					<label class="text-primary">Category Name</label>
					<input type="text" name="cname" class="form-control" value="<?=$arr['cname'];?>">
				</div>
				
				<div class="form-group">
					<label class="text-primary">Image</label>
					<input type="file" name="att" class="form-control">
				</div>
			
				<div class="form-group">
					<input type="submit" name="sub"  class="btn btn-success">
				</div>
</form>