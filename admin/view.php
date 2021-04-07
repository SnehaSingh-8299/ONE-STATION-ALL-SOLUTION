<?php
$pid=$_GET['view'];
$q="select * from product where id='$pid'";
$res=mysqli_query($con,$q);
$a=mysqli_fetch_array($res);

extract($_POST);
if(isset($add))
{
	
}

?>
<form enctype="multipart/form-data" method="post"><table width="90%"  cellspacing="4" cellpadding="3">
  <tr>
    <th colspan="2" scope="row"><h1>Add Category</h1></th>
  </tr>
  <tr>
    <th colspan="2" scope="row"><?php echo @$msg;?></th>
    </tr>
  <tr>
    <th width="56%" scope="row">Choose category name:</th>
    <td width="44%"><?php echo $a['title']; ?>
 
    
    
    </td>
  </tr>
  <tr>
    <th scope="row">Sub category:</th>
    <td><?php echo $a['title'];?></td>
  </tr>
  <tr>
    <th scope="row">brand</th>
    <td><?php echo $a['brand'];?></td>
  </tr>
  <tr>
    <th scope="row">model</th>
    <td><?php echo $a['title'];?></td>
  </tr>
  <tr>
    <th scope="row">Product name</th>
    <td><?php echo $a['pname'];?></td>
  </tr>
  <tr>
    <th scope="row">price</th>
    <td><?php echo $a['price'];?></td>
  </tr>
  <tr>
    <th scope="row">Quantity</th>
    <td><?php echo $a['weight'];?></td>
  </tr>
  <tr>
    <th scope="row">Color</th>
    <td><?php echo $a['color'];?></td>
  </tr>
  <tr>
    <th scope="row">size</th>
    <td><?php echo $a['size'];?></td>
  </tr>
  <tr>
    <th scope="row">feature</th>
    <td><?php echo $a['descr'];?></td>
  </tr>
  <tr>
    <th scope="row" valign="top"> Image:</th>
    <td><img src="images/<?php echo $a['pid'];?>.jpg" width="100" height="100"></td>
  </tr>
  <tr>
    <th colspan="2" scope="row"><a href="main.php">Back to home</a><br><a href="main?del=<?php echo $a['pid'];?>">delete</a><br><a href="view.php?edit=<?php echo $a['pid'];?>">Edit</a></th>
    </tr>
</table>
</form>