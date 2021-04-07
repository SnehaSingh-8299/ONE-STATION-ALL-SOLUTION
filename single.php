<?php
include("topheader.php");
include("bottomheader.php");
include("banner.php");


?>

	<?php
	if(!empty($_GET['delid']))
	{
	$did=$_GET['delid'];
	$sel=mysqli_query($con,"select * from product where id='$did' ");
	$arr=mysqli_fetch_assoc($sel);
	?>

	<!-- Single Page -->
	<div class="banner-bootom-stores-electronicsits py-5">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-storesl text-center mb-lg-5 mb-sm-4 mb-3">
				<span><?=$arr['pname'];?></span>
				</h3>
			<!-- //tittle heading -->
			<div class="row">
				<div class="col-lg-5 col-md-8 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="images/si1.jpg">
									<div class="thumb-image">
										<img src="admin/uimages/<?=$arr['image']?>" height="100%" width="100%">
									</div>
								</li>
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="col-lg-7 single-right-left simpleCart_shelfItem">
					<h3 class="mb-3"><?=$arr['title'];?></h3>
					<p class="mb-3">
						<span class="item_price"><?=$arr['price'];?>/- Rs.</span>
						<del class="mx-2 font-weight-light"><?=$arr['oprice'];?>/- Rs.</del>
						<label>Free delivery</label>
					</p>
					<div class="single-infoelectronics">
						<ul>
							<li class="mb-3">
								Cash on Delivery Eligible.
							</li>
							<li class="mb-3">
								Shipping Speed to Delivery.
							</li>
							<!--<li class="mb-3">
								EMIs from $655/month.
							</li>
							<li class="mb-3">
								Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C
							</li>-->
						</ul>
					</div>
					<div class="product-single-storesl">
						<p class="my-3">
							<i class="far fa-hand-point-right mr-2"></i>
							<!--<label>1 Year</label> Manufacturer Warranty</p>-->
						<ul>
							<li class="mb-1">
								<?=$arr['descr'];?>
							</li>
							<!--<li class="mb-1">
								5.5 inch Full HD Display
							</li>
							<li class="mb-1">
								13MP Rear Camera | 8MP Front Camera
							</li>
							<li class="mb-1">
								3300 mAh Battery
							</li>
							<li class="mb-1">
								Exynos 7870 Octa Core 1.6GHz Processor
							</li>-->
						</ul>
						<p class="my-sm-4 my-3">
							<i class="fas fa-retweet mr-3"></i>Net banking & Credit/ Debit/ ATM card
						</p>
					</div>
					<div class="occasion-cart">
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
							<form action="#" method="post">
								<fieldset>
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="business" value=" " />
									<input type="hidden" name="item_name" value="<?=$arr['title'];?>" />
									<input type="hidden" name="amount" value="<?=$arr['oprice'];?>" />
									<input type="hidden" name="discount_amount" value="<?=$arr['price'];?>" />
									<input type="hidden" name="currency_code" value="INR" />
									<input type="hidden" name="return" value=" " />
									<input type="hidden" name="cancel_return" value=" " />
									<input type="submit" name="submit" value="Add to cart" class="button" />
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Single Page -->
																										 
	<?php
	}
	?>																								 
																										 
																										 
<?php
include("middle.php");
include("footer.php");
?>
	