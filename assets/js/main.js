$(document).ready(function() {
	
	// navigation
	var menuIsOpen = false;

	$('.holder, .menu-item').click(function() {
		if(!menuIsOpen){
		    $('.menu').toggleClass('switch-menu'); 
		    $('.holder').removeClass('barb'); 
		    $('.holder').addClass('barc');
		    menuIsOpen = true;
 		} else {
		    $('.menu').toggleClass('switch-menu');  
		    $('.holder').removeClass('barc'); 
		    $('.holder').addClass('barb'); 
		    menuIsOpen = false;
        }
    });

    var x = window.matchMedia("(max-width: 1024px)")

    if (x.matches) { // If media query matches
        var zoomLevel = 10;
        var mapLong = '-2.786351';
    } else {
        var zoomLevel = 11;
        var mapLong = '-2.679845';
    }


    /* Google Map */
    var location1 = new google.maps.LatLng(51.39776, -2.345490);
    var location2 = new google.maps.LatLng(51.383365, -2.363548);
    var location3 = new google.maps.LatLng(51.455188, -2.592527);
    var location4 = new google.maps.LatLng(51.231409, -2.321106);
    var location5 = new google.maps.LatLng(51.452486, -2.597608);

    var mapcenter = new google.maps.LatLng(51.352741, mapLong);

    var mapOptions = {
        
        zoom: zoomLevel,

        mapTypeControl: false,
        scaleControl: false,
        scrollwheel: false,
        navigationControl: false,
        streetViewControl: false,
        zoomControl: true,

        // The latitude and longitude to center the map (always required)
        center: mapcenter,
        // How you would like to style the map. 
        // This is where you would paste any style found on Snazzy Maps.
        styles: [{"featureType":"administrative","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"saturation":-100},{"lightness":"50"},{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"lightness":"30"}]},{"featureType":"road.local","elementType":"all","stylers":[{"lightness":"40"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]},{"featureType":"water","elementType":"labels","stylers":[{"lightness":-25},{"saturation":-100}]}]
    };

    // Get the HTML DOM element that will contain your map 
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('map');

    // Create the Google Map 
    var map = new google.maps.Map(mapElement, mapOptions);

    // Custom icon
    // var image = 'img/grey-pin.png';

    // Marker 2
    var infowindow2 = new google.maps.InfoWindow({
          content: 'Bath Artisan Market<br>(Queens Square)'
        });

    var marker2 = new google.maps.Marker({
        position: location2,
        map: map,
        title: 'Bath Artisan Market'
    });

    marker2.addListener('click', function() {
        infowindow2.open(map, marker2);
    });

    // Marker 3
    var infowindow3 = new google.maps.InfoWindow({
          content: 'St Nicholas Street Food Market<br>(Wine Street)'
        });

    var marker3 = new google.maps.Marker({
        position: location3,
        map: map,
        title: 'St Nicholas Street Food Market'
    });

    marker3.addListener('click', function() {
        infowindow3.open(map, marker3);
    });

    // Marker 4
    var infowindow4 = new google.maps.InfoWindow({
          content: 'Frome Independent Market'
        });

    var marker4 = new google.maps.Marker({
        position: location4,
        map: map,
        title: 'Frome Independent Market'
    });

    marker4.addListener('click', function() {
        infowindow4.open(map, marker4);
    });

    // Marker 5
    var infowindow5 = new google.maps.InfoWindow({
          content: 'The Harbourside Market'
        });

    var marker5 = new google.maps.Marker({
        position: location5,
        map: map,
        title: 'The Harbourside Market'
    });

    marker5.addListener('click', function() {
        infowindow5.open(map, marker5);
    });

    // Re-centre on resize
    google.maps.event.addDomListener(window, "resize", function() {
       var center = map.getCenter();
       google.maps.event.trigger(map, "resize");
       map.setCenter(center); 
    });





    // Load page achors depending on screen size
    if ($(window).width() <= 576){  

        $('#fullpage').fullpage({

            anchors: ['home', 'theFlatbreads', 'theFlatbreadsPic', 'about', 'suppliers', 'findUs', 'getInTouch']

        });
    }   
    else {

        document.getElementById("section2a").outerHTML='';

        $('#fullpage').fullpage({

            anchors: ['home', 'theFlatbreads', 'about', 'suppliers', 'findUs', 'getInTouch']

        });
    }

});