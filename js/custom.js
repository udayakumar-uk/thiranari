$("#mob-menu-toggle").click(function() {
    $("#site-navigation-wrap").slideToggle("", function() {});
});

function myFunction(x) {
    x.classList.toggle("change");
}

//wow animation
var wow = new WOW({
    boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       0,          // distance to the element when triggering the animation (default is 0)
    mobile:       false,       // trigger animations on mobile devices (default is true)
    live:         true,       // act on asynchronously loaded content (default is true)
    callback:     function(box) {
},
    scrollContainer: null // optional scroll container selector, otherwise use window
});

wow.init();

