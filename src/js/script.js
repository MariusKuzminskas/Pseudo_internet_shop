$(window).scroll(function() {

    var wScroll = $(this).scrollTop();
    var top = $('nav').scrollTop();
    
    $(".absolute-left-bottom").css({
        'transform' : 'translate(0px, '+ wScroll /2 +'%)'
        
    });
    $(".btn-container").css({
        'transform' : 'translate(0px, '+ wScroll /2 +'%)'
    });
    
    console.log(wScroll);
    
    
        // var navToTop = Math.floor((wScroll / 100));
        // console.log('navTop: ' + navToTop);
        console.log('navTop: ' + top);
        
    
});

AOS.init({
    duration: 1200
   });
// opacity: 1;

