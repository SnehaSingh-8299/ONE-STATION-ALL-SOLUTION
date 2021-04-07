
    <!-- product right -->
			<div class="agileinfo-ads-display col-md-9">
            <div class="row">
              <?php
			$sel=mysqli_query($con,"select * from product order by dat desc limit 100");
			while($arr=mysqli_fetch_array($sel))
			{
			?>
            <div class="col-sm-4">
            <div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="uimages/<?=$arr['image'];?>" height="200" width="100">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.php?delid=<?= $arr['id']; ?>" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="single.php"><?=$arr['title'];?>, <?=$arr['weight'];?></a>
									</h4>
									<div class="info-product-price">
                                    
										<span class="item_price"><?=$arr['price'];?> Rs.</span>
									
                                    	<del><?=$arr['oprice'];?> Rs.</del>
                                    
                                        <div class="prod_details_tab"> 
                                    
                                       
                                         <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="images/favs.gif" alt="" border="0" class="left_bt" /></a> 
                                    
                                    <!--    <a href="tempcart.php?pid=<?php echo $arr['id']; ?>" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="images/favorites.gif" alt="" border="0" class="left_bt" />			-->
                                     </a> <a href="single.php?delid=<?= $arr['id']; ?>" class="prod_details">Details</a> </div>
                                     
                                              <div class="prod_details_tab"> <a href="tempcart.php?pid=<?= $arr['id']; ?>" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="images/cart.gif"  border="0" class="left_bt" />  </div>
                                    
                                      <!--   </a> <a href="index.php?detail=<?php echo $a['pid']; ?>" class="prod_details">Details</a> </div>
									
                                    </div> -->
                                    
                                    
									
                                    </div>
                                    
                                    <!--    
                                    <div class="prod_box">
        <div class="top_prod_box"></div>
        <div class="center_prod_box">
          <div class="product_title"><a href="index.php?detail=<?php echo $arr['pid']; ?>"><?php echo $arr['pname']; ?></a></div>
          <div class="product_img"><a href="index.php?detail=<?php echo $arr['pid']; ?>"><img src="uimages/<?=$arr['image'];?>" height="200" width="100"></a></div>
          <div class="prod_price"> <span class="price"><?php echo $arr['price']; ?>$</span></div>
        </div>
        <div class="bottom_prod_box"></div>
        <div class="prod_details_tab"> <a href="tempcart.php?pid=<?php echo $arr['pid']; ?>" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="images/cart.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="images/favs.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="images/favorites.gif" alt="" border="0" class="left_bt" /></a> <a href="index.php?detail=<?php echo $a['pid']; ?>" class="prod_details">details</a> </div>
      </div>


    </div>
            
                                    <!--   -->
                                     
							<!--		<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="Almonds, 100g" />
												<input type="hidden" name="amount" value="149.00" />
												<input type="hidden" name="discount_amount" value="1.00" />
												<input type="hidden" name="currency_code" value="USD" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="Add to cart" class="button" />
											</fieldset>
										</form>
									</div>     
                                   
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
								
							</fieldset>
						</form>-->
                 <!--     <button type="button" class="btn btn-info" data-toggle="modal" data-target="#mypopup">Add to Cart</button></a>		-->
                        <div id="mypopup" class="modal fade" role="dialog">
                        	<div class="modal-dialog modal-lg">
                            	<div class="modal-content">
                                
                                	<div class="modal-header">
                                		<button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4>Products</h4>
                                	</div>
                                    
                                    <div class="modal-body">
                                		<p>body content</p>
                                        
						              
	                                </div>
                                    
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#mypopup">Check Out With</button>
                                	
                                	</div>
                                    
                                </div>
                            </div>
                        </div>
            </div>
                  
            </div>
            
                  
				<div class="wrapper">
					<!-- first section (nuts) -->
					
						
						<div class="col-md-4 product-men">
							

								</div>
							
						</div>
					</div>
                             <?php
			}
			?>
                   </div>
                   
                   </div>
                   
                   </div>
                   <br>
              
					<!-- //first section (nuts) -->
            
                    
                    <?php
					include("footer.php");
					
					?>