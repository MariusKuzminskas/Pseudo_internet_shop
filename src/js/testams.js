
// kiek uzdirbsi per 20 metu jei tavo alga kyla kasmen po 2% o uzkali 680

var kiekMen = 20 * 12;

var menAtl = 680;
var ProcPrieaug = 2;
procPrieaug = ProcPrieaug / 100; 
var padidejimas = 0;

// console.log("procPrieaug " + procPrieaug);


// for (let i = 0; i < kiekMen; i++) {
//     padidejimas = menAtl * procPrieaug;
//     console.log("padidejimas: " + padidejimas); 
//     menAtl += padidejimas;
//     console.log("atlyginimas: " + menAtl);
    
    
    
// }

// console.log("sumine alga " + menAtl);  //po 20 metu mano alga


// KONSTANTOS IR KELIAI --------------------------------------------------------------------------------
const TETE = document.querySelector(".three-pic-container");
const ANTRASTE = document.querySelector(".three-pic-container h1");
const MYGTUKAS = document.querySelector(".three-pic-container button");

// Kintamieji ir masyvai --------------------------------------------------------------------------------
var pasisakymai = ["ka cia paspaudei?", "Vėl paspaudei?", "Tu bandai mano kantrybę", "ar tu esi savyje? " ]
var n = 0;
var elementai = {
    p : "as esu naujas elementas",
    h1 : "as esu naujas H1"
}
var item = 0;
var rodyti = true;

// FUNKCIJOS     --------------------------------------------------------------------------------

function paspaudimoFcija() {
    // ANTRASTE.style
    ANTRASTE.innerHTML = pasisakymai[n];
    n++;
    if (n == pasisakymai.length) {
        if ( rodyti ) {
            rodyti = false;
            n = 0;
            sukurtiHTMLelem("p", "Ar tu tikrai nori toliau spaudyti?");
        }
        n = 0;
    } 
}
// Sukuria naują HTML elementą su tekstu
function sukurtiHTMLelem (tag, text) {
    // tag = "'"+tag+"'";
    let sukurtas = document.createElement(tag);
    sukurtas.textContent = text;
    // console.log(sukurtas);
    TETE.append(sukurtas);
return sukurtas;

}

MYGTUKAS.addEventListener("click", paspaudimoFcija, false);  //kausomes paspaudimo


// sukurtiHTMLelem("p", "as esu naujas elementas");
// sukurtiHTMLelem("h1", "as esu naujas H1")
// sukurtiHTMLelem("h3", "svieziai sukurtas H2")
// sukurtiHTMLelem("h3", "as esu naujas mentas h3")

ANTRASTE.classList.add("bg-warning");

var bootsBgSpalvos = [
    "bg-primary",
    "bg-secondary",
    "bg-success",
    "bg-info",
    "bg-warning",
    "bg-danger",  
    "bg-light",
    "bg-dark",
]

console.log(bootsBgSpalvos);

// FOR EACH KURIS PRABEGA PER MASYVA ATSPAUSDINDAMAS    


    // bootsBgSpalvos.forEach(function(item) {
    //     var sukuriuHTML = sukurtiHTMLelem("h1", "As esu BS spalva :" + item);
    //     sukuriuHTML.classList.add(item);
    // });


    var spalva = "bg-info";
    var num = 0;

    
function isveduEiluteIrNudazau () {
    if (num == bootsBgSpalvos.length) {
       clearInterval(intervalas); 
    } else {
    var spalva = bootsBgSpalvos[num];
    var sukuriuHTML = sukurtiHTMLelem("h2", "As esu BS spalva :" + spalva);
    sukuriuHTML.classList.add(spalva);
    num++;
    }
}


var intervalas = setInterval(isveduEiluteIrNudazau, 1000);














// FOR EACH KAIP VEIkia -------------------------------------------------------

// var masyvas = [1,2,3,4,5];

// var funkcija = function(item) {
//     console.log("masyvo elementas: " + item);
    
// }

// masyvas.forEach(funkcija);

// FOR EACH KAIP VEIkia -------------------------------------------------------

// var funkcija = function(item) {
    
// }

// masyvas.forEach( function(item) {
//     console.log("masyvo elementas NAUJAI: " + item);
    
// } );
 