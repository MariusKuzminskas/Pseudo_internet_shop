$(window).scroll(function() {

    var wScroll = $(this).scrollTop();
    var topas = $('.trigger').position();
    topas = topas.top;

    if (topas < wScroll) {
        $('nav').addClass('fixed-top');
        $('.trigger').addClass('trigger-height');
        // console.log("tau pavyko");
    } else {
        $('nav').removeClass('fixed-top');
        $('.trigger').removeClass('trigger-height');
        
    }

    
    $(".absolute-left-bottom").css({
        'transform' : 'translate(0px, '+ wScroll /2 +'%)',
        'opacity' : (Math.floor(((wScroll * - 1) / 100) + 10) / 10) 
    });
    $(".btn-container").css({
        'transform' : 'translate(0px, '+ wScroll /2 +'%)'
    });
    
    console.log(wScroll);
    
    
        var navToTop = (Math.floor(((wScroll * - 1) / 100) + 10) / 10);
        // navToTop = navToTop / 10;
        console.log('navTop: ' + topas);
        // console.log('navTop: ' + top);
        
    
});

AOS.init({
    duration: 1200
   });
// opacity: 1;

