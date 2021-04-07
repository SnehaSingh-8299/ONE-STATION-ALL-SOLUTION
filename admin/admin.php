<html>
<head><title>ADMIN PANEL</title></head>

</html>
<?php
session_start();
$admin=$_SESSION['sid'];
if(empty($admin))
{
	header("location:aindex.php");
}
include("connect.php");
?>
<html>
	<head>
		<title>Dashboard</title>
		<link href="boot/bootstrap.min.css" rel="stylesheet">
		<script src="boot/jquery.min.js"></script>
		<script src="boot/bootstrap.min.js"></script>
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
	</head>
	
	<body>
		<main>	
			<header>
				<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">One Station All Solution (OSAS)</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="admin.php">Home</a></li>
      
      <li><a href="#">Change Password</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome : <?=$admin;?></a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
			</header>		
			
			<div>
				<aside class="col-sm-4">
					<div class="list-group">
					<a href="?page=signup" class="list-group-item">Sign Up Form Details</a>
				  <a href="?page=email" class="list-group-item">Email Details</a>
                   <a href="?page=scontact" class="list-group-item">Contact Details</a>
				 <!-- <a href="?page=addcat" class="list-group-item">Add Category</a>
                  <a href="?page=adpro" class="list-group-item">Add Product</a> -->
                  <a href="?page=showcat" class="list-group-item">Add Category</a>
                  <a href="?page=show" class="list-group-item">Add Product</a>
                  <a href="?page=showgallery" class="list-group-item">Gallery</a>
                   <a href="?page=video" class="list-group-item">Video</a>
                   <a href="?page=order" class="list-group-item">Order</a>
                  
			</div>
				</aside>
				
				<section class="col-sm-8">
					<?php
						if(!empty($_GET['page']))
						{
							switch($_GET['page'])
							{
								case 'signup' : include('signup.php');
											break;
								case 'email' : include("email.php");
											break;
							
								case 'addcat':include("addcategory.php");
											break;
											
								case 'ucat':include("updatecategory.php");
											break;
											
								case 'adpro' : include("addproduct.php");
											break;
											
								case 'show' : include("showpro.php");
											break;
												
								case 'showcat' : include("showcat.php");
											break;	
													
								case 'ucat':include("updatecategory.php");
											break;
											
								case 'upro':include("updateproduct.php");
											break;
									
								case 'addgallery':include("addgallery.php");
											break;	
												
								case 'showgallery':include("showgallery.php");
											break;	
								case 'ugallery':include("updategallery.php");
											break;		
								case 'video':include("video.php");
											break;	
								case 'upvideo':include("updatevideo.php");
											break;	
								case 'addvideo':include("addvideo.php");
											break;	
								case 'demail':include("deleteemail.php");
											break;	
								case 'single':include("single.php");
											break;	
								case 'cright':include("centerright.php");
											break;	
								case 'scontact':include("showcontact.php");
											break;
								case 'order':include("order.php");
											break;
								case 'view':include("view.php");
											break;
								case 'vieworder':include("status.php");
											break;
								case 'tempcart':include("tempcart.php");
											break;									
								case 'check':include("checkout1.php");
											break;	
								
								
											
						/*		case 'addnew':include("addnews.php");
											break; */
							}
						}						
						?> 
				</section>						
			</div>	
		
		</main>
	</body>
</html>

<?php
// delete product
if(!empty($_GET['show&delid']))
{
	$did=$_GET['show&delid'];
	$imgname=$_GET['img'];
	@unlink($imgname['img']);
	$result=mysqli_query($con,"delete from category where id='$did'");	
	@unlink("uimages/".$imgname);	
}
?>


<!--photo gallery  -->

