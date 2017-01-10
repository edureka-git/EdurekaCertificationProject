$('.trans-lg-btn').click(function() {
		if($('.trans-lg-btn').html()=='View all courses') {
			$('.trans-lg-btn').html('View less courses');
		} else {
			$('.trans-lg-btn').html('View all courses');
		}
		$('.expandablesec').slideToggle(500);
	});


  var clipboard = new Clipboard('.btncopytext');

   clipboard.on('success', function(e) {
        console.log(e);
    });

    clipboard.on('error', function(e) {
        console.log(e);
    });

  $(function () {
   $('[data-toggle="tooltip"]').tooltip()
  })
  // my course custom script
  
	$(function () {
		$('.percent').percentageLoader({
			valElement: 'p',
			strokeWidth: 6,
			bgColor: '#d9d9d9',
			ringColor: '#0e9d6a',
			textColor: '#9c9c9c',
			fontSize: '18px',
			fontWeight: 'bold'
		});
	
	});
 $(document).ready(function () {
    var carousel = $("#owl-demo");
  carousel.owlCarousel({
    navigation:true,
    navigationText: [
      "<img src='http://d30aa6afk7qd1v.cloudfront.net/imgver.6910622/img/left.png'>",
      "<img src='http://d30aa6afk7qd1v.cloudfront.net/imgver.6910622/img/right.png'>"
      ],
	  itemsCustom : [
            [0, 1],
            [480, 1],
            [600, 2],
            [700, 2],
			[900, 2],
            [1000, 2],
            [1200, 3],
            [1400, 3],
            [1600, 3]
          ],
  });
});

/*Script for Course Complete Widget starts */
$('.course_completetion_mycourse').each(function() {
	var performance_value = $(this).val();
	color_entity = '#0e9d6a';
	$(this).knob({
		'format' : function(value) {
			return value + '%';
		},
		'min' : 0,
		'max' : 100,
		'readOnly' : true,
		'fgColor' : color_entity,
		'bgColor ' : '#ececec',
		'dynamicDraw' : true,
		'thickness' : 0.2,
		'tickColorizeValues' : true,
		'skin' : 'tron',
		'linecap' : 'round'
	})

});

$("#discuss-all").click(function( event ) {
	 event.preventDefault();
     var txt = $(".Questionsrelated ol li:nth-child(n+6)").is(':visible') ? 'View all' : 'View less';
     $("#discuss-all").text(txt);
     $(".Questionsrelated ol li:nth-child(n+6)").slideToggle();
	
});

$("input[type=radio].icon-radio-cour-free").click(function () {
    $('#free-course-action a').removeClass('btn-grey-bg');
});
 $("#call-action-feed").click(function () {
	 $(this).children('.icon-up-arrow, .icon-down-arrow').toggleClass("icon-up-arrow icon-down-arrow");
	 $(this).toggleClass('btn-color');
   $('#feed-form').toggle();
							 
 });
   											
   //$("#close-feed-form").click(function () {
//    $('.feedback-mob-view').hide();
//   });
   
  	//$('.mycourse-rating').find('li.bottom-4').find('a').mouseover(function() {
//		$(this).css('background-color', '#F14950');
//    });
//	$('.mycourse-rating').find('li.mid-deck').find('a').mouseover(function() {
//		$(this).css('background-color', '#c45c38');
//    });
//	$('.mycourse-rating').find('li.top-3').find('a').mouseover(function() {
//		$(this).css('background-color', '#a3be53');
//    });
//	$('.mycourse-rating li a').mouseout(function() {
//		$(this).css('background-color', '#FFFFFF');
//    });
//	$('.mycourse-rating li a').click(function() {
//		toggleClick($(this));
//    });
//
//	function toggleClick (elem) {
//		$('.mycourse-rating li a').each(function(index, element) {
//            $(this).removeClass('active-click-bottom-4 active-click-mid-deck active-click-top-3');
//        });
//		if (elem.parent().hasClass('bottom-4')) {
//			elem.addClass('active-click-bottom-4');
//		} else if (elem.parent().hasClass('mid-deck')) {
//			elem.addClass('active-click-mid-deck');
//		} else if (elem.parent().hasClass('top-3')) {
//			elem.addClass('active-click-top-3');
//		}
//	}
	
	$('.mycourse-rating').find('li.pr-fdk').find('a').mouseover(function() {
		$(this).css('background-color', '#e15656');
    });
	$('.mycourse-rating').find('li.avg-fdk').find('a').mouseover(function() {
		$(this).css('background-color', '#f4b039');
    });
	$('.mycourse-rating').find('li.good-fdk').find('a').mouseover(function() {
		$(this).css('background-color', '#65a903');
    });
	$('.mycourse-rating li a').mouseout(function() {
		$(this).css('background-color', '#FFFFFF');
    });
	$('.mycourse-rating li a').click(function() {
		toggleClick($(this));
    });

	function toggleClick (elem) {
		$('.mycourse-rating li a').each(function(index, element) {
            $(this).removeClass('active-click-pr-fdk active-click-avg-fdk active-click-good-fdk');
        });
		if (elem.parent().hasClass('pr-fdk')) {
			elem.addClass('active-click-pr-fdk');
			$(".new-fbk-wrap").show();
			$(".neg-fback").show();
			$(".avg-fback").hide();
			
		} else if (elem.parent().hasClass('avg-fdk')) {
			elem.addClass('active-click-avg-fdk');
			$(".new-fbk-wrap").show();
			$(".neg-fback").hide();
			$(".avg-fback").show();
		} else if (elem.parent().hasClass('good-fdk')) {
			elem.addClass('active-click-good-fdk');
			$(".new-fbk-wrap").show();
			$(".neg-fback").hide();
			$(".avg-fback").show();
		}
	}

$('#tokenize1').tokenize({
    
    displayDropdownOnFocus: true
});
	
