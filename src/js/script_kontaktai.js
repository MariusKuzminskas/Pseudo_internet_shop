$(document).ready(function(){
    $('.carousel').carousel();
    //$('.materialbox').materialbox();
    $(".button-collapse").sideNav();
  



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

}); //Document.ready end