<?php
include("header.php");
include("slider.php");
?>

<?php
extract($_POST);
if(isset($check))
{
$q1="select * from tempcart where id='$pid' and buy=0";
$result=mysqli_query($con,$q1);


?>


       <?php
  $s=1;
  if(mysqli_num_rows($result)>0)
{
	$total=0;
	$gtotal=0;
	while($a=mysqli_fetch_array($result))
	{
		$pid=$a['pid'];
		$q3="select pname,price from product where pid='$pid'";
		$res=mysqli_query($con,$q3);
		$arr=mysqli_fetch_array($res);
		$total=$arr['price']*$a['weight'];
		$gtotal=$gtotal+$total;
   ?>
  <tr>
    <td><?php echo $s;?></td>
    <td><?php echo $arr['pname'];?></td>
    <td><?php echo $a['pid'];?></td>
    <td><?php echo $a['weight'];;?></td>
    <td><?php echo $arr['price'];?></td>
    <td><?php echo $total;?></td>
  </tr>
  <?php 
	$s++;
	}
  }else
 {?>
 

  </tr>
  <?php }}?>
  
  <br>
  <br>
   

 
 
  <!DOCTYPE html>
<html>
<head>
  
</head>
<body>

<div class="container">
  <h2>Your Cart</h2>
  <p>Product in Your Cart</p>                                                                                      
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>S.No.</th>
        <th>Product Name</th>
        <th>Product Category</th>
        <th>Quantity(Weight)</th>
        <th>Quantity(In Piece(s))</th>
        <th>Price</th>
        <th>Total Price</th>
   
      </tr>
    </thead>
    <tbody>
     <?php

$sid=session_id();
include('connect.php');

