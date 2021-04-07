<?php

extract($_POST);
if(isset($sub))
{
	$fn=$_FILES['att']['name'];
	$tmp=$_FILES['att']['tmp_name'];
	$fnn=rand().$fn;
	$id="New".rand();
	if(mysqli_query($con,"insert into photo (name,title,des,image) 
	values ('$name','$nt','$des','$fnn')"))
	{
		move_uploaded_file($tmp,"uimages/".$fnn);
		$_SESSION['msg']="Gallery updated Successfully";
		header("location:admin.php?page=showgallery");
	}
	else
	{
		$msg="Photo Already Exist";
	}
	
}
?>
<h2>Add Photo into gallery</h2>
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
					
					</select>
		
	</div>
				
				<div class="form-group">
					<label class="text-primary">Name of the Photo</label>
					<input type="text" name="nt" required class="form-control">
				</div>
                
                <div class="form-group">
					<label class="text-primary">Title</label>
					<input type="text" name="name" required class="form-control">
				</div>
                
                <div class="form-group">
					<label class="text-primary">Description</label>
					<input type="text" name="des" required class="form-control">
				</div>
                
              
				<div class="form-group">
					<label class="text-primary">Image</label>
					<input type="file" name="att" required class="form-control">
				</div>
			
				<div class="form-group">
					<input type="submit" name="sub"  class="btn btn-success">
				</div>
</form>