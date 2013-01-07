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
	}
	if(scrollPosition <= 180){
		mainMenu.css('position', 'relative');
		$('.content-list').css('top', '0');
	}
});