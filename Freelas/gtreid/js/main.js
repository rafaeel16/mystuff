/***************** Page Scroll ******************/

$('a.page-scroll').bind('click', function(event) {
    var $anchor = $(this);
    $('html, body').stop().animate({
        scrollTop: ($($anchor.attr('href')).offset().top - 50)
    }, 1250, 'easeInOutExpo');
    event.preventDefault();
});

$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});

/***************** Google Map ******************/

function initialize() {
    var mapCanvas = document.getElementById('map');
    var mapOptions = {
        center: new google.maps.LatLng(-22.811468, -43.339176),
        zoom: 18,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(mapCanvas, mapOptions);

    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(-22.811468, -43.339176),
        map: map,
        title: 'Hello World!'
    });

}

google.maps.event.addDomListener(window, 'load', initialize);

/***************** Wow.js ******************/

new WOW().init();

/***************** Preloader ******************/

var preloader = $('.preloader');
$(window).load(function() {
    preloader.remove();
});
