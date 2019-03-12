$(document).ready(function () {
	$('.ancla').click(function(e){
		e.preventDefault();
		$('html, body').stop().animate({scrollTop: $($(this).attr('href')).offset().top - 100}, 1000);
	});
});
