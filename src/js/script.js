$(document).ready(function() {

    instafeed.js 
    var feed = new Instafeed({
    get: 'user',
    userId: '201846217',
    limit: 6,
    accessToken : '201846217.1677ed0.c490befc2ce9451ebfcdd077ddc2d85d',
    sortBy: 'most-recent',
    template: '<a href="{{link}}"><img class="insta-img" src="{{image}}" /></a>'

});
feed.run();

console.log("veikia console? ");


}); //document.reay finish