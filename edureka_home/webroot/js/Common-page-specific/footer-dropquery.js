
	
	$(window).scroll(function (event) {
	
		var windscroll = $(window).scrollTop();
		   if (windscroll >= 100) {
        $('.footerquerybar').addClass('footerbar-transition');

    } else {

       $('.footerquerybar').removeClass('footerbar-transition');
    }
		
	});

	$('.scrollup').click(function() {
		$("html, body").animate({ scrollTop: 0 }, 600);
		return false;
	});
    $('.dropTrigger').click(function() {
		$('#dropQuery-form').slideUp();
		$(this).hide();
		
	});
	$('.closeQuery').click(function() {
		$('#dropQuery-form').slideDown();
		$('.dropTrigger').show();
	});
	$("#show-thank-msg").click(function() {
			$(".query-hide-submit").hide();
			$(".query-thank-msg").show();
	});
	$('requestforcallback').click(function() {
		$('#reqcallback-form').slideUp();
		
	});
	$('.closecallback').click(function() {
		$('#reqcallback-form').slideDown();
	});
	$("#show-thank-msg-callback").click(function() {
			$(".query-hide-submit-callback").hide();
			$(".query-thank-msg-callback").show();
	});
