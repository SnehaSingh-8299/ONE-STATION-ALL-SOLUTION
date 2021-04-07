<html>
	<head>
		<title>Dashboard</title>
		<link href="boot/bootstrap.min.css" rel="stylesheet">
		<script src="boot/jquery.min.js"></script>
		<script src="boot/bootstrap.min.js"></script>
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
	</head>

<?php
include("connect.php");
?>

<?php
include("header.php");
include("slider.php");
?>

<?php
include("connect.php");
$a="select * from product order by dat desc limit 3";	
$b=mysqli_query($con,$a);
while($c=mysqli_fetch_array($b))
{
?>

<div class="col-sm-2"
	<table border="2" bgcolor="#FF0000" cellpadding="20" cellspacing="20">
	<tr>
	
	<td><img src="uimages/<?=$c['image'];?>" height="200"  width="200"></td>
	<?php
	
	echo"<tr>";
    echo"<td>$c[pname]&nbsp;</td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td>$c[descr]</td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td>$c[title]</td>";
	echo"</tr>";
	
	?>
</div>
<?php
}
?>

</html>

<form name="f1" method="post">
<
