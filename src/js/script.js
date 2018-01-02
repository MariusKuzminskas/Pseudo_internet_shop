$(window).scroll(function() {

    var wScroll = $(this).scrollTop();
    
    $(".absolute-left-bottom").css({
        'transform' : 'translate(0px, '+ wScroll /2 +'%)'
    });
    
    console.log(wScroll);
    

});