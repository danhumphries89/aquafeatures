$(window).ready(function(){

	//simple scrollTo animation
	$('.menu-item > a').click(function(event){
		event.preventDefault();

		$('html,body').animate({
			scrollTop: ($(this.hash).offset().top - 50)
		}, 500, 'swing');

	});

	$('.slideshow0').flexslider({ itemWidth: 600, animation: 'slide', slideshow: false, useCSS: false, animationSpeed: 400 });
	$('.slideshow1').flexslider({ itemWidth: 600, animation: 'slide', slideshow: false, useCSS: false, animationSpeed: 400 });
	$('.slideshow2').flexslider({ itemWidth: 600, animation: 'slide', slideshow: false, useCSS: false, animationSpeed: 400 });
	$('.slideshow3').flexslider({ itemWidth: 600, animation: 'slide', slideshow: false, useCSS: false, animationSpeed: 400 });
	$('.slideshow4').flexslider({ itemWidth: 600, animation: 'slide', slideshow: false, useCSS: false, animationSpeed: 400 });

	initializeGoogleMap();
});

$(window).scroll(function(){

	var scrollPosition = $(window).scrollTop();
	var mainMenu = $('.menu_container');

	//check what the scroll position is for the menu
	if(scrollPosition >= 180){
		
		mainMenu.css({
			'width': '100%',
			'top': '0',
			'position': 'fixed',
			'box-shadow': '0 2px 5px #333'
		});
		$('.content-list').css('top', '50px');
		$('.homeButton').css('opacity', '1');
		$('.content-overlay').css('top', '50px');
	}
	if(scrollPosition <= 180){
		mainMenu.css({
			'position': 'relative',
			'box-shadow': 'none'

		});
		$('.content-list').css('top', '0');
		$('.homeButton').css('opacity', '0');
		$('.content-overlay').css('top', '0');
	}
});

function initializeGoogleMap() {
  // Create an array of styles.
  var styles = [
    {
      stylers: [
        { hue: "#333333" },
        { saturation: -75 }
      ]
    },{
      featureType: "road",
      elementType: "geometry",
      stylers: [
        { lightness: 100 },
        { visibility: "simplified" }
      ]
    },{
      featureType: "road",
      elementType: "labels",
      stylers: [
        { visibility: "off" }
      ]
    }
  ];

  // Create a new StyledMapType object, passing it the array of styles,
  // as well as the name to be displayed on the map type control.
  var styledMap = new google.maps.StyledMapType(styles, {name: "Styled Map"});

  // Create a map object, and include the MapTypeId to add
  // to the map type control.
  var mapOptions = {
    zoom: 14,
    center: new google.maps.LatLng(51.101925, 1.039549),
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
    }
  };
  var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);

  //Associate the styled map with the MapTypeId and set it to display.
  map.mapTypes.set('map_style', styledMap);
  map.setMapTypeId('map_style');
}