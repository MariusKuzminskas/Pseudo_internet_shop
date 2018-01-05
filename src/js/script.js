$(window).scroll(function() {

    var wScroll = $(this).scrollTop();
    var topas = $('.trigger').position();
    topas = topas.top;

    if (topas < wScroll) {
        $('nav').addClass('fixed-top');
        $('.trigger').addClass('trigger-height');
        // $('.absolute-left-bottom').addClass('d-none');
        // console.log("tau pavyko");
    } else {
        $('nav').removeClass('fixed-top');
        $('.trigger').removeClass('trigger-height');
        // $('.absolute-left-bottom').removeClass('d-none');
        
    }

    
    $(".absolute-left-bottom").css({
        'transform' : 'translate(0px, '+ wScroll /2 +'%)',
        'opacity' : (Math.floor(((wScroll * - 1) / 100) + 10) / 10) 
    });
    $(".btn-container").css({
        'transform' : 'translate(0px, '+ wScroll /2 +'%)'
    });
    
    // console.log(wScroll);
    
    
        var navToTop = (Math.floor(((wScroll * - 1) / 100) + 10) / 10);
        // navToTop = navToTop / 10;
        // console.log('navTop: ' + topas);
        // console.log('navTop: ' + top);
        
    
});

// Google map
function initMap() {
    var uluru = {lat: 54.937256, lng: 23.890099};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 14,
      center: uluru
    });
    var marker = new google.maps.Marker({
      position: uluru,
      map: map
    });
  }
// Google map end


// slideshow funck
(function($) {
	
	'use strict';
	
	var $slides = $('[data-slides]');
	var images = $slides.data('slides');
	var count = images.length;
	var slideshow = function() {
		$slides
			.css('background-image', 'url("' + images[Math.floor(Math.random() * count)] + '")')
			.show(0, function() {
				setTimeout(slideshow, 5000);
			});
	};
	
	slideshow();
	
}(jQuery));


//instafeed.js 
var feed = new Instafeed({
    get: 'tagged',
    tagName: 'awesome',
    accessToken : '201846217.1677ed0.c490befc2ce9451ebfcdd077ddc2d85d'
});
feed.run();


AOS.init({
    duration: 1200
   });
// opacity: 1;

