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


    

//instafeed.js 
// var feed = new Instafeed({
//     get: 'tagged',
//     tagName: 'awesome',
//     accessToken : '201846217.1677ed0.c490befc2ce9451ebfcdd077ddc2d85d'
// });
// feed.run();


AOS.init({
    duration: 1200
   });
// opacity: 1;



// index1 

// jQuery.contains( container, contained )
// tikriname ar esame index1 page ir paslepiame logo branda
if (($('body'), $('#index1')) && ($('body'), $('.navbar-brand'))) {
    var index1 = true;
    // var yy = $('.navbar > a').hide();
    

}

// console.log(yy);

var kiek = $('.additional-images-row img').width();
var six = kiek * 6;
$('.carousel-container').css("width", six);
// console.log(testukas);

function stumisKairen() {
    // var kiek = 212;
    $('.additional-images-row').animate({  left: '-='+kiek+'px' });
};
// var kiek = 50;

// stumisKairen(200);

setInterval (stumisKairen, 4000);



$('.additional-images-row').on("click", function() {
    $(this).animate({  left: '-='+kiek+'px' });
    
});
