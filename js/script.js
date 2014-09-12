$(document).ready(function(){
	$('#slide-container').slick({
        dots: true,
        infinite: true,
        speed: 800,
        fade: true,
        slide: 'div',
        cssEase: 'linear',
		autoplay: true,
		autoplaySpeed: 4500
		
    });
});