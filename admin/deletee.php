<?php
//database connectivity
include("connect.php");
//deleting records according to id
if(isset($_GET["id"]))
{
$id=$_GET["id"];
$del="delete from email where id=$id";
$g=mysqli_query($con,$del);
if($g)
{
	header("location:admin.php");
}
}
?>