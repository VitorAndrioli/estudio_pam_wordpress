var HomePage = function() {
	var home_page = {
		init: function() {
			
			var screen_width = $(window).width(),
				column_number = Math.floor(screen_width/290),
				column_width = (100/column_number); 
				
			console.log(screen_width, column_number, column_width);
			
			for (var i=0; i<column_number; i++)
				$("div#homecol div#columns").append("<ul id='column-" + i + "'></ul>");
		  
		  	$("div#homecol div#columns ul").width(column_width + "%");
		  	
		  	$(".polaroid a img").one('load', function() {
		  		var shortest = [].reduce.call($("div#columns ul"), function(sml, cur) {
				    return $(sml).height() <= $(cur).height() ? sml : cur;
				});
				
				$(shortest).append($(this).parent().parent());
			  
			}).each(function() {
			  if(this.complete) $(this).load();
			});
		  	
		  	
				/*for (var i=1, last = $("div#homecol div#image-container .polaroid").length; i<= last; i++) {
				
				var shortest = [].reduce.call($("div#columns ul"), function(sml, cur) {
				    return $(sml).height() <= $(cur).height() ? sml : cur;
				});
				
				$(shortest).append($("div#homecol div#image-container .polaroid:nth-child(" + 1 + ")"));
			};
			*/
			
		  	
		  	$(window).resize(function () {
		  		window.location.reload();
		  	});
			  
  		},
		
		set_footer: function() {
			var allPanels = $('footer div#footermenu div.content').hide();
			
			$('footer div#footermenu h2').click(function() {
				allPanels.slideUp();
				
				//$(".footer-menu-active").removeClass("footer-menu-active");
				
				if (!$(this).hasClass("footer-menu-active")) {
				    $(".footer-menu-active").removeClass("footer-menu-active");
					$(this).addClass("footer-menu-active").next().slideDown(200);
				} else {
			    	$(".footer-menu-active").removeClass("footer-menu-active").next().slideUp(200);
			    }
	  		});
		}
	};
	home_page.init();
	//home_page.set_footer();
};

$(document).ready(function() {
	var home_page = new HomePage();
});
