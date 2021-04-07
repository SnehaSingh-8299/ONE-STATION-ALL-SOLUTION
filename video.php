<?php
include("topheader.php");
include("bottomheader.php");
//include("banner.php");
?>
<br>
<h3 class="tittle-storesl text-center mb-lg-5 mb-sm-4 mb-3">
				<span>V</span>ideo
				<span>G</span>allery
			</h3>

<?php
	include("admin/connect.php");
	$sel=mysqli_query($con,"select * from video order by dat desc");

	while($arr=mysqli_fetch_assoc($sel))
	{
	?>
		
	
			<div class="col-sm-3 col-md-3 col-lg-3"><?=$arr['code'];?></div>
			<div class="detbox">
                	<!-- Details Space -->
                  <?=$arr['descr'];?>             
               

		</div>
<br>
		<?php

		}	

		?> 
<?php
include("middle.php");
include("footer.php");
?>
	
	
