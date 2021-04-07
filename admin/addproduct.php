<?php

extract($_POST);
if(isset($sub))
{
	$fn=$_FILES['att']['name'];
	$tmp=$_FILES['att']['tmp_name'];
	$fnn=rand().$fn;
	$id="New".rand();
	if(mysqli_query($con,"insert into product (id,pname,title,descr,image,weight,price,oprice) 
	values ('$id','$pname','$nt','$descr','$fnn','$weight','$price','$oprice')"))
	{
		move_uploaded_file($tmp,"uimages/".$fnn);
		$_SESSION['msg']="Product Added Successfully";
		header("location:admin.php?page=show");
	}
	else
	{
		$msg="Product Already Exist";
	}
	
}
?>


<h2>Add Product</h2>
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
					<select name="pname" class="form-control">
						<option hidden>Select</option>
						<?php
						$sel=mysqli_query($con,"select * from category");
						while($arr=mysqli_fetch_assoc($sel))
						{
						?>
							<option><?=$arr['cname'];?></option>
						<?php
						}				
						
						?>
					</select>
				</div>
				
				<div class="form-group">
					<label class="text-primary">Product Title</label>
					<input type="text" name="nt" required class="form-control">
				</div>
                
                <div class="form-group">
					<label class="text-primary">Weight</label>
					<input type="text" name="weight" required class="form-control">
				</div>
                
                <div class="form-group">
					<label class="text-primary">Offer Price</label>
					<input type="text" name="price" required class="form-control">
				</div>
                
                <div class="form-group">
					<label class="text-primary">Old Price</label>
					<input type="text" name="oprice" required class="form-control">
				</div>
				
				<div class="form-group">
					<label class="text-primary">Description</label>
					<textarea name="descr" class="form-control" rows=8></textarea>
				</div>
				
				<div class="form-group">
					<label class="text-primary">Image</label>
					<input type="file" name="att" required class="form-control">
				</div>
			
				<div class="form-group">
					<input type="submit" name="sub"  class="btn btn-success">
				</div>
</form>