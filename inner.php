<!DOCTYPE html>
<html>
<head>
<title>Palm Spring.....</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/supersized.css" type="text/css"
	media="screen" />



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
		<img src="img/close.png" alt="close" class="close">
		<div class="box" id="box1">

			<h2>Overview</h2>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting
				industry. Lorem Ipsum has been the industry's standard dummy text
				ever since the 1500s, when an unknown printer took a galley of type
				and scrambled it to make a type specimen book. It has survived not
				only five centuries, but also the leap into electronic typesetting,
				remaining essentially unchanged. It was popularised in the 1960s
				with the release of Letraset sheets containing Lorem Ipsum passages,
				and more recently with desktop publishing software like Aldus
				PageMaker including versions of Lorem Ipsum.</p>
		</div>
		<div class="box" id="box2">
			<h2>Amenities</h2>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting
				industry. Lorem Ipsum has been the industry's standard dummy text
				ever since the 1500s, when an unknown printer took a galley of type
				and scrambled it to make a type specimen book. It has survived not
				only five centuries, but also the leap into electronic typesetting,
				remaining essentially unchanged. It was popularised in the 1960s
				with the release of Letraset sheets containing Lorem Ipsum passages,
				and more recently with desktop publishing software like Aldus
				PageMaker including versions of Lorem Ipsum.</p>
		</div>
		<div class="box" id="box3">
			<h2>Location</h2>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting
				industry. Lorem Ipsum has been the industry's standard dummy text
				ever since the 1500s, when an unknown printer took a galley of type
				and scrambled it to make a type specimen book. It has survived not
				only five centuries, but also the leap into electronic typesetting,
				remaining essentially unchanged. It was popularised in the 1960s
				with the release of Letraset sheets containing Lorem Ipsum passages,
				and more recently with desktop publishing software like Aldus
				PageMaker including versions of Lorem Ipsum.</p>
		</div>
		<div class="box" id="box4">
			<h2>Specifications</h2>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting
				industry. Lorem Ipsum has been the industry's standard dummy text
				ever since the 1500s, when an unknown printer took a galley of type
				and scrambled it to make a type specimen book. It has survived not
				only five centuries, but also the leap into electronic typesetting,
				remaining essentially unchanged. It was popularised in the 1960s
				with the release of Letraset sheets containing Lorem Ipsum passages,
				and more recently with desktop publishing software like Aldus
				PageMaker including versions of Lorem Ipsum.</p>
		</div>
		<div class="box" id="box5">
			<h2>Gallery</h2>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting
				industry. Lorem Ipsum has been the industry's standard dummy text
				ever since the 1500s, when an unknown printer took a galley of type
				and scrambled it to make a type specimen book. It has survived not
				only five centuries, but also the leap into electronic typesetting,
				remaining essentially unchanged. It was popularised in the 1960s
				with the release of Letraset sheets containing Lorem Ipsum passages,
				and more recently with desktop publishing software like Aldus
				PageMaker including versions of Lorem Ipsum.</p>
		</div>
		<div class="box" id="box6">
			<h2>Downloads</h2>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting
				industry. Lorem Ipsum has been the industry's standard dummy text
				ever since the 1500s, when an unknown printer took a galley of type
				and scrambled it to make a type specimen book. It has survived not
				only five centuries, but also the leap into electronic typesetting,
				remaining essentially unchanged. It was popularised in the 1960s
				with the release of Letraset sheets containing Lorem Ipsum passages,
				and more recently with desktop publishing software like Aldus
				PageMaker including versions of Lorem Ipsum.</p>
		</div>
		<div class="box" id="box7">
			<h2>Contact us</h2>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting
				industry. Lorem Ipsum has been the industry's standard dummy text
				ever since the 1500s, when an unknown printer took a galley of type
				and scrambled it to make a type specimen book. It has survived not
				only five centuries, but also the leap into electronic typesetting,
				remaining essentially unchanged. It was popularised in the 1960s
				with the release of Letraset sheets containing Lorem Ipsum passages,
				and more recently with desktop publishing software like Aldus
				PageMaker including versions of Lorem Ipsum.</p>
		</div>


	</div>
</body>


<script type="text/javascript">
$('.menu_inner li:nth-child(1)>img').animate({"left":"-25px",opacity:1});
$('.menu_inner li:nth-child(1)>a').animate({left:"20px",opacity:1});
$('#box1').animate({right:"0px",opacity:1},900);

$('.close').click(function(){
	$('.close').css({'opacity':'0'});

	closeBox();
	disableClick();
});

setTimeout(function(){$('.menu_inner li:nth-child(1)>a').css({'background':'#619cd8','color':'white'});},300);

$('.menu_inner li').click(function(){
//$(this).css('background','url("img/amites-button.png")');
var child=$(this).index()+1;
closeBox();
disableClick();
enableClick(child);



});



//$(".container img.hm_back").attr('src', 'img/inner2.jpg').load(function() {
 hidePreloader();

	loadMenu();

//});
</script>

</html>
