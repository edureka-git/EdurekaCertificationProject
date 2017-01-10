
 

$(document).ready(function() { 


  $("#owl-quiz").owlCarousel({
	  
/*	  var carousel : $("#owl-quiz");*/
 	  pagination : false,
      navigation : false, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });
  $('#owlnext').click(function(){
    $("#owl-quiz").trigger('owl.next');
  });
  
  $('#owlprev').click(function(){
    $("#owl-quiz").trigger('owl.prev');
  });
  
  
  
  
  

/*Script for Clipboard starts */
 	var notH = 1,
    $pop = $('.srchtext').hover(function(){notH^=1;});

$(document).on('mousedown', function( e ){
  if(notH||e.which==27) $pop.stop().fadeOut();
});

    var clipboard = new Clipboard('.btncopytext');

    clipboard.on('success', function(e) {
        console.log(e);
    });

    clipboard.on('error', function(e) {
        console.log(e);
    });
/*Script for Clipboard ends */	
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

/*Script for Search Expand on click starts */
$(".srchclick").click(function(){
        $(".srchtext").toggle();
});
/*Script for Search Expand on click ends */

jQuery('.accordion_content').hide();
$('#accordioncourse').on('hidden.bs.collapse', toggleChevron);
$('#accordioncourse').on('shown.bs.collapse', toggleChevron);
$(".panel-heading").click(function() {
    $(this).toggleClass("active");
    $(".panel-heading").not(this).removeClass("active");
});

function toggleChevron(e) {
    $(e.target)
        .prev('.panel-faq,.panel-heading')
        .find("i.indicator")
        .toggleClass('icon-plus icon-minus');
}
$('#accordionfaqlms').on('hidden.bs.collapse', toggleChevron);
$('#accordionfaqlms').on('shown.bs.collapse', toggleChevron);
$(".panel-faq").click(function() {
    $(this).toggleClass("active");
    $(".panel-faq").not(this).removeClass("active");
});




/*Script for Accordion Expand on click ends */



$("#lmsvideoerror").on('click', function() {
	$("#lmsvideoerror").hide();
   $("#lmserrorsend").show();   
});
$("#errorsubmitlms").on('click', function() {
	$("#lmserrorsend").hide();
   $("#thankyoulmserror").show();   
});

$("#errorquizreport").on('click', function() {
	$("#errorquizreport").hide();
   $("#errorquizsend").show();   
});
$("#errorsubmitquiz").on('click', function() {
	$("#errorquizsend").hide();
   $("#thankyouquizerror").show();   
});

$("#subbuassign").on('click', function() {
	$("#upload").hide();
   $(".assigntank").show();   
});


/* Mobile exit quiz Confirmation popup */

		$(".mob-confirm").on("click", function() {
			 if ($(window).width() < 991) {
           $(".mob-confirm-overlay").show();
	       $(".confirm-box-quiz").show();
        }		 
		});
		$("#close-all-quiz-mob").on("click", function() {
			if ($(window).width() < 991) {
            $(".confirm-box-quiz").hide();
		  $(".mob-confirm-overlay").hide();
        }		 
		});
		/*****			*****/


$(document).ready(function(){
	 
        $('#quiz-ans-option li a').click(function () {
            $(this).toggleClass('lms-ans-current');
            
        });
		
		$("#close-quiz-2").on("click", function() {
         $(this).css("background", "#3778b0").css("color", "#ffffff");
	     $(".exit-sure-div").show();
		 
		});
         $("#dismiss-sure").on("click", function() {
			  $(".exit-sure-div").hide();
		  });
		/* Desktop exit quiz Confirmation popup */
		$("#close-quiz-1").on("click", function() {
	      $(".close-quiz-default").show();
		});
		$("#dismiss-sure-main").on("click", function() {
		  $(".close-quiz-default").hide();
		});
		/*****			*****/

		

		$("#dismiss-quiz-pop").on("click", function() {
			$(".quiz-hide-submit").hide();
			$(".show-quiz-finish").show();
		});
		$("#show-quiz-solution").on("click", function() {
			$(".show-quiz-finish").hide();
			$(".quiz-view-ans").show();
		});
		
		$('.btn-vertical-slider').on('click', function () {
        
        if ($(this).attr('data-slide') == 'next') {
            $('#Carousel-qus,#quiz-Carousel-solution').carousel('next');
        }
        if ($(this).attr('data-slide') == 'prev') {
            $('#Carousel-qus,#quiz-Carousel-solution').carousel('prev')
        }
    });
    $('.carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  for (var i=0;i<0;i++) {
    next=next.next();
    if (!next.length) {
    	next = $(this).siblings(':first');
  	}
    
    next.children(':first-child').clone().appendTo($(this));
  }
 });

 
    });
	$('#quizpopup').on('hidden.bs.modal', function () {
    	//$(".close-quiz-default, .confirm-box-quiz, .mob-confirm-overlay").hide();
		$("#close-all-quiz-mob, #dismiss-sure-main, #dismiss-sure").trigger('click');
	});

});
  