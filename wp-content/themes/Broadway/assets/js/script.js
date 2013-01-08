$(window).ready(function(){

	var previousItem = "";

	//simple scrollTo animation
	$('.menu-item > a').click(function(event){
		event.preventDefault();

		//remove the class 'active-item'
		if(previousItem){ $(previousItem).toggleClass('active-item'); }

		$('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
		$(this).toggleClass('active-item');

		previousItem = this;
	});

	$('.flexslider').flexslider({
		animation: 'fade',
		useCSS: false,
		controlNav: false,
		directionNav: false,
		randomize: true,
		slideshowSpeed: 5000,
		animationSpeed: 1000,
		video: true
	});
});

$(window).scroll(function(){

	var scrollPosition = $(window).scrollTop();
	var mainMenu = $('.menu_container');

	//check what the scroll position is for the menu
	if(scrollPosition >= 180){
		
		mainMenu.css({
			'width': '100%',
			'top': '0',
			'position': 'fixed'
		});
		$('.content-list').css('top', '50px');
		$('.homeButton').css('opacity', '1');
	}
	if(scrollPosition <= 180){
		mainMenu.css('position', 'relative');
		$('.content-list').css('top', '0');
		$('.homeButton').css('opacity', '0');
	}
});