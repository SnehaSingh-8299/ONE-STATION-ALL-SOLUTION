<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Royal Veg</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Grocery Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../css/font-awesome.css" rel="stylesheet">
	<!--pop-up-box-->
	<link href="../css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!--//pop-up-box-->
	<!-- price range -->
	<link rel="stylesheet" type="text/css" href="../css/jquery-ui1.css">
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<!-- signup Model -->
    <!-- Modal2 -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign Up </h3>
						<p>
							 Let's start your Shopping. Don't have an account?, Sign Up now,
							<a href="#" data-toggle="modal" data-target="#myModal2">
								Sign Up Now</a>
						</p>
						<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Enter Your Name" name="name" required>
							</div>
							<div class="styled-input">
								<input type="text" placeholder="Enter Your Email Id" name="email" required>
							</div>
                            <div class="styled-input">
								<input type="text" placeholder="Enter Your Mobile No." name="mob" required>
							</div>
                            <div class="styled-input">
								<input type="password" placeholder="Create Your Password" name="password" required>
							</div>
                            <div class="styled-input">
                            Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="radio"name="gender"value="male" required onClick="valid()">Male &nbsp;&nbsp;
								<input type="radio"name="gender"value="female" required>Female &nbsp;&nbsp;
                                <input type="radio"name="gender"value="other" required>Other
							</div>
                            <br>
                           
                           <div class="styled-input">
                           <input type="radio"name="tnc"value="tnc" required onClick="valid()"> I agree with all terms and conditions. 
							</div>             
							<input type="submit" name="submit" value="SignUp">
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //Modal content-->
            <!-- Database Insertion >
            <?php
			include("connect");
			if(isset($_POST["submit"]))
			{
				//fetching value from form
				$name=$_POST["name"];
				$email=$_POST["email"];
				$mob=$_POST["mob"];
				$password=$_POST["password"];
				$gender=$_POST["gender"];
				//insertion records in signup form 
				$ins="insert into form(name,email,mob,password,gender) values('$name','$email','$mob','$password','$gender')";
				$b=mysqli_query($con,$ins);
				
			}
		
			?>
            
            <!-- signup Model -->
    <!-- Modal2 -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign Up </h3>
						<p>
							 Let's start your Shopping. Don't have an account?, Sign Up now,
							<a href="#" data-toggle="modal" data-target="#myModal2">
								Sign Up Now</a>
						</p>
						<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Enter Your Name" name="name" required>
							</div>
							<div class="styled-input">
								<input type="text" placeholder="Enter Your Email Id" name="email" required>
							</div>
                            <div class="styled-input">
								<input type="text" placeholder="Enter Your Mobile No." name="mob" required>
							</div>
                            <div class="styled-input">
								<input type="password" placeholder="Create Your Password" name="password" required>
							</div>
                            <div class="styled-input">
                            Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="radio"name="gender"value="male" required onClick="valid()">Male &nbsp;&nbsp;
								<input type="radio"name="gender"value="female" required>Female &nbsp;&nbsp;
                                <input type="radio"name="gender"value="other" required>Other
							</div>
                            <br>
                           
                           <div class="styled-input">
                           <input type="radio"name="tnc"value="tnc" required onClick="valid()"> I agree with all terms and conditions. 
							</div>             
							<input type="submit" name="submit" value="SignUp">
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //Modal content-->
            <!-- Database Insertion >
            <?php
			include("connect");
			if(isset($_POST["submit"]))
			{
				//fetching value from form
				$name=$_POST["name"];
				$email=$_POST["email"];
				$mob=$_POST["mob"];
				$password=$_POST["password"];
				$gender=$_POST["gender"];
				//insertion records in signup form 
				$ins="insert into form(name,email,mob,password,gender) values('$name','$email','$mob','$password','$gender')";
				$b=mysqli_query($con,$ins);
				
			}
		
			?>
            
            
            