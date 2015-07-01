/*
	===============================================

	Remove "no-js" class  

	===============================================
	*/	

jQuery( document ).ready( function( $ ) {
	document.documentElement.className = 
	document.documentElement.className.replace("no-js","js");
});

/*
	=====================================================

	Back to top scrolling

	=====================================================
	*/		


jQuery(document).ready(function( $ ){
	// scroll body to 0px on click
	$('#back-to-top a').click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 800);
		return false;
	});
});

/*
	=====================================================

	Responsive Nav

	=====================================================
	*/	

jQuery(document).ready(function( $ ){

	
	 var navigation2 = responsiveNav(".hidden-search", {
		 customToggle: "search-toggle",
		 navClass: "hidden-search", // String: Default CSS class. If changed, you need to edit the CSS too!
		 navActiveClass: "js-search-active", //
	 });
	 

	var navigation1 = responsiveNav(".main-navigation", {
		customToggle: "nav-toggle",                 // Selector: Specify the ID of a custom toggle
		 // Swapping no-js to js with script instead
		 // openPos: "static",
	});
});




/*
	=====================================================

	Google Fonts 

	=====================================================
	*/	

jQuery(document).ready(function($) { // Wrap all scripts in this
WebFontConfig = {
    google: { families: [ 'Raleway:400,300,200:latin' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); 
}); // Wrap all scripts in this


/*
	=====================================================

	Wow.js

	=====================================================
	*/	

jQuery(document).ready(function($) { // Wrap all scripts in this
	// http://paulirish.com/2011/requestanimationframe-for-smart-animating/
	// http://my.opera.com/emoller/blog/2011/12/20/requestanimationframe-for-smart-er-animating

	// requestAnimationFrame polyfill by Erik Möller. fixes from Paul Irish and Tino Zijdel

	// MIT license

	(function() {
	    var lastTime = 0;
	    var vendors = ['ms', 'moz', 'webkit', 'o'];
	    for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
	        window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
	        window.cancelAnimationFrame = window[vendors[x]+'CancelAnimationFrame'] 
	                                   || window[vendors[x]+'CancelRequestAnimationFrame'];
	    }

	    if (!window.requestAnimationFrame)
	        window.requestAnimationFrame = function(callback, element) {
	            var currTime = new Date().getTime();
	            var timeToCall = Math.max(0, 16 - (currTime - lastTime));
	            var id = window.setTimeout(function() { callback(currTime + timeToCall); }, 
	              timeToCall);
	            lastTime = currTime + timeToCall;
	            return id;
	        };

	    if (!window.cancelAnimationFrame)
	        window.cancelAnimationFrame = function(id) {
	            clearTimeout(id);
	        };
	}());

	new WOW().init();
});


/*
	=====================================================

	Headroom.js 

	=====================================================
	*/	

jQuery(document).ready(function($) { // Wrap all scripts in this

	// grab an element
	var myElement = document.querySelector(".site-header");
	// construct an instance of Headroom, passing the element
	var headroom = new Headroom(myElement, {
		"offset": 105,
		 "tolerance": 5,
		 "classes": {
			 "initial": "animated",
		 // "top": "headroom--top slideUp",
		 //	"notTop": "headroom--not-top slideDown"
		 }
	});
	// initialise
	headroom.init(); 

}); // end Wrap all scripts in this



/*
	=====================================================

	Local Scroll

	=====================================================
	*/	

jQuery(document).ready(function($) { // Wrap all scripts in this
 		// Local Scroll //
		$('.hero-cta').localScroll({
			duration: 1000
		});
});

/*
	=====================================================

	FitVids

	=====================================================
	*/	

jQuery(document).ready(function($) { // Wrap all scripts in this
 		// Target your .container, .wrapper, .post, etc.
    	$(".section").fitVids();
});

/*
	=====================================================

	Google Map

	=====================================================
*/	
/* 
jQuery(document).ready(function($) { // Wrap all scripts in this
	$('#map_canvas').gmap({
		'center': new google.maps.LatLng(41.390954, 2.168001), // Change this to your desired latitude and longitude
		'zoom': 17,
		'mapTypeControl': false,
		'scrollwheel': false,
		'navigationControl': false,
		'streetViewControl': false,
		'styles': [{
			stylers: [{
				gamma: 0.60
			}, {
				hue: "#333333"
			}, {
				invert_lightness: false
			}, {
				lightness: 2
			}, {
				saturation: -30
			}, {
				visibility: "on"
			}]
		}]
	});
	var image = {
		url: 'assets/images/marker.png', // Define the map marker file here
		// This marker is 51 pixels wide by 63 pixels tall.
		size: new google.maps.Size(51, 63),
		// The origin for this image is 0,0.
		origin: new google.maps.Point(0, 0),
		// The anchor for this image is the base of the flagpole at 26,63.
		anchor: new google.maps.Point(26, 63)
	};
	$('#map_canvas').gmap().bind('init', function () {
		$('#map_canvas').gmap('addMarker', {
			'id': 'marker-1',
			'position': '41.390954,2.168001',
			'bounds': false,
			'icon': image
		}).click(function () {
			$('#map_canvas').gmap('openInfoWindow', {
				'content': '<h4>ELT Innovation in Action</h4><p><strong>Oxford TEFL Barcelona</strong><br>Calle Diputación, 279, Barcelona, Spain </p>'
			}, this);
		});
	});
	
	// end
});
*/
/*
	=====================================================

	Match Height

	=====================================================
*/	
jQuery(document).ready(function( $ ){
    $('#categories-front .media-object').matchHeight({
    	byRow: true,
    	target: $('#categories-front .media-object:first-of-type')
	});
});

new svgIcon( document.querySelector( '.si-icons-easing .si-icon-hamburger-cross' ), svgIconConfig, { easing : mina.elastic, speed: 600 } );