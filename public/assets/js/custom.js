(function($){
	$(".select2").select2({
		theme: "bootstrap-5",
		width:'resolve'
	});

	$(".lloc").select2({
		width:'resolve'
	});


	$(window).scroll(function(){
		if($(window).scrollTop() > $('.navbar').outerHeight(true)){
			$('.navbar').addClass('dp-active')
		}else{
			$('.navbar').removeClass('dp-active')
		}
	})

	$('.dp-main-nav').on('show.bs.offcanvas', function(){
		$('.dp-navbar-toggler').removeClass('collapsed');
	})
	$('.dp-main-nav').on('hide.bs.offcanvas', function(){
		$('.dp-navbar-toggler').addClass('collapsed');
	})

	$('.dp-banner-property-slider').slick({
		dots: true,
		infinite: true,
		speed: 500,
		// fade: true,
		// cssEase: 'linear',
		autoplay: true,
		autoplaySpeed: 2000,
	});

	$('.dp-property-box-imgs-slider').slick({
		dots: false,
		infinite: true,
		speed: 500,
		// fade: true,
		// cssEase: 'linear',
		autoplay: false,
		autoplaySpeed: 2000,
	});
	
})(jQuery)