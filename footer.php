<div class="copyrightWrapper">
	<p>copyrights@<a href="#">3decolabs.com</a>&nbsp;2015</p>
</div>
<div class="rightCopyrightWrapper">
	<p>Design and developed by <a href="#">Creative Fox</a></p>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="js/jquery.cycle2.min.js"></script>
<script src="js/jquery.singlePageNav.min.js"></script>
<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/jquery.sidr.min.js"></script>
<script src="js/scripts.js"></script>
<script>
$(document).ready(function(){
    $('.sliderWrap').cycle({
		prev:'.prev',
		next:'.next',
		pager:'.sliderPagerWrap'
	});
	$('.testimonailInfoWrapper ul').cycle({
		prev:'.testPrev',
		next:'.testNext',
		slides:'>li',
		fx:'scrollHorz',
		speed:1000
	});
	$('.navMenuWrapper').singlePageNav({
		offset: 100,
		updateHash: false,
		easing: "easeOutBack",
		speed:1200
	});
	$('.TestimonialParallaxImg').parallax("50%", 0.4);
	$('.productParallaxImg').parallax("50%", 0.4);
	$('.infrastructureImg').parallax("50%", 0.4);
	$('.responsiveNavIcon').sidr({
		side: 'right'
	});	
});
</script>
</body>
</html>