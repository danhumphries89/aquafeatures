$(window).ready(function(){$(".menu-item > a").click(function(e){e.preventDefault();$("html,body").animate({scrollTop:$(this.hash).offset().top-50},500,"swing")});$(".slideshow0").flexslider({itemWidth:600,animation:"slide",slideshow:!1,useCSS:!1,animationSpeed:400});$(".slideshow1").flexslider({itemWidth:600,animation:"slide",slideshow:!1,useCSS:!1,animationSpeed:400});$(".slideshow3").flexslider({itemWidth:600,animation:"slide",slideshow:!1,useCSS:!1,animationSpeed:400})});$(window).scroll(function(){var e=$(window).scrollTop(),t=$(".menu_container");if(e>=180){t.css({width:"100%",top:"0",position:"fixed","box-shadow":"0 2px 5px #333"});$(".content-list").css("top","50px");$(".homeButton").css("opacity","1");$(".content-overlay").css("top","50px")}if(e<=180){t.css({position:"relative","box-shadow":"none"});$(".content-list").css("top","0");$(".homeButton").css("opacity","0");$(".content-overlay").css("top","0")}});