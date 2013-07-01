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

	</div>
</body>

<script type="text/javascript">

$('.menu_inner li:nth-child(2) ').click(function(){
//$(this).css('background','url("img/amites-button.png")');

});


$(".container img.hm_back").attr('src', 'img/inner2.jpg').load(function() {
 hidePreloader();

	loadMenu();

});
</script>

</html>
