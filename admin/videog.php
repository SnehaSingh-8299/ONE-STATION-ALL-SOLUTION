<style>
.detpicbox
{
	height:500px;
}
.picbox
{
	height:320px;
	border:1px solid lightgray;
	border-radius:5px 5px 0px 0px;
}
.detbox
{
	height:80px;
	border:1px solid lightgray;
	border-top:none;
	border-radius:0px 0px 5px 5px;	
}
</style>
<?php
include("header.php");
include("slider.php");
?>

				<?php
	include("connect.php");
	$sel=mysqli_query($con,"select * from video order by dat desc");

	while($arr=mysqli_fetch_assoc($sel))
	{
	?>	
<div class="container-fluid">
	<div class="row">
        <div class="col-sm-6"><br>
            <div class="detpicbox">
                <div class="picbox">
                	<!--Picture Space -->
                    <?=$arr['code'];?> 
                </div>
                <div class="detbox">
                	<!-- Details Space -->
                    <?=$arr['descr'];?> 
                </div>
            </div>
        </div>
        
    <?php

	}	
	
	?>
        <!--
        <div class="col-sm-6"><br>
            <div class="detpicbox">
                <div class="picbox">
                	Picture Space 
                    
                </div>
                <div class="detbox">
                	 Details Space 
                    
                </div>
            </div>
        </div>  -->
	</div><br>
</div>
<?php
include("footer.php");
?>