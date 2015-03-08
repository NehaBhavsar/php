var winHeight = $(window).height(),
	winWidth = $(window).width();
var headerContainerHeight = $('.headerContainer').height();

$('.headerFix').css('height', headerContainerHeight);

function fixedHeaderFunct(){
	if ($(window).scrollTop() > headerContainerHeight) {
		$('.headerContainer').addClass('fixHeader');
	}
	else{
		$('.headerContainer').removeClass('fixHeader');
	}

}
fixedHeaderFunct();

$(window).scroll(function () {
	fixedHeaderFunct();	
});