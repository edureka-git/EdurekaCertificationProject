
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
	
		$(document).ready(function() {  
			$('#Questionsrelat ol').hideMaxListItems({ 'max':5, 'speed':500});
		});  

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
  $( '#lmsTab a' ).click( function ( e ) {
	e.preventDefault();
	$( this ).tab( 'show' );
  } );

$(document).ready(function(){
    $(".srchclick").click(function(){
        $(".srchtext").toggle();
    });
});

	function toggleChevron(e) {
    $(e.target)
        .prev('.panel-heading')
        .find("i.indicator")
        .toggleClass('fa-pluslms fa-minuslms');
}
$('#accordioncourse').on('hidden.bs.collapse', toggleChevron);
$('#accordioncourse').on('shown.bs.collapse', toggleChevron);
$(".panel-heading").click(function() {
    $(this).toggleClass("active");
    $(".panel-heading").not(this).removeClass("active");
});

//	function toggleChevron(e) {
//    $(e.target)
//        .prev('.panel-curr')
//        .find("i.indicator")
//        .toggleClass('fa-plus fa-minus');
//}
//$('#accordioncurr').on('hidden.bs.collapse', toggleChevron);
//$('#accordioncurr').on('shown.bs.collapse', toggleChevron);
//$(".panel-curr").click(function() {
//    $(this).toggleClass("active");
//    $(".panel-curr").not(this).removeClass("active");
//});




	function toggleChevron(e) {
    $(e.target)
        .prev('.panel-faq')
        .find("i.indicator")
        .toggleClass('fa-pluslms fa-minuslms');
}
$('#accordionfaqlms').on('hidden.bs.collapse', toggleChevron);
$('#accordionfaqlms').on('shown.bs.collapse', toggleChevron);
$(".panel-faq").click(function() {
    $(this).toggleClass("active");
    $(".panel-faq").not(this).removeClass("active");
});

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

	//$(function() {
//    	$(".userleftcontent").fadeIn(2000).delay(3000).fadeOut(2000);
//	});

//	$(".userleftpoint").click(function(){
//    $(".userleftpoint").hide();
//});

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

			});
		})(jQuery);


// stop background scroll when popup opens

//initialize
modalbgscroll();

//call when the page resizes.
$(window).resize(function() {
    modalbgscroll();
});

function modalbgscroll() {
    if($(window).width() < 991)
    {   
      var cPosition = false;

$('.modal').on('show.bs.modal', function(){

    cPosition = $(window).scrollTop();
})
.on('shown.bs.modal', function(){

    $('body').css({
        position:'fixed'
    });

})
.on('hide.bs.modal', function(){

    $('body').css({
        position:'relative'
    });

    window.scrollTo(0, cPosition);

});   
	
	/* Mobile exit quiz Confirmation popup */
		$(".mob-confirm").on("click", function() {
		 $(".mob-confirm-overlay").show();
	     $(".confirm-box-quiz").show();
		});
		$("#close-all-quiz-mob").on("click", function() {
		  $(".confirm-box-quiz").hide();
		  $(".mob-confirm-overlay").hide();
		});
		/*****			*****/
		
		
    }
}

// stop background scroll when popup opens end

$(document).ready(function(){
	 
        $('#quiz-ans-option li a').click(function () {
            $('#quiz-ans-option li a').removeClass('lms-ans-current').addClass('ans-link');
            $(this).removeClass('ans-link').addClass('lms-ans-current');
            
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
	})