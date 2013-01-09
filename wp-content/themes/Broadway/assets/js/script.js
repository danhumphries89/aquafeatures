$(window).ready(function(){

	var previousItem = "";

	//simple scrollTo animation
	$('.menu-item > a').click(function(event){
		event.preventDefault();

		//remove the class 'active-item'
		if(previousItem){ $(previousItem).toggleClass('active-item'); }

		$('html,body').animate({
			scrollTop: ($(this.hash).offset().top - 50)
		}, 500, 'swing');

		$(this).toggleClass('active-item');

		previousItem = this;
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