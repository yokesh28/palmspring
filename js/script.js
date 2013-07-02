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
	$('.menu_inner li:nth-child('+child+') a').animate({"margin-left":"30px",opacity:1});
	$('.menu_inner li:nth-child('+child+') a').delay(50000).css('background','#619CD8');
	
}
function disableClick(){
	for(var i=0;i<6;i++)
		{
	$('.menu_inner li:nth-child('+i+')>img').animate({"left":"0px",opacity:0});
	$('.menu_inner li:nth-child('+i+') a').animate({"margin-left":"0px",opacity:1});
	$('.menu_inner li:nth-child('+i+') a').css('background','white');
	
		}
}