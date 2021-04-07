<?php
include("header.php");
include("slider.php");

?>



<?php
$sid=session_id();
extract($_POST);
if(isset($check))
{
	$inv="inv".rand();
	$q="INSERT INTO `checkout` (`id`, `name`, `email`, `mobile`, `city`, `country`, `mode`, `address`, `invice`,`pmode`, `dat`) VALUES (NULL, '$name', '$email', '$mobile', '$city', '$country', '$mode', '$address', '$inv','$pmode',CURRENT_TIMESTAMP)";	
	
	if(mysqli_query($con,$q))
	{
		 $q="update tempcart set buy=1,invice='$inv' where sid='$sid'";
		
		mysqli_query($con,$q);
	//	echo '<script>thanku='.$inv.'";</script>';	
		echo '<script>alert("Thanku for shopping Your order no. is '.$inv.'");location.href="index.php";</script>';
	}
	
}


?>



  <?php
/*if($_SESSION['item']!=1)
{
		echo '<script>;</script>';
}
extract($_POST);
if(isset($check))
{
	$inv="inv".rand();
	$q="INSERT INTO `checkout` (`id`, `name`, `email`, `mobile`, `city`, `country`, `mode`, `address`, `invice`, `dat`) VALUES (NULL, '$name', '$email', '$mob', '$city', '$country', '$mode', '$address', '$inv', CURRENT_TIMESTAMP)";	
	
	if(mysqli_query($link,$q))
	{
		$q="update tempcart set buy=1,invice='$inv' where sid='$sid' and buy=0";
		mysqli_query($link,$q);
		echo '<script>alert("Thanku for shopping");location.href="index.php?thanku='.$inv.'";</script>';	
	}
	
}

*/
?>
  <div class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-10">

<div class="checkout-left">
				<div class="address_form_agile">
					<h4>Add your Details</h4>
					<form method="post" >
						
                        <div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
									<div class="controls">
										<input class="billing-address-name" type="text" name="name" placeholder="Full Name" required>
									</div>
                                    
                                    <div class="controls">
										<input class="billing-address-name" type="text" name="email" placeholder="Email" required>
									</div>
                                    
                                     <div class="controls">
										<input class="billing-address-name" type="text" name="mobile" placeholder="Mobile" required>
									</div>

                                    <div class="controls">
												<input type="text" placeholder="City" name="city" required>
											</div>
                                            
                                    <div class="controls">
												<input type="text" placeholder="Country" name="country" required>
											</div>  
                                            
                                     <div class="controls">
												<input type="text" placeholder="address" name="address" required>
											</div>                 
                                    
                                    <div class="controls">
										<select class="option-w3ls" name="mode">
											<option>Select Address type</option>
											<option>Office</option>
											<option>Home</option>
											<option>Commercial</option>

										</select>
									</div>
                                    
                                   
									<div class="controls">
										<select class="option-w3ls" name="pmode">
											<option>Select Payment type</option>
											<option>COD</option>
											<option>COD</option>
											<option>COD</option>

										</select>
									</div>
								</div>
                                
                                
                                </form>
							<!--		<div class="w3_agileits_card_number_grids">
										<div class="w3_agileits_card_number_grid_left">
											<div class="controls">
												<input type="text" placeholder="City" name="city" required>
											</div>
										</div>
                                        
                                        <div class="w3_agileits_card_number_grid_left">
											<div class="controls">
												<input type="text" placeholder="Country" name="country" required>
											</div>
										</div>
                                        
										<div class="w3_agileits_card_number_grid_right">
											<div class="controls">
												<input type="text" placeholder="Landmark" name="landmark" required>
											</div>
										</div>
										<div class="clear"> </div>
									</div>
									<div class="controls">
										<input type="text" placeholder="Town/City" name="city" required>
									</div>
									<div class="controls">
										<select class="option-w3ls">
											<option>Select Address type</option>
											<option>Office</option>
											<option>Home</option>
											<option>Commercial</option>

										</select>
									</div>
								</div>		-->
                            <!--    <input type="submit" name="check"> -->
								<button class="submit check_out" name="check">Delivery to this Address</button> 
							</div>
						</div>
					</form>
                    <br>
            </div>
  <div class="col-sm-1"></div>
  </div>
  </div>        
          </div>
          
    <?php
	
	include("footer.php");
	?>