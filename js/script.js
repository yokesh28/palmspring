function loadMenu() {
	$('header').animate({
		left : "0",
		opacity : "1"
	}, 800);
}

function hidePreloader() {
	$('#preloader').fadeOut('slow');
	$('.container').fadeIn();
}

function enableClick(child){
	$('.menu_inner li:nth-child('+child+')>img').animate({"left":"-25px",opacity:1});
	$('.menu_inner li:nth-child('+child+')>a').animate({left:"20px",opacity:1});
	setTimeout(function(){$('.menu_inner li:nth-child('+child+')>a').css('background','#619CD8');},300)
	
	
}
function disableClick(child){
	
			$('.menu_inner li img').animate({"left":"0px",opacity:0});
			$('.menu_inner li a').animate({left:"0px"});
			$('.menu_inner li a').css('background','white');
	

}