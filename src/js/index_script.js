$(document).ready(function() {
    AOS.init();
    // bootstrap alert dismiss
    $('.alert').alert()

    instafeed.js 
    var feed = new Instafeed({
    get: 'user',
    userId: '201846217',
    limit: 6,
    accessToken : '201846217.1677ed0.c490befc2ce9451ebfcdd077ddc2d85d',
    sortBy: 'most-recent',
    resolution: 'standard_resolution',
    template: '<div class="col-lg-2 col-md-4 col-sm-6"><a href="{{link}}"><img data-aos="fade-up" data-aos-duration="2000" data-aos-delay="1000"  class="insta-img d-block mx-auto w-100" src="{{image}}" /></a></div>'

});
feed.run();

console.log("veikia console? ");

// setting active menu page by url
var pathname = window.location.pathname;
    
$('.navbar-nav > a[href="'+pathname+'"]').addClass('active');


}); //document.reay finish