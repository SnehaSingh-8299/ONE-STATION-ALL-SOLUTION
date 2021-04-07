<?php
//fetch category
$id=$_GET['uid'];
$oldimg=$_GET['img'];
$sel=mysqli_query($con,"select * from photo where id='$id'");
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
		if(mysqli_query($con,"update photo set name='$name',title='$title',des='$des',image='$image' where id='$uid'"))
		{
		$_SESSION['msg']="Gallery Update Successfully";
		header("location:admin.php?page=showgallery");	
		}
		else
		{
			$_SESSION['msg']="Gallery Content Already Exist";
		}
		
	}
	else
	{
		if(mysqli_query($con,"update category set name='$name', image='$fnn' where id='$uid'"))
		{
		move_uploaded_file($tmp,"uimages/".$fnn);
		unlink("uimages/".$oldimg);
		$_SESSION['msg']="Gallery Content Update Successfully";
		header("location:admin.php?page=showgallery");	
		}
		else
		{
			$_SESSION['msg']="Gallery Content Already Exist";
		}
	}
}



?>




<h2>Update Gallery</h2>
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
					<label class="text-primary">Name</label>
					<input type="text" name="name" class="form-control" value="<?=$arr['title'];?>">
				</div>
				
                <div class="form-group">
					<label class="text-primary">Title</label>
					<input type="text" name="name" class="form-control" value="<?=$arr['name'];?>">
				</div>
                
                <div class="form-group">
					<label class="text-primary">Description</label>
					<input type="text" name="name" class="form-control" value="<?=$arr['des'];?>">
				</div>
                
				<div class="form-group">
					<label class="text-primary">Image</label>
					<input type="file" name="att" class="form-control" value="<?=$arr['image'];?>>
				</div>
			
				<div class="form-group">
					<input type="submit" name="sub"  class="btn btn-success">
				</div>
</form>