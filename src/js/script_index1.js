$(document).ready(function(){
    


AOS.init({
    duration: 1200
   });
// opacity: 1;




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


