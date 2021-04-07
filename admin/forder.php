<h1>Order</h1>
<table width="90%" align="center" border="1" cellspacing="4" cellpadding="3">
  <tr>
    <th scope="col">Sno</th>
    <th scope="col">name</th>
    <th scope="col">email</th>
    <th scope="col">mobile</th>
    <th scope="col">mode</th>
    <th scope="col">invice</th>
    <th scope="col">Order</th>
    <th scope="col">Status</th>
    <th scope="col">View</th>
  

  </tr>
   <?php 
   $s=1; 
	$q="select * from checkout order by dat desc";
	$res=mysqli_query($con,$q);
	while($a1=mysqli_fetch_array($res))
	{
	?>
  <tr>

    <td><?php echo $s;?></td>
    <td><?php echo $a1['name'];?></td>
    <td><?php echo $a1['email'];?></td>

    <td><?php echo $a1['mobile'];?></td>

    <td><?php echo $a1['mode'];?></td>

    <td><?php echo $a1['invice'];?></td>
 <!--    <td><?php echo $a1['order'];?></td> -->
    <td><?php echo $a1['status'];?></td>
        <td><a href="admin.php?view=<?php echo $a1['id'];?>">View</a></td>
    
  </tr>
  
  <?php $s++; }?>
  
<?php
include("connect.php");

//$a="select tempcart.pid,tempcart.invice,checkout.name,checkout.email,checkout.mobile,checkout.city,checkout.address,checkout.status,product.pro_name,product.price,product.quantity,product.size from tempcart inner join checkout on tempcart.id=checkout.id inner join product on tempcart.pid=product.pid order by pid desc";

$b=mysqli_query($con,$a);
echo"<table border=2>";
echo"<th>ID</th>";
echo"<th>INVICE NO.</th>";
echo"<th>NAME</th>";
echo"<th>EMAIL</th>";
echo"<th>MOBILE</th>";
echo"<th>CITY</th>";
echo"<th>ADDRESS</th>";
echo"<th>STATUS</th>";
echo"<th>Product Name</th>";
echo"<th>Price</th>";
echo"<th>Quantity</th>";
echo"<th>Product Size</th>";

while($c=mysqli_fetch_array($b))
{
	echo"<tr>";
	echo"<th>$c[pid]</th>";
	echo"<th>$c[invice]</th>";
	echo"<th>$c[name]</th>";
	echo"<th>$c[email]</th>";
	echo"<th>$c[mobile]</th>";
	echo"<th>$c[city]</th>";
	echo"<th>$c[address]</th>";
	echo"<th>$c[status]</th>";
	echo"<th>$c[pro_name]</th>";
	echo"<th>$c[price]</th>";
	echo"<th>$c[quantity]</th>";
	echo"<th>$c[size]</th>";
	}

?>
<h1>All<h1>
<?php
include("connect.php");
$a="select * from tempcart";
$b=mysqli_query($con,$a);
echo"<table border=2>";
echo"<th>PID</th>";
echo"<th>Quantity</th>";
echo"<th>Buy</th>";
echo"<th>Invice</th>";

while($c=mysqli_fetch_array($b))
{
	echo"<tr>";
	echo"<th>$c[pid]</th>";
	echo"<th>$c[quantity]</th>";
	echo"<th>$c[buy]</th>";
	echo"<th>$c[invice]</th>";
}
?>
 <h1>Temp Cart<h1>
<?php
include("connect.php");
$a="select * from checkout";
$b=mysqli_query($con,$a);
echo"<table border=2>";
echo"<th>name</th>";
echo"<th>email</th>";
echo"<th>mobile</th>";
echo"<th>city</th>";
echo"<th>country</th>";
echo"<th>mode</th>";
echo"<th>address</th>";
echo"<th>Invice</th>";
echo"<th>status</th>";
echo"<th>dat</th>";


while($c=mysqli_fetch_array($b))
{
	echo"<tr>";
	echo"<th>$c[name]</th>";
	echo"<th>$c[email]</th>";
	echo"<th>$c[mobile]</th>";
	echo"<th>$c[city]</th>";
	echo"<th>$c[country]</th>";
	echo"<th>$c[mode]</th>";
	echo"<th>$c[address]</th>";
	echo"<th>$c[invice]</th>";
	echo"<th>$c[status]</th>";
	echo"<th>$c[dat]</th>";
}
?>

 <h1>Checkout<h1>
<?php
include("connect.php");
$a="select * from product";
$b=mysqli_query($con,$a);
echo"<table border=2>";
echo"<th>PID</th>";
echo"<th>CAT_NAME</th>";
echo"<th>PRO_NAME</th>";
echo"<th>PRICE</th>";
echo"<th>OFFER PRICE</th>";
echo"<th>WEIGHT</th>";
echo"<th>dat</th>";


while($c=mysqli_fetch_array($b))
{
	echo"<tr>";
	echo"<th>$c[id]</th>";
	echo"<th>$c[title]</th>";
	echo"<th>$c[pname]</th>";
	echo"<th>$c[price]</th>";
	echo"<th>$c[oprice]</th>";
	echo"<th>$c[weight]</th>";
	echo"<th>$c[dat]</th>";
}
?>
 <h1>Product</h1>


