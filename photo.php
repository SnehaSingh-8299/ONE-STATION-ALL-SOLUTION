<?php
include("topheader.php");
include("bottomheader.php");
//include("banner.php");
?>

			<br>
			<h3 class="tittle-storesl text-center mb-lg-5 mb-sm-4 mb-3">
				<span>P</span>hoto
				<span>G</span>allery
			</h3>

	<?php
	include("admin/connect.php");
	$sel=mysqli_query($con,"select * from photo order by dat desc");

	while($arr=mysqli_fetch_assoc($sel))
	{
	?>
<div class="container">
  <div class="row">
    <div class="col-md-3">
      <div class="thumbnail">
        
          <img src="admin/uimages/<?=$arr['image'];?>" alt="lights" style="width:100%" >
          <div class="caption">
			  <br>
            <p><h2><b><center><?=$arr['des'];?> </center></b></h2></p>
          </div>
        </a>
      </div>
    </div>
</div>
</div>
		
	<?php

		}	

		?> 

	<?php
		include("middle.php");
		include("footer.php");
	?>
	
	
