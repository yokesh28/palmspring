<!DOCTYPE html>
<html>
<head>
<title>Palm Spring.....</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery-1.10.1.min.js"></script>
<script src="js/script.js"></script>
</head>
<body>
	<div id="preloader">
		<img src="img/logo.png" alt="Palm Spring">
	</div>
	<div class="container" style="display: none;">

		<img src="img/hp.jpg" alt="Palm Spring" class="hm_back">

		<?php include 'header_inner.php';?>
		<div class="box" id="box1">
		<h2>Overview </h2>
		<p>Lorem Ipsum is simply dummy text of the
			printing and typesetting industry. Lorem Ipsum has been the
			industry's standard dummy text ever since the 1500s, when an unknown
			printer took a galley of type and scrambled it to make a type
			specimen book. It has survived not only five centuries, but also the
			leap into electronic typesetting, remaining essentially unchanged. It
			was popularised in the 1960s with the release of Letraset sheets
			containing Lorem Ipsum passages, and more recently with desktop
			publishing software like Aldus PageMaker including versions of Lorem
			Ipsum.</p></div>
					<div class="box" id="box2">
		<h2>Amenities</h2>
		<p>Lorem Ipsum is simply dummy text of the
			printing and typesetting industry. Lorem Ipsum has been the
			industry's standard dummy text ever since the 1500s, when an unknown
			printer took a galley of type and scrambled it to make a type
			specimen book. It has survived not only five centuries, but also the
			leap into electronic typesetting, remaining essentially unchanged. It
			was popularised in the 1960s with the release of Letraset sheets
			containing Lorem Ipsum passages, and more recently with desktop
			publishing software like Aldus PageMaker including versions of Lorem
			Ipsum.</p></div>
					<div class="box" id="box3">
		<h2>Location</h2>
		<p>Lorem Ipsum is simply dummy text of the
			printing and typesetting industry. Lorem Ipsum has been the
			industry's standard dummy text ever since the 1500s, when an unknown
			printer took a galley of type and scrambled it to make a type
			specimen book. It has survived not only five centuries, but also the
			leap into electronic typesetting, remaining essentially unchanged. It
			was popularised in the 1960s with the release of Letraset sheets
			containing Lorem Ipsum passages, and more recently with desktop
			publishing software like Aldus PageMaker including versions of Lorem
			Ipsum.</p></div>
					<div class="box" id="box4">
		<h2>Specifications</h2>
		<p>Lorem Ipsum is simply dummy text of the
			printing and typesetting industry. Lorem Ipsum has been the
			industry's standard dummy text ever since the 1500s, when an unknown
			printer took a galley of type and scrambled it to make a type
			specimen book. It has survived not only five centuries, but also the
			leap into electronic typesetting, remaining essentially unchanged. It
			was popularised in the 1960s with the release of Letraset sheets
			containing Lorem Ipsum passages, and more recently with desktop
			publishing software like Aldus PageMaker including versions of Lorem
			Ipsum.</p></div>
					<div class="box" id="box5">
		<h2>Gallery</h2>
		<p>Lorem Ipsum is simply dummy text of the
			printing and typesetting industry. Lorem Ipsum has been the
			industry's standard dummy text ever since the 1500s, when an unknown
			printer took a galley of type and scrambled it to make a type
			specimen book. It has survived not only five centuries, but also the
			leap into electronic typesetting, remaining essentially unchanged. It
			was popularised in the 1960s with the release of Letraset sheets
			containing Lorem Ipsum passages, and more recently with desktop
			publishing software like Aldus PageMaker including versions of Lorem
			Ipsum.</p></div>
					<div class="box" id="box6">
		<h2>Downloads</h2>
		<p>Lorem Ipsum is simply dummy text of the
			printing and typesetting industry. Lorem Ipsum has been the
			industry's standard dummy text ever since the 1500s, when an unknown
			printer took a galley of type and scrambled it to make a type
			specimen book. It has survived not only five centuries, but also the
			leap into electronic typesetting, remaining essentially unchanged. It
			was popularised in the 1960s with the release of Letraset sheets
			containing Lorem Ipsum passages, and more recently with desktop
			publishing software like Aldus PageMaker including versions of Lorem
			Ipsum.</p></div>
								<div class="box" id="box7">
		<h2>Contact us</h2>
		<p>Lorem Ipsum is simply dummy text of the
			printing and typesetting industry. Lorem Ipsum has been the
			industry's standard dummy text ever since the 1500s, when an unknown
			printer took a galley of type and scrambled it to make a type
			specimen book. It has survived not only five centuries, but also the
			leap into electronic typesetting, remaining essentially unchanged. It
			was popularised in the 1960s with the release of Letraset sheets
			containing Lorem Ipsum passages, and more recently with desktop
			publishing software like Aldus PageMaker including versions of Lorem
			Ipsum.</p></div>

	</div>
</body>

<script type="text/javascript">
$('.menu_inner li:nth-child(1)>img').animate({"left":"-25px",opacity:1});
$('.menu_inner li:nth-child(1)>a').animate({left:"20px",opacity:1});
$('#box1').animate({right:"0px",opacity:1},900);

setTimeout(function(){$('.menu_inner li:nth-child(1)>a').css('background','#619CD8');},300);

$('.menu_inner li').click(function(){
//$(this).css('background','url("img/amites-button.png")');
var child=$(this).index()+1;
closeBox();
disableClick(child);
enableClick(child);



});



$(".container img.hm_back").attr('src', 'img/inner2.jpg').load(function() {
 hidePreloader();

	loadMenu();

});
</script>

</html>
