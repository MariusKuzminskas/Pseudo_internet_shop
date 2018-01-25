$(document).ready(function() {

    // bootstrap alert dismiss
    $('.alert').alert()

  

console.log("veikia console? ");



    

// setting active menu page by url
var pathname = window.location.pathname;
    
$('.navbar-nav > a[href="'+pathname+'"]').addClass('active');

   
    
    

}); //document.reay finish