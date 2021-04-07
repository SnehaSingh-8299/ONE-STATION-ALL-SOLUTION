<style>
.detpicbox
{
	height:300px;
}
.picbox
{
	height:220px;
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
	$sel=mysqli_query($con,"select * from photo order by dat desc");

	while($arr=mysqli_fetch_assoc($sel))
	{
	?>	
<div class="container-fluid">

	<div class="row">
        <div class="col-sm-3"><br>
            <div class="detpicbox">
                <div class="picbox">
                	<!--Picture Space -->
                  
					
	
		<img src="uimages/<?=$arr['image'];?>" style="width:65%" style="height:50%" >	
                </div>
                <div class="detbox">
                	<!-- Details Space -->
                  <?=$arr['des'];?>             
                </div>
            </div>
        </div>
                         <?php

	}	
	
	?>
       <!--
        <div class="col-sm-3"><br>
            <div class="detpicbox">
                <div class="picbox"></div>
                <div class="detbox"></div>
            </div>
        </div>
        
        <div class="col-sm-3"><br>
            <div class="detpicbox">
                <div class="picbox"></div>
                <div class="detbox"></div>
            </div>
        </div>
        
        <div class="col-sm-3"><br>
            <div class="detpicbox">
                <div class="picbox"></div>
                <div class="detbox"></div>
            </div>
        </div>		-->
        
	</div><br>
</div>


<?php
include("footer.php");
?>