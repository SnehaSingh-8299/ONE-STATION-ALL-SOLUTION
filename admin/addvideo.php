 
<?php
//database connectivity
include("connect.php");

if(isset($_POST["add"]))
{
	//fetching value from form
	$code=$_POST["code"];
	$descr=$_POST["descr"];
	
	//inserting records into login table
	$ins="insert into video(code,descr)values('$code','$descr')";
	//executing query
	$b=mysqli_query($con,$ins);
	if($b)
	{
		//redirecting page to fetch.php
		header("location:admin.php?page=video");
	}

}

?>


<?php
//database connectivity
include("connect.php");
//fetching records
$a="select * from video";
//executing query
$b=mysqli_query($con,$a);

?>
<form method="post" enctype="multipart/form-data" autocomplete="off">

<div class="form-group">
					<label class="text-primary">Enter the Code</label>
					<input type="text" name="code" class="form-control" >
				</div>
				
		<div class="form-group">
					<label class="text-primary">Enter the description</label>
					<input type="text" name="descr" class="form-control" >
				</div>		
			
				<div class="form-group">
					<input type="submit" name="add"  class="btn btn-success">
				</div>
</form>
