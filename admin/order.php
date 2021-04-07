<?php
include("connect.php");

//$a="select tempcart.pid,tempcart.invice,checkout.name,checkout.email,checkout.mobile,checkout.city,checkout.address,checkout.status,product.pro_name,product.price,product.quantity,product.size from tempcart inner join checkout on tempcart.id=checkout.id inner join product on tempcart.pid=product.pid ";
$a="select title, weight, price, oprice, pid, quantity, buy,invice, name, email, mobile, city, country, mode, address, status, pmode, dat
from product s inner join tempcart m on
product.id = tempcart.pid inner join checkout d on 
tempcart.invice = checkout.invice order by dat ";

$b=mysqli_query($con,$a);
echo"<table border=2>";
echo"<th>ID</th>";
echo"<th>TITLE</th>";
echo"<th>WEIGHT</th>";
echo"<th>PRICE</th>";
echo"<th>OFFER PRICE</th>";
echo"<th>PRODUCT ID</th>";
echo"<th>QUANTITY</th>";
echo"<th>BUY</th>";
echo"<th>INVICE</th>";
echo"<th>NAME</th>";
echo"<th>EMAIL</th>";
echo"<th>MOBILE</th>";
echo"<th>CITY</th>";
echo"<th>COUNTRY</th>";
echo"<th>MODE</th>";
echo"<th>ADDRESS</th>";
echo"<th>STATUS</th>";
echo"<th>PAYMENT MODE</th>";
echo"<th>DATE</th>";

while($c=mysqli_fetch_array($b))

{
	echo"<tr>";
	echo"<th>$c[id]</th>";
	echo"<th>$c[title]</th>";
	echo"<th>$c[weight]</th>";
	echo"<th>$c[price]</th>";
	echo"<th>$c[oprice]</th>";
	echo"<th>$c[pid]</th>";
	echo"<th>$c[quantity]</th>";
	echo"<th>$c[buy]</th>";
	echo"<th>$c[invice]</th>";
	echo"<th>$c[name]</th>";
	echo"<th>$c[email]</th>";
	echo"<th>$c[mobile]</th>"; 
	echo"<th>$c[city]</th>";
	echo"<th>$c[country]</th>";
	echo"<th>$c[mode]</th>";
	echo"<th>$c[address]</th>";
	echo"<th>$c[status]</th>";
	echo"<th>$c[pmode]</th>";
	echo"<th>$c[dat]</th>";
	}

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>

</head>
<body>

<div class="container">
  <h2>Details of Orders</h2>
  <p>#table:product, #table:checkout, #table:tempcart</p>            
  <table class="table">
    <thead>
      <tr>
      	<th>S.No.</th>
        <th>Product Name</th>
        <th>Weight</th>
        <th>Price</th>
        <th>offer Price</th>
        <th>Product id</th>
        <th>Quantity</th>
        <th>Buy</th>
        <th>Invice No.</th>
        <th>Name</th>
        <th>Mobile</th>
        <th>City</th>
       	<th>Country</th>
        <th>Mode</th>
        <th>Address</th>
        <th>Status</th>
        <th>Payment mode</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>S.No.</td>
        <td>Product Name</td>
        <td>Weight</td>
        <td>Price</td>
        <td>offer Price</td>
        <td>Product id</td>
        <td>Quantity</td>
        <td>Buy</td>
        <td>Invice No.</td>
        <td>Name</td>
        <td>Mobile</td>
        <td>City</td>
       	<td>Country</td>
        <td>Mode</td>
        <td>Address</td>
        <td>Status</td>
        <td>Payment mode</td>
        <td>Date</td>
      </tr>
    
      
    </tbody>
  </table>
</div>

</body>
</html>
