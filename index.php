<!DOCTYPE html>
<html>
<head>
<title>MMRF | Palm Spring</title>
<meta charset="UTF-8">
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
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

		<?php include 'header.php';?>

		<div class="wrapper">
			<ul>
				<li onclick="location.href='inner.php'">Overview</li>
				<li onclick="location.href='inner.php'">Amenities</li>
				<li onclick="location.href='inner.php'">Location</li>
				<li onclick="location.href='inner.php'">Specifications</li>
				<li onclick="location.href='inner.php'">Gallery</li>
				<li onclick="location.href='inner.php'">Floor plans</li>
				<li onclick="location.href='inner.php'">Contact us</li>
			</ul>
		</div>
		<div class="colors">
			<ul>
				<li>&nbsp</li>
				<li>&nbsp</li>
				<li>&nbsp</li>
				<li>&nbsp</li>
				<li>&nbsp</li>
				<li>&nbsp</li>
				<li>&nbsp</li>
			</ul>
		</div>


	</div>
</body>
<script type="text/javascript">
$(".wrapper li").hover( function () {
	var child=$(this).index()+1;
	$('.colors li:nth-child('+child+')').animate({"padding":"0"},600);
	
}, function () {
	var child=$(this).index()+1;
	$('.colors li:nth-child('+child+')').animate({"padding":"600px 0px"},600);
	
});
$(".container img.hm_back").attr('src', 'img/hp.jpg').load(function() {
 hidePreloader();

	loadMenu();

});
</script>

</html>
