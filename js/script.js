function loadMenu()
{
	$('header').animate({
		left : "0",
		opacity : "1"
	},800);
}

function hidePreloader(){
	$('#preloader').fadeOut('slow');
	$('.container').fadeIn();
}
