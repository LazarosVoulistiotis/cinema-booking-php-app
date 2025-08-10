<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
</div>
<div class="content">
	<div class="wrap">
		<div class="content-top">
		<h1 style="color:#555; text-align: center;">(NOW SHOWING)</h1>
			
			<?php
            $db = new Database();
            $kalov = $db->connect();
          	 $today=date("Y-m-d");
          	 $qry2=mysqli_query($kalov,"select * from  tbl_movie ");
		
          	  while($m=mysqli_fetch_array($qry2))
                   {
                    ?>
                    
                    <div class="col_1_of_4 span_1_of_4">
					<div class="imageRow">
						  	<div class="single">
						  		<?php
						
						?>
						  		<a href="aboutmovie.php?id=<?php echo $m['movie_id'];?>"><img src="<?php echo $m['image'];?>" alt="" /></a>
						  	</div>
						  	<div class="movie-text">
						  		<h4 class="h-text"><a href="aboutmovie.php?id=<?php echo $m['movie_id'];?>" style="text-decoration:none;"><?php echo $m['movie_name'];?></a></h4>
						  		Cast: <Span class="color2" style="text-decoration:none;"><?php echo $m['cast'];?></span><br>
						  		
						  	</div>
		  				</div>
		  		</div>
		  		
  	    <?php
  	    	}
              mysqli_close($kalov);
  	    	?>
			
			</div>
				<div class="clear"></div>		
			</div>
            
</body>
</html>