//$q1="select * from tempcart where pid='$pid' and sid='$sid' and buy=0";
$q1="select product.pname,product.title,product.weight,product.price,tempcart.sid from product inner join tempcart on product.id=tempcart.pid where sid='$sid'";
$result=mysqli_query($con,$q1);
  $s=1;
  $total=0;
	$gtotal=0;
 while($c=mysqli_fetch_array($result))
 {
	$total=$c['price']*$c['weight'];
		$gtotal=$gtotal+$total;	
					
	 
 ?>
      <tr>
        <td><?php echo $s;?></td>
         <td><?php echo $c['title'];?></td>
        <td><?php echo $c['pname'];?></td>
       <td>	<div class="controls">
			<select class="table-responsive" name="weightkg">
							<option>Weight</option>
                            
                            <option><?php echo $c['weightkg'];?></option>
					 		<option>100 gram</option>
							<option>200 gram</option>
							<option>250 gram</option>
							<option>500 gram</option>
                            <option>750 gram</option>
                            <option>1 kilo gram</option>
                            <option>1.25 kilo gram</option>
                            <option>1.500 kilo gram</option>
                            <option>2 kilo gram</option>
                            <option>2.500 kilo gram</option>
                            <option>3 kilo gram</option>
                            <option>4 kilo gram</option>
                            <option>5 kilo gram</option>
                            <option>6 kilo gram</option>
                            <option>7 kilo gram</option>
                            <option>8 kilo gram</option>
                            <option>9 kilo gram</option>
                            <option>10 kilo gram</option>
                            <option>15 kilo gram</option>
                            <option>20 kilo gram</option>
                            <option>25 kilo gram</option>
                            <option>30 kilo gram</option>
                            <option>35 kilo gram</option>
                            <option>40 kilo gram</option>
                            <option>45 kilo gram</option>
                            <option>50 kilo gram</option>
                            <option>55 kilo gram</option>
                            <option>60 kilo gram</option>
                            <option>65 kilo gram</option>
                            <option>70 kilo gram</option>
                            <option>75 kilo gram</option>
                            <option>80 kilo gram</option>
                            <option>85 kilo gram</option>
                            <option>90 kilo gram</option>
                            <option>95 kilo gram</option>
                            <option>100 kilo gram</option>
                            <option>100 kilo gram +</option>
										</select>
									</div></td>
                         
        				     
        				<td>	<div class="controls">
							<select class="table-responsive" name="pc">
							<option>Select in Piece(s)</option>
                            <option><?php echo $c['pc'];?></option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
                            <option>4</option>
							<option>5</option>
							<option>6</option>
                            <option>7</option>
							<option>8</option>
							<option>9</option>
                            <option>10</option>
                            <option>11</option>
							<option>12</option>
							<option>13</option>
                            <option>14</option>
							<option>15</option>
							<option>16</option>
                            <option>16</option>
							<option>17</option>
							<option>18</option>
                            <option>19</option>
							<option>20</option>
							<option>21</option>
                            <option>22</option>
                            <option>23</option>
                            <option>24</option>
                            <option>24+</option>
							</select> </td>
									</div>
                                    		<!-- for updation of weight in kg & pieces	--> 
											 <?php
                                            $sid=session_id();
                                            extract($_POST);
                                            if(isset($check))
                                            {
                                                $inv="inv".rand();
                                                //$q="INSERT INTO `checkout` (`id`, `name`, `email`, `mobile`, `city`, `country`, `mode`, `address`, `invice`,`pmode`, `dat`) VALUES (NULL, '$name', '$email', '$mobile', '$city', '$country', '$mode', '$address', '$inv','$pmode',CURRENT_TIMESTAMP)";	
                                                $q="update tempcart weightkg='$weightkg', pc='$pc' where sid='$sid'";
                                                $res=mysqli_query($con,$q);
                                                /*	if(mysqli_query($con,$q))
                                                {
                                                     $q="update tempcart set buy=1,invice='$inv' where sid='$sid'";
                                                    
                                                    mysqli_query($con,$q);
                                                    echo '<script>thanku='.$inv.'";</script>';	
                                                    echo '<script>alert("Thanku for shopping Your order no. is '.$inv.'");location.href="index.php";</script>';
                                                }	*/
                                                
                                            }
                                            
                                            
                                            ?>
                                             
                                            <!-- for updation of weight in kg & pieces	--> 
   <!--     <td><?php echo $c['weight'];?></td>		-->
        <td><?php echo $c['price'];?></td>
        <td><?php echo $total;?></td>
 <?php
  $s++;
  }
 
	 session_destroy();
  ?>
    <tr>
  
   
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
      <td>Grand total:</td>
     <td><?php echo @$gtotal; ?></td>
  </tr>
    <tr>
    <td><a href="empty.php">Empty cart</a></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><a href="index.php">Continue</a></td>
    <td>&nbsp;</td>
    <td><a href="checkout1.php">Check out</a></td>
  </tr>
      </tr>
    </tbody>
  </table>
  </div>
</div>

</body>
</html>
<br>
<br>
 
  
  <?php
  include("footer.php");
  ?>
  
  
