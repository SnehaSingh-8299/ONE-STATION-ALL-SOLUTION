<?php
//fetch category
$uid=$_GET['uid'];
$oldimg=$_GET['img'];
$sel=mysqli_query($con,"select * from product where id='$uid'");
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
		if(mysqli_query($con,"update product set pname='$pname',title='$nt',weight='$weight',price='$price',oprice='$oprice' where id='$uid'"))
		{
		$_SESSION['msg']="Product Update Successfully";
		header("location:admin.php?page=show");	
		}
		else
		{
			$_SESSION['msg']="gallery content already Exist";
		}
		
	}
	else
	{
		if(mysqli_query($con,"update category set pname='$pname', image='$fnn', weight='$weight' , price='$price' , oprice='$oprice' where id='$uid'"))
		{
		move_uploaded_file($tmp,"uimages/".$fnn);
		unlink("uimages/".$oldimg);
		$_SESSION['msg']="Category Update Successfully";
		header("location:admin.php?page=show");	
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
					<label class="text-primary">Product Name</label>
					<input type="text" name="pname" class="form-control" value="<?=$arr['pname'];?>">
				</div>
				
				<div class="form-group">
					<label class="text-primary">Image</label>
					<input type="file" name="att" class="form-control">
				</div>
                
                <div class="form-group">
					<label class="text-primary">Title</label>
					<input type="text" name="nt" class="form-control"value="<?=$arr['title'];?>">
				</div>
                
                <div class="form-group">
					<label class="text-primary">Weight</label>
					<input type="text" name="weight" class="form-control"value="<?=$arr['weight'];?>">
				</div>
                
                <div class="form-group">
					<label class="text-primary">Price</label>
					<input type="text" name="price" class="form-control"value="<?=$arr['price'];?>">
				</div>
                
                <div class="form-group">
					<label class="text-primary">Offer Price</label>
					<input type="text" name="oprice" class="form-control"value="<?=$arr['oprice'];?>">
				</div>
			
				<div class="form-group">
					<input type="submit" name="sub"  class="btn btn-success">
				</div>
</form>


<?php
// delete category
if(!empty($_GET['delid']))
{
	$did=$_GET['id'];
	$imgname=$_GET['img'];
	@unlink($imgname['img']);
	$result=mysqli_query($con,"delete from product where id='$did'");	
	@unlink("uimages/".$imgname);	
}
?>