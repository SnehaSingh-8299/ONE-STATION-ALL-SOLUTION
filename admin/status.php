<?php
$id=$_GET['status'];
extract($_POST);
if(isset($sub))
{
	$q="update checkout set status='$sat' where id='$id'";
	if(mysqli_query($con,$q))
	echo '<script>alert("Status Successfully changed");location.href="admin.php?vieworder='.$id.'"</script>';	


}


?>

<br><br><hr><br><br><br>
<form method="post" >
Choose the Status:-
<select name="sat">
		<option value="pending">Pending</option>
        <option value="cancle">cancle</option>
        <option value="deliveried">Delivery</option>
        <option value="on_the_way">On the way</option>
        <option value="return">Return</option>
        <option value="replace">Replace</option>
        <option value="packing">Packing</option>
        <option value="dispatched">Dispatched</option>

</select>
<input type="submit" name="sub">


</form>
<br><br><br>