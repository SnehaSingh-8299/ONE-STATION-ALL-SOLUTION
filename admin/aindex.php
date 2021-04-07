<?php

include("connect.php");
extract($_POST);
if(isset($login))
{
	$sel=mysqli_query($con,"select * from admin where email='$em'");
	$arr=mysqli_fetch_assoc($sel);
	if($em==$arr['email'] && sha1($pass)==$arr['password'])
	{
		session_start();
		$_SESSION['sid']=$em;
		header("location:admin.php?page=ind");
	}
	else
	{
		$msg="Invalid User Name or Password";
	}	
}
?>


<html>
	<head>
		<title>Admin Panel</title>
		
		<link href="css/bootstrap.css" rel="stylesheet">
		
		<script src="js/bootstrap.js"></script>
		
	</head>
	
	<body>
		<main>
			<header class="jumbotron"><h1 class="text-center">Admin Panel</h1></header>
			
			
			<form method="post">
			<div class="container">
			
				<?php
				if(!empty($msg))
				{
				?>
					<label class="alert-danger"><?=$msg;?></label>
				<?php
				}
				?>
			
				<div class="form-group">
					<label class="text-primary">Enter Email</label>
					<input type="email" name="em" required class="form-control">
				</div>
				
				<div class="form-group">
					<label class="text-primary">Enter Password</label>
					<input type="password" name="pass" required class="form-control">
				</div>
			
				<div class="form-group">
					<input type="submit" name="login" value="Login" class="btn btn-success">
				</div>
			
			</div>	
			
			</form>
		</main>	
	</body>
</html>


<?php

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
		header("location:dashboard.php?page=cat");
	}
	else
	{
		$msg="Category Already Exist";
	}
}


?>

