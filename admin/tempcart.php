<?php
session_start();
$sid=session_id();
include('connect.php');
$pid=$_GET['pid'];
$q1="select * from tempcart where pid='$pid' and sid='$sid' and buy=0";
$result=mysqli_query($con,$q1);
if(mysqli_num_rows($result)>0)
{
	
$q="update tempcart set quantity=quantity+1  where pid='$pid' and sid='$sid'";	
}
else{
	$inv="inv".rand(); $q="INSERT INTO `tempcart` (`id`, `sid`, `pid`, `quantity`, `buy`, `invice`) VALUES (NULL, '$sid', '$pid', '1', '0', '$inv')";

}
 mysqli_query($con,$q);


echo '<script> location.href="index.php";</script>';
?>

<?php
$q="select * from tempcart where sid='$sid' and buy=0";
$res=mysqli_query($con,$q);
$item=0;
$total=0;
while($a=mysqli_fetch_array($res))
{
	$pid=$a['pid'];
	$quantity=$a['quantity'];
	$q1="select price from product where pid='$pid'";
	$res1=mysqli_query($con,$q1);
	//$a2=mysqli_fetch_array($res1);
	//$price=$a2['price'];
	//$item=$item+$weight;
	//$total=$total+$price*$weight;	
	
}
if($item>0)
$_SESSION['item']=1;
else
$_SESSION['item']=0;

?>
