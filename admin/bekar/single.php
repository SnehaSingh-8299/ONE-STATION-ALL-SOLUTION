<?php
include("header.php");
include("slider.php");


?>

<?php
			$sel=mysqli_query($con,"select * from product order by dat desc limit 1");
			while($arr=mysqli_fetch_array($sel))
			{
				
			?>



	
	<!-- //page -->
	<!-- Single Page -->
	<div class="banner-bootom-w3-agileits">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l"><?=$arr['pname'];?>
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="col-md-5 single-right-left ">
				<div class="grid images_3_of_2">
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="images/si.jpg">
								<div class="thumb-image">
									<img src="images/si.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>
							
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-md-7 single-right-left simpleCart_shelfItem">
				<h3><?=$arr['title'];?></h3>
				
				<p>
					<span class="item_price"><?=$arr['price'];?></span>
					<del><?=$arr['oprice'];?></del>
					<label>Free delivery</label>
				</p>
				<div class="single-infoagile">
					<ul>
						<li>
							Cash on Delivery Eligible.
						</li>
						<li>
							Shipping Speed to Delivery.
						</li>
						<li>
							Sold and fulfilled by Veg Bharat.
						</li>
						
					</ul>
				</div>
				<div class="product-single-w3l">
					<p>
						<i class="fa fa-hand-o-right" aria-hidden="true"></i>This is a
						<label>Vegetarian</label> product.</p>
					<ul>
						
					</ul>
					<p>
						<i class="fa fa-refresh" aria-hidden="true"></i>All food products are
						<label>non-returnable.</label>
                        <li>
							<?=$arr['descr'];?>
						</li>
						
                        
                        <!--  -->
                        <?php
// delete category
if(!empty($_GET['delid']))
{
	$did=$_GET['delid'];
	$imgname=$_GET['img'];
	@unlink($imgname['img']);
	$result=mysqli_query($con,"delete from category where id='$did'");	
	@unlink("uimages/".$imgname);	
}
?>

<?php
	
	$sel=mysqli_query($con,"select * from product order by dat desc");
	$sn=1;
	while($arr=mysqli_fetch_assoc($sel))
	{
	?>
		<tr>
			<td><?=$sn;?></td>
			<td><?=$arr['pname'];?></td>
			<td><img src="uimages/<?=$arr['image'];?>" height="30"></td>
			<td><?=$arr['dat'];?></td>
			<td>
			<a href="admin.php?page=ucat&uid=<?=$arr['id'];?>&img=<?=$arr['image'];?>" class="btn btn-info">Edit</a> 
			<a href="" class="btn btn-danger">Delete</a>
			
			</td>
		</tr>
	<?php
	$sn++;
	}	
	
	?>
                         <!--  -->
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
								<input type="hidden" name="amount" value="<?=$arr['price'];?>" />
								<input type="hidden" name="discount_amount" value="<?=$arr['oprice'];?> />
								<input type="hidden" name="currency_code" value="USD" />
								<input type="hidden" name="return" value=" " />
								<input type="hidden" name="cancel_return" value=" " />
								<input type="submit" name="submit" value="Add to cart" class="button" />
							</fieldset>
						</form>
					</div>

				</div>

			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //Single Page -->
	<?php
			}
			include("footer.php");
	?>