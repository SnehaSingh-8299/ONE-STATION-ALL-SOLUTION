<!-- top Products -->
	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Our Products
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<!-- product left -->
			<div class="side-bar col-md-3">
				<div class="search-hotel">
					<h3 class="agileits-sear-head">Search Here..</h3>
					<form action="#" method="post">
						<input type="search" placeholder="Product name..." name="search" required>
						<input type="submit" value=" ">
					</form>
				</div>
				
                <br>
                <h3 class="agileits-sear-head">Category</h3>
                
                 <?php
	  	$q="select distinct pname from product"; 
		$res=mysqli_query($con,$q);
		
		while($a=mysqli_fetch_array($res))
		{
	   ?>
      
      
        <li class="odd"><a href="catc.php?delid=<?php echo $a['pname'];?>"><?php echo $a['pname'];?></a></li>
       
       
       <?php } ?>
       
               <?php
			$sel=mysqli_query($con,"select * from category order by dat desc limit 100");
			while($arr=mysqli_fetch_array($sel))
			{
			?>
				<div class="deal-leftmk left-side">
					
					<div class="special-sec1">
						<div class="col-xs-4 img-deals">
							<img src="uimages/<?=$arr['image'];?>" height="50" width="50">
                          
						</div>
						<div class="col-xs-8 img-deal1">
                     <a href="catc.php?delid=<?= $arr['pname']; ?>">  <?=$arr['cname'];?></a>
							
							
						</div>
						<div class="clearfix"></div>
					</div>
                    </div>
                    <?php
					}
					?>	
				
                
				<!-- //deals -->
			</div>
			<!-- //product left --><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>