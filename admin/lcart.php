<?php
include("header.php");
include("slider.php");

?>


<?php
$sid=session_id();
$q="select * from tempcart where sid='$sid' and buy=0";
$res=mysqli_query($con,$q);
$item=0;
$total=0;
while($a=mysqli_fetch_array($res))
{
	$pid=$a['pid'];
	$quantity=$a['weight'];
	$q1="select price from product where pid='$pid'";
	$res1=mysqli_query($con,$q1);
	$a2=mysqli_fetch_array($res1);
	$price=$a2['price'];
	$item=$item+$weight;
	$total=$total+$price*$weight;	
	
}
if($item>0)
$_SESSION['item']=1;
else
$_SESSION['item']=0;

?>


 <div class="right_content">
      <div class="shopping_cart">
        <div class="cart_title">Shopping cart</div>
        <div class="cart_details"> <?= @$item;?> items <br />
          <span class="border_cart"></span> Total: <span class="price"><?= @$total; ?>$</span> </div>
        <div class="cart_icon"><a href="index.php?checkout=1" title="header=[Checkout] body=[&nbsp;] fade=[on]"><img src="images/logo2.png" alt="" width="48" height="48" border="0" /></a></div>
      </div>
      <div class="title_box">Vegetables</div>
      <div class="border_box">
        <div class="product_title"><a href="details.html">Potato</a></div>
        <div class="product_img"><a href="details.html"><img src="admin/pimage/potato.jpg" height="60" width="100" alt="" border="0" /></a></div>
        <div class="prod_price"><span class="reduce">Not In Stock</span> <span class="price">In Stock</span></div>
      </div>
      <div class="title_box">Brands</div>
      <ul class="left_menu">
       <?php
	  	$q="select distinct title from product";
		$res=mysqli_query($con,$q);
		
		while($a=mysqli_fetch_array($res))
		{
	   ?>
      
      
        <li class="odd"><a href="index.php?brand=<?php echo $a['brand'];?>"><?php echo $a['brand'];?></a></li>
       
       
       <?php } ?>
   
      </ul>
      
      </div>
      
      <?php
	  include("footer.php");
	  
	  ?>