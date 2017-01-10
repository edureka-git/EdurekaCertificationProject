
    	
    	//Notifications
    	(function($){
    		$(window).load(function(){			
    			$(".dropdown-menu-scrollbar").mCustomScrollbar({
    				theme:"minimal-dark",
    				mouseWheel:{ preventDefault:true }
    			});
    			
    			$(".dropdown-menu-scrollbar, html").on("mouseup pointerup",function(e){
    				$(".dropdown-menu-scrollbar .mCSB_scrollTools").removeClass("mCSB_scrollTools_onDrag");
    			}).on("click",function(e){
    				if($(e.target).parents(".mCSB_scrollTools").length || $(".dropdown-menu-scrollbar .mCSB_scrollTools").hasClass("mCSB_scrollTools_onDrag")){ 
    					e.stopPropagation(); 
    				}
    			});
				
				$("#header-II .search-nav .dropdown-menu > li").hover(function(e) {
					$("#header-II .search-nav .dropdown-menu > li").removeClass("active");
					$(this).toggleClass("active");
				});

    		});
			
    	})(jQuery);


  	
	   /* accordion scroll top */
	$('#footer-accordion').on('shown.bs.collapse', function () {
		
		var panel = $(this).find('.in');		
		$('html, body').animate({
			scrollTop: panel.offset().top
		}, 500);
		
	});
	
	/* accordion scroll top end */
	
	$(window).scroll(function (event) {
		
		if ($(this).scrollTop() > 700) {
			$('.scrollup').fadeIn();
		} else {
			$('.scrollup').fadeOut();
		}
		
		
	});

	$('.scrollup').click(function() {
		$("html, body").animate({ scrollTop: 0 }, 600);
		return false;
	});
    