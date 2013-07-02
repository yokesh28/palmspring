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
<div class="box7" style="right: 0%; opacity: 1;">
			<h5>Overview</h5>
			<p>When you live in an environment of peace and quietude.away
				from the clamor.the uproar and the grime and dust of city life. it
				sure can soothe your soul and transport you to a world your
				own-exclusive,private and spacious. But when you have it right with
				in city limits.its joy compounded. Padur has got it all and more.
				sheer elegance matched by functional aesthetics that not only makes
				you feel good but look good.</p>
		</div>

	</div>
</body>

<script type="text/javascript">

$('.menu_inner li').click(function(){
//$(this).css('background','url("img/amites-button.png")');
var child=$(this).index()+1;

disableClick(child);
enableClick(child);



});



$(".container img.hm_back").attr('src', 'img/inner2.jpg').load(function() {
 hidePreloader();

	loadMenu();

});
</script>

</html>
