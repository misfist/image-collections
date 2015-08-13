<!DOCTYPE HTML>
<?php include_once('head.php'); ?>


<body class="proj-beach">
    <div class="page-wrapper" class="group">

        <?php include_once('header.php'); ?>



        <div class="proj-wrapper">
        	<div class="arrow-left">
        		<a id="previous-btn" href="#"><img src="images/arrow-left.png" height="20" width="12"></a>
        	</div> <!-- arrow-left close -->

		    <div class="left">
					<div id="feature-image" class="left-img">
						<img src="images/cahuita-1.jpg" width="747" height="500">
					</div> <!-- left-img close -->

					<div id="collection-description" class="left-text">
					</div> <!-- left-text close -->
		    </div> <!-- left close -->

		    <div class="arrow-right">
        		<a id="next-btn" href="#"><img src="images/arrow-right.png" height="20" width="12"></a>
        	</div> <!-- arrow-right close -->



			<div class="right">
				<div class="arrow-up">
					<img src="images/arrow-up.png" height="18" width="31">
				</div> <!-- arrow-up close -->

		        <div id="scrollbar1">
			        <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
			        <div class="viewport">
			             <div class="overview">
			             <!-- ADD data-collection ID here -->	
			               <ul id="image-list" data-collection="wythe">
			                </ul>
			            </div> <!-- overview close -->
			        </div> <!-- viewport close -->
		        </div> <!-- scrollbar1 close -->

				<div class="arrow-down">
					<img src="images/arrow-down.png" height="18" width="31">
				</div> <!-- arrow-down close -->

		    </div> <!-- right close -->


        </div> <!-- proj-wrapper close -->      


        <?php include_once('footer.php'); ?>

    
    </div><!-- page-wrapper close -->


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="assets/js/app.js"></script>
<script type="text/javascript" src="js/jquery.tinyscrollbar.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#scrollbar1').tinyscrollbar();
	});
</script>



</body>
</html>