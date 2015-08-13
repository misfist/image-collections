<!DOCTYPE HTML>
<?php include_once('head.php'); ?>


<body class="proj-art" data-collection="art">
    <div class="page-wrapper" class="group">

        <?php include_once('header.php'); ?>



        <div class="proj-wrapper">
        	<div class="arrow-left"></div> <!-- arrow-left close -->

		    <div class="left">
					<div id="feature-image" class="left-img owl-carousel">
						<!-- <img src="images/cahuita-1.jpg" width="747" height="500"> -->

						<?php 
			               	$url = 'data/data.json';
							$content = file_get_contents($url);
							$json = json_decode($content, true);

							// CHANGE THIS TO COLLECTION NAME (e.g. $json['beach'])
							$collection = $json['art'];

							$feature_content = '';

							for( $i = 0; $i < count($collection); $i++ ) {

								$title = $collection[$i]['title'];
								$path = $collection[$i]['path'];
								$description = $collection[$i]['description'];

								$feature_content .= '<li>';
								$feature_content .= '<img src="' . $path . '" data-hash="' . $i . '" alt="' . $title . '">';
								$feature_content .= '<div id="collection-description" class="left-text"><p>' . $description . '</p></div>';
								$feature_content .= '</li>';

							}

							echo $feature_content;
						?>

					</div> <!-- left-img close -->

					<div id="collection-description" class="left-text"></div> <!-- left-text close -->
		    </div> <!-- left close -->

		    <div class="arrow-right"></div> <!-- arrow-right close -->

			<div class="right">

		        <div id="scrollbar1">
		        	<a class="buttons prev" href="#"><img src="images/arrow-up.png" height="18" width="31"></a>
			        <div class="viewport">
		               <ul id="image-list" class="overview" data-collection="art">

		               	<?php

		               	$thumbnail_content = '';

						for( $i = 0; $i < count($collection); $i++ ) {

							$title = $collection[$i]['title'];
							$path = $collection[$i]['path'];
							$description = $collection[$i]['description'];

							$thumbnail_content .= '<li><a href="#' . $i . '">';
							$thumbnail_content .= '<img src="' . $path . '" alt="' . $title . '" class="thumbnail">';
							$thumbnail_content .= '</a></li>';

						}

						echo $thumbnail_content;

		               	?>
		               	
		                </ul> <!-- overview close -->
			        </div> <!-- viewport close -->
			        <a class="buttons next" href="#"><img src="images/arrow-down.png" height="18" width="31"></a>
		        </div> <!-- scrollbar1 close -->

		    </div> <!-- right close -->


        </div> <!-- proj-wrapper close -->      


        <?php include_once('footer.php'); ?>

    
    </div><!-- page-wrapper close -->


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<!-- <script src="assets/js/app.js"></script> -->
<script src="assets/js/owl.carousel.js"></script>

<script>
	$('.owl-carousel').owlCarousel({
        items:1,
        loop:true,
        center:true,
        margin:10,
        URLhashListener:true,
        autoplayHoverPause:true,
        startPosition: 'URLHash',
        touchDrag: false,
        nav: true,
        navText: ['<img src="images/arrow-left.png" height="20" width="12">', '<img src="images/arrow-right.png" height="20" width="12">']
    });

</script>

<script src="assets/js/jquery.tinycarousel.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$( '#scrollbar1' ).tinycarousel({
			axis: "y",
			infinite: false
		});
	});
</script>


</body>
</html>