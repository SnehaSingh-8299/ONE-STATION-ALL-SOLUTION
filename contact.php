<?php
include("topheader.php");
include("bottomheader.php");
//include("banner.php");
?>
	<!-- contact -->
	<div class="contact py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-storesl text-center mb-lg-5 mb-sm-4 mb-3">
				<span>C</span>ontact
				<span>U</span>s
			</h3>
			
<div class="container">
  <div class="row">
	<div class="col-md-4">
	</div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="https://www.facebook.com/people/Sneha-Singh/100021709133974" target="_blank">
          <img src="image/sneha.jpg" alt="Lights" style="width:100%" height="100%" >
          <div class="caption">
			  <br>
            <p><h2><b><center>Sneha Singh</center></b></h2></p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
			<br>
			<br>
			<br>
			<!-- //tittle heading -->
			<div class="row contact-grids electronics-1 mb-5">
				<div class="col-sm-4 contact-grid electronicsinfo-6 mt-sm-0 mt-2">
					<div class="contact-grid1 text-center">
						<div class="con-ic">
							<i class="fas fa-map-marker-alt rounded-circle"></i>
						</div>
						<h4 class="font-weight-bold mt-sm-4 mt-3 mb-3">Address</h4>
						<p> S 24/6-A-3-G IndraNagar colony taktakpur
							<label>Varanasi, Uttar Pradesh India </label>
						</p>
					</div>
				</div>
				<div class="col-sm-4 contact-grid electronicsinfo-6 my-sm-0 my-4">
					<div class="contact-grid1 text-center">
						<div class="con-ic">
							<i class="fas fa-phone rounded-circle"></i>
						</div>
						<h4 class="font-weight-bold mt-sm-4 mt-3 mb-3">Call Us</h4>
						<p>+91-8299769478
							<label>+91-9169531192</label>
						</p>
					</div>
				</div>
				<div class="col-sm-4 contact-grid electronicsinfo-6">
					<div class="contact-grid1 text-center">
						<div class="con-ic">
							<i class="fas fa-envelope-open rounded-circle"></i>
						</div>
						<h4 class="font-weight-bold mt-sm-4 mt-3 mb-3">Email</h4>
						<p>
							<a href="mailto:info@example.com">snehasingh6664@gmail.com</a>
							<label>
								<a href="mailto:info@example.com">lavisnehasingh23@gmail.com</a>
							</label>
						</p>
					</div>
				</div>
			</div>
			<!-- form -->
			<form action="#" method="post">
				<div class="contact-grids1 storeselectronics-6">
					<div class="row">
						<div class="col-md-4 col-sm-4 contact-form1 form-group">
							<label class="col-form-label">Name</label>
							<input type="text" class="form-control" name="name" placeholder="" required="">
						</div>
						<div class="col-md-4 col-sm-4 contact-form1 form-group">
							<label class="col-form-label">E-mail</label>
							<input type="email" class="form-control" name="email" placeholder="" required="">
						</div>
						<div class="col-md-4 col-sm-4 contact-form1 form-group">
							<label class="col-form-label">Subject</label>
							<input type="text" class="form-control" name="subject" placeholder="" required="">
						</div>
					</div>
					<div class="contact-me animated wow slideInUp form-group">
						<label class="col-form-label">Message</label>
						<textarea name="message" class="form-control" placeholder="" required=""> </textarea>
					</div>
					<div class="contact-form">
						<input type="submit" name="submit" value="Submit">
					</div>
				</div>
			</form>
			<!-- //form -->
		</div>
	</div>
	<!-- //contact -->

	<!-- map -->
	<div class="map mt-sm-0 mt-4">
		
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3490.357590548952!2d77.73188641461205!3d28.976772875168948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390c64cf581e1e19%3A0x7b16980636869e9c!2sSir+Chhotu+Ram+Institute+of+Engineering+and+Technology%2C+Meerut!5e0!3m2!1sen!2sin!4v1557933254766!5m2!1sen!2sin" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<!-- //map -->

	
<?php
include("middle.php");
include("footer.php");
?>



		<?php
			include("admin/connect.php");
			if(isset($_POST["submit"]))
			{
				$name=$_POST["name"];
				$email=$_POST["email"];
				$subject=$_POST["subject"];	
				$message=$_POST["message"];	
				$ins="insert into contact (name,email,subject,message) values('$name','$email','$subject','$message')";
				$b=mysqli_query($con,$ins);

			}
		?>