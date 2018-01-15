$(document).ready(function(){
    $('.carousel').carousel();
    //$('.materialbox').materialbox();
    $(".button-collapse").sideNav();
  

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



// AJAX apie mane.php

var picRowCount = 2;
$('#loadBtn').click(function() {
    picRowCount = picRowCount + 2
    $('#loadMore').load("./load/apie_more_pic.php", {
        picCountNew: picRowCount
    });
});


$('#blogas').load('./load/load_blog_posts.php');
$('#blogBtn').click(function() {
    var tema = $('#subject').val();
    var textas = $('#tekstas').val();
    $('#php').load('./load/blog_post.php', {
        tema: tema,
        textas: textas
    })
    
    $('#blogas').load('./load/load_blog_posts.php');
});

// $('#isrikiavimas').select(function() {
//     $('#items_row').load('./load/shop_preke.php')
// });
var opt;
$('#isrikiavimas').on("change", function() {
    var opt = $(this).val();
    if (opt == 2) {
        $('#items_row').load('./load/shop_prekeDESC.php');
    } else if (opt == 3) {
        $('#items_row').load('./load/shop_prekeASC.php');
    } else if (opt == 1) {
        $('#items_row').load('./load/shop_preke.php');
    }

})
// console.log(opt);





    

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








}); //Document.ready end


// Google map
// function initMap() {
//     var uluru = {lat: 54.937256, lng: 23.890099};
//     var map = new google.maps.Map(document.getElementById('map'), {
//       zoom: 14,
//       center: uluru
//     });
//     var marker = new google.maps.Marker({
//       position: uluru,
//       map: map
//     });
//   }
// Google map end
