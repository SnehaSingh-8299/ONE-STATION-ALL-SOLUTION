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

<div class="center_content">
      <div class="center_title_bar">Cart</div>
 
<table width="95%" cellspacing="2" cellpadding="2">
  <tr>
    <th >Sno</th>
    <th >Pro name</th>
    <th >pid</th>
    <th >quantity</th>
    <th >price</th>
    <th >total</th>
  </tr>
 	
     
     </tr>
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
        <th>#</th>
        <th>Product Name</th>
        <th>Product Category</th>
        <th>Quantity</th>
        <th>Price</th>
   
      </tr>
    </thead>
    <tbody>
     <?php

$sid=session_id();
include('connect.php');

//$q1="select * from tempcart where pid='$pid' and sid='$sid' and buy=0";
$q1="select product.pname,product.title,product.weight,product.price,tempcart.sid from product inner join tempcart on product.id=tempcart.pid where sid='$sid'";
$result=mysqli_query($con,$q1);

 while($c=mysqli_fetch_array($result))
 {
	
					
	 
 ?>
      <tr>
        <td>1</td>
        <td><?php echo $c['pname'];?></td>
        <td><?php echo $c['title'];?></td>
        <td><?php echo $c['weight'];?></td>
        <td><?php echo $c['price'];?></td>
        <td>USA</td>
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
  }
	 session_destroy();
  ?>
  
  
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
 
 
 
 
 