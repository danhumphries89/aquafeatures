$(window).scroll(function(){var e=$(window).scrollTop(),t=$(".menu_container");if(e>=180){t.css({width:"100%",top:"0",position:"fixed"});$(".content-list").css("top","50px")}if(e<=180){t.css("position","relative");$(".content-list").css("top","0")}});