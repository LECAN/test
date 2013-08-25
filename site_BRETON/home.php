<!DOCTYPE HTML>

<html>
<head>

	

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Your Website</title>

	<?php
		include('./header.php');
	
	?>
	
	
<!-- Slider  -->

<div class="container" >	
<?php

//init slider images
		$images = scandir ("./images/slider/");
		
		//pop . and ..
		$images=array_reverse($images);
		array_pop($images);
		array_pop($images);

?>
    <div id="myCarousel" class="carousel slide img_size">
		<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<?php 
			for($i=0;$i<count($images)-1;$i++){
			?>
			
			<li data-target="#myCarousel" data-slide-to="<?=   ($i+1) ?>"></li>
			<?php } ?>
		</ol>
    <!-- Carousel items -->
    <div class="carousel-inner">
	<?php
		
		
		$first=array_pop($images);
		?>
		<div class="active item"><img class="img_size" src="./images/slider/<?= $first ?>" /></div>
		<?php
		foreach($images as $image):
	?>
		<div class="item"><img class="img_size" src="./images/slider/<?= $image ?>" /></div>
		<?php endforeach;?>
    </div>
    <!-- Carousel nav -->
		<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
</div>
</body>

</html>