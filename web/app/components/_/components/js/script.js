$(function() {
    // ALL PAGES ///////////////////////////////////
    // slideout.js menu cofig //
    var slideout = new Slideout({
        'panel': document.getElementById('panel'),
        'menu': document.getElementById('menu'),
        'padding': 256,
        'tolerance': 70
    });

    // toggle button
    $('.toggle-button').on('click', function() {
        slideout.toggle();
    });

    // menu open listener
    slideout.on('open', function() {
        var menuOffset = $(window).scrollTop();
        $('.nav-mobile').addClass('nav-mobile-stick');
        $('.nav-mobile').css('top',menuOffset);
    });

    // menu close listener
    slideout.on('close', function() {
        $('.nav-mobile').removeClass('nav-mobile-stick');
        $('.nav-mobile').css('top','0');
    });


	// HOMEPAGE ///////////////////////////////////////
    // sticky nav for homepage //
    $(window).bind('scroll', function() {
    	var navHeight = 250;
        // for desktop and mobile views
    	if ($(window).scrollTop() > navHeight) {
    		$('#nav-home').addClass('sticky');
            $('#li-first').fadeIn("slow");
            $('.logo-nav-home').fadeIn("slow");
    	} else {
    		$('#nav-home').removeClass('sticky');
            $('#li-first').fadeOut("fast");
            $('.logo-nav-home').fadeOut("fast");
    	}
    });
});
