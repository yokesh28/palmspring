<!DOCTYPE html>
<html>
<head>
<title>Palm Spring.....</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/supersized.css" type="text/css" media="screen" />
		
		
	
	<script src="js/jquery-1.10.1.min.js"></script>	
		
		<script type="text/javascript" src="js/supersized.3.2.7.min.js"></script>

<script src="js/script.js"></script>
<script type="text/javascript">
			
			jQuery(function($){
				
				$.supersized({
				
					// Functionality
					slide_interval          :   3000,		// Length between transitions
					transition              :   3, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
					transition_speed		:	700,		// Speed of transition
															   
					// Components							
					slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
					slides 					:  	[			// Slideshow Images
														{image : 'img/hp.jpg', title : 'image1', thumb : 'img/hp.jpg', url : 'img/hp.jpg'},
														{image : 'img/inner2.jpg', title : 'image2', thumb : 'img/inner2.jpg', url : 'img/inner2.jpg'}  
														
												]
					
				});
		    });
		    
		</script>

</head>
<body>
	<div id="preloader">
		<img src="img/logo.png" alt="Palm Spring">
	</div>
	<div class="container" style="display: none;">

		

		<?php include 'header_inner.php';?>
		

	</div>
</body>


<script type="text/javascript">

$('.menu_inner li').click(function(){
//$(this).css('background','url("img/amites-button.png")');
var child=$(this).index()+1;

disableClick(child);
enableClick(child);



});



//$(".container img.hm_back").attr('src', 'img/inner2.jpg').load(function() {
 hidePreloader();

	loadMenu();

//});
</script>

</html>
