$(document).ready(function(){
    $('.carousel').carousel();
    //$('.materialbox').materialbox();
  

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
        
    
}); // scroll window end

// Kontaktai.html validation

function validateEmail(pastas) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return emailReg.test( pastas );
}
// if( !validateEmail(emailaddress)) { /* do stuff here */ }


// formos emailo formato ir numerio ilgio validacija
// turint laiko padarysiu kad tikrintu onBlurr() o ne on btnpress
// reik ijungti atgal e.preventDefault    
  
// $('button#siusti').on('click', function(e) {
//         e.preventDefault();
//     // alert("ka cia spaudai?");
//     let vardas = $('input#icon_prefix').val();
//     let telefonas = $('input#icon_telephone').val();
//     let emailas = $('input#email').val();
//     let textas = $('textarea#textarea1').val();
   
//     let forma = {
//         name: vardas,
//         phone: telefonas,
//         email: emailas,
//         text: textas
//     }
//     // console.log(forma);
//     let telIlgis = forma.phone.length;
    
//     if( !validateEmail(forma.email)) { alert('emailas NEtinkamas') }
//     if (telIlgis > 0) {
//         if (telIlgis < 9 ) { alert('Telefonas per trumpas')  }
//         if (telIlgis > 12 ) { alert('Telefonas per ilgas')  }
//     }
    
// });








    

instafeed.js 
var feed = new Instafeed({
    get: 'user',
    userId: '201846217',
    limit: 6,
    accessToken : '201846217.1677ed0.c490befc2ce9451ebfcdd077ddc2d85d',
    sortBy: 'most-recent'

});
feed.run();


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

var stumtiPirmyn = 0;
var stumtiAtgal = 0;
function stumisKairen() {
    // postumis    
    if (stumtiPirmyn > 4) {
        $('.additional-images-row div').animate({  left: '+='+kiek+'px' });
        stumtiAtgal++;
        if (stumtiPirmyn == stumtiAtgal) { stumtiPirmyn = 0; stumtiAtgal = 0; }
        // console.log("if kiek: ", kiekStumem);
        // console.log("stumti atgal: ", stumtiAtgal);
    } else { 
        $('.additional-images-row div').animate({  left: '-='+kiek+'px' });
        stumtiPirmyn++;
        // console.log("else kiek: ", kiekStumem);
      }
    
};


setInterval (stumisKairen, 4000);




function isPriekioIGala() {
    let pirmasImg = $('.additional-images-row div:first-child');
    // pirmasImg = pirmasImg.html();
    // console.log(pirmasImg);
    $('.additional-images-row').append(pirmasImg);
};

$('img').on("click", function () {
    isPriekioIGala();
    
})
// setInterval (isPriekioIGala, 4000);


///$('.additional-images-row').on("click",




//




}); //Document.ready end


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