<?php
extract($_POST);
if(isset($check))
{
$q1="select * from tempcart where id='$pid' and buy=0";
$result=mysqli_query($con,$q1);


?>
 <!-- <table width="95%" cellspacing="2" cellpadding="2">
  <tr>
    <th >Sno</th>
    <th >Pro name</th>
    <th >pid</th>
    <th >quantity</th>
    <th >price</th>
    <th >total</th>
    </tr>
    </table>		-->
        <?php
  $s=1;
  if(mysqli_num_rows($result)>0)
{
	$total=0;
	$gtotal=0;
	while($a=mysqli_fetch_array($result))
	{
		$pid=$a['pid'];
		$q3="select pname,price from product where pid='$pid'";
		$res=mysqli_query($con,$q3);
		$arr=mysqli_fetch_array($res);
		$total=$arr['price']*$a['weight'];
		$gtotal=$gtotal+$total;
   ?>
  <tr>
    <td><?php echo $s;?></td>
    <td><?php echo $arr['pname'];?></td>
    <td><?php echo $a['pid'];?></td>
    <td><?php echo $a['weight'];?></td>
    <td><?php echo $arr['price'];?></td>
    <td><?php echo $total;?></td>
  </tr>
  <?php 
	$s++;
	}}
  }else
 ?>
 
 
 
 
 
 <?php /*

$sid=session_id();
include('connect.php');

//$q1="select * from tempcart where pid='$pid' and sid='$sid' and buy=0";
$q1="select product.pname,product.title,product.weight,product.price,tempcart.sid from product inner join tempcart on product.id=tempcart.pid where sid='$sid'";
$result=mysqli_query($con,$q1);
 echo"<table border=2>";
 echo"<tr>";
  echo"</tr>";
 while($c=mysqli_fetch_array($result))
 {
	echo"<td>$c[pname]</td><br>"; 
		echo"<td>$c[title]</td><br>"; 
			echo"<td>$c[weight]</td><br>"; 
				echo"<td>$c[price]<td><br>"; 
					echo"<td>$c[sid]<td><br>"; 
					
	 }
	 session_destroy();  */
 ?>
 
   <?php	/*
if($_SESSION['item']!=1)
{
		echo '<script></script>';
}
extract($_POST);
if(isset($check))
{
	$inv="inv".rand();
	$q="INSERT INTO `checkout` (`id`, `name`, `email`, `mobile`, `city`, `country`, `mode`, `address`, `invice`, `dat`) VALUES (NULL, '$name', '$email', '$mob', '$city', '$country', '$mode', '$address', '$inv', CURRENT_TIMESTAMP)";	
	
	if(mysqli_query($link,$q))
	{
		$q="update tempcart set buy=1,invice='$inv' where sid='$sid' and buy=0";
		mysqli_query($con,$q);
		echo '<script>alert("Thanku for shopping");location.href="index.php?thanku='.$inv.'";</script>';	
	}
	
}
*/

?>
 
 <?php	

extract($_POST);
if(isset($check))
{
	$inv="inv".rand();
	$q="INSERT INTO `checkout` (`id`, `name`, `email`, `mobile`, `city`, `country`, `mode`, `address`, `invice`,`pmode`, `dat`) VALUES (NULL, '$name', '$email', '$mobile', '$city', '$country', '$mode', '$address', '$inv','$pmode',CURRENT_TIMESTAMP)";	
	
	if(mysqli_query($con,$q))
	{
		$q="update tempcart set buy=1,invice='$inv'  and buy=0";
		mysqli_query($con,$q);
		echo '<script>thanku='.$inv.'";</script>';	
	}
	
}	
 ?>
 
 
 
   <?php	/*
if($_SESSION['item']!=1)
{
		echo '<script></script>';
}
extract($_POST);
if(isset($check))
{
	$inv="inv".rand();
	$q="INSERT INTO `checkout` (`id`, `name`, `email`, `mobile`, `city`, `country`, `mode`, `address`, `invice`, `dat`) VALUES (NULL, '$name', '$email', '$mob', '$city', '$country', '$mode', '$address', '$inv', CURRENT_TIMESTAMP)";	
	
	if(mysqli_query($con,$q))
	{
		$q="update tempcart set buy=1,invice='$inv' where sid='$sid'";
		mysqli_query($con,$q);
		echo '<script>alert("Thanku for shopping");location.href="index.php?thanku='.$inv.'";</script>';	
	}
	
}

*/
?>


<?php	/*

extract($_POST);
if(isset($check))
{
	$inv="inv".rand();
	$q="INSERT INTO `checkout` (`id`, `name`, `email`, `mobile`, `city`, `country`, `mode`, `address`, `invice`,`pmode`, `dat`) VALUES (NULL, '$name', '$email', '$mobile', '$city', '$country', '$mode', '$address', '$inv','$pmode',CURRENT_TIMESTAMP)";	
	
	if(mysqli_query($con,$q))
	{
		$q="update tempcart set buy=1,invice='$inv'  and buy=0";
		mysqli_query($con,$q);
		echo '<script>thanku='.$inv.'";</script>';	
	}
	
}

*/
?>
