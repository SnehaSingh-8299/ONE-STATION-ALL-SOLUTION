<?php
include("header.php");
?>

<?php
include("slider.php");
?>
	<!-- contact page -->
	<div class="contact-w3l">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Contact Us
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<!-- contact -->
			<div class="contact agileits">
				<div class="contact-agileinfo">
					<div class="contact-form wthree">
						<form  method="post">
							<div class="">
								<input type="text" name="name" placeholder="Name" required>
							</div>
							<div class="">
								<input class="text" type="text" name="subject" placeholder="Subject" required>
							</div>
							<div class="">
								<input class="email" type="email" name="email" placeholder="Email" required>
							</div>
							<div class="">
								<textarea placeholder="Message" name="message" required></textarea>
							</div>
							<input type="submit" name="submit" value="Submit">
						</form>
					</div>
					<div class="contact-right wthree">
						<div class="col-xs-7 contact-text w3-agileits">
							<h4>GET IN TOUCH :</h4>
							<p>
								<i class="fa fa-map-marker"></i>BOOTY MORE HANUMAN NAGAR, NEAR GYM KHANA CLUB, RANCHI-9(JH.)</p>
							<p>
								<i class="fa fa-phone"></i> Mobile : +917070095108</p>
								<p>
					<!--		<i class="fa fa-fax"></i> FAX : +1 888 888 4444</p> -->
							<p>  
								<i class="fa fa-envelope-o"></i> Email :
								<a href="mailto:example@mail.com">royalveg07@gmail.com</a>
							</p>
						</div>
						<div class="col-xs-5 contact-agile">
							<img src="images/contact2.jpg" alt="">
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!-- //contact -->
		</div>
	</div>
	<!-- map -->
	<div class="map w3layouts">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55565170.29301636!2d-132.08532758867793!3d31.786060306224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1512365940398"
		    allowfullscreen></iframe>
	</div>
	<!-- //map -->
	
    <?php
    include("connect.php");
	if(isset($_POST["submit"]))

	{
	$name=$_POST["name"];
	$subject=$_POST["subject"];
	$email=$_POST["email"];
	$message=$_POST["message"];
	$ins="insert into contact (name,subject,email,message) values('$name','$subject','$email','$message')";
	$b=mysqli_query($con,$ins);
	if($b)
	{
		echo "successful";
		}
		
		}
	
	
	?>
    <?php
include("footer.php");
?>