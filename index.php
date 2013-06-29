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

		<?php include 'header.php';?>

		<div class="wrapper">
			<ul>
				<li>Overview</li>
				<li>Amenities</li>
				<li>Location</li>
				<li>Specifications</li>
				<li>Gallery</li>
				<li>Downloads</li>
				<li>Contact us</li>
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

$(".container img.hm_back").attr('src', 'img/hp.jpg').load(function() {
 hidePreloader();

	loadMenu();

});
</script>
</html>
