<!DOCTYPE HTML>
<?php include_once('headv2.php'); ?>


<body class="proj-art" data-collection="art">
    <div class="page-wrapper" class="group">

        <?php include_once('header.php'); ?>

        <div class="container">

        	<main>
        		<div id="feature-image" class="left-img">
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

							$feature_content .= '<div class="image-item">';
							$feature_content .= '<img src="' . $path . '" data-hash="' . $i . '" alt="' . $title . '">';
							$feature_content .= '<div id="collection-description" class="left-text"><p>' . $description . '</p></div>';
							$feature_content .= '</div>';

						}

						echo $feature_content;
					?>

				</div> <!-- left-img close -->
        	</main>
        	<aside>
				<div id="image-list" data-collection="art">

				<?php

					$thumbnail_content = '';

					for( $i = 0; $i < count($collection); $i++ ) {

						$title = $collection[$i]['title'];
						$path = $collection[$i]['path'];
						$description = $collection[$i]['description'];

						$thumbnail_content .= '<div class="image-thumb"><a href="#' . $i . '">';
						$thumbnail_content .= '<img src="' . $path . '" alt="' . $title . '" class="thumbnail">';
						$thumbnail_content .= '</a></div>';

					}

					echo $thumbnail_content;

				?>

				</div> <!-- overview close -->
        	</aside>

        </div>


        <?php include_once('footer.php'); ?>

    
    </div><!-- page-wrapper close -->


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<script type="text/javascript" src="assets/js/slick.js"></script>

<script>
 $('#feature-image').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  fade: true,
  asNavFor: '.slider-nav'
});

$('#image-list').slick({
  slidesToShow: 6,
  slidesToScroll: 2,
  variableWidth: false,
  asNavFor: '#feature-image',
  arrows: true,
  dots: false,
  centerMode: false,
  focusOnSelect: true,
  vertical: true,
  infinite: false
});
</script>


</body>
</html>