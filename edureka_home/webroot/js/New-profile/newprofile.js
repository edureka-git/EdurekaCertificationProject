
//$(document).ready(function(){
//    $(".addcomm").click(function(){
//		if ($.trim($(this).text()) === 'Add Community') {
//        	$(this).text('Save');
//		} 
//		else {
//			$(this).text('Add Community');        
//		}
//    });
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
		
jQuery(document).ready(function($) {

	$('input').focusin(function() {
		input = $(this);
		input.data('place-holder-text', input.attr('placeholder'))
		input.attr('placeholder', '');
	});

	$('input').focusout(function() {
		input = $(this);
		input.attr('placeholder', input.data('place-holder-text'));
	});
$('#community-select').each(function () {
        var select = $(this), values = {};
        $('option', select).each(function (i, option) {
            values[option.value] = option.selected;
        }).click(function (event) {
            values[this.value] = !values[this.value];
            $('option', select).each(function (i, option) {
                option.selected = values[option.value];
            });
        });
    });
if (typeof $.easySelect === 'function')
       $('#community-select').easySelect();
   $('.profile-multiselect-trigger').click(function (event) {
       event.stopPropagation();
       $('#community-select').slideToggle("fast");
   });
   $('#community-select').on("click", function (event) {
       event.stopPropagation();
   });
   $(document).on("click", function () {
       $('#community-select').slideUp('slow');
   });
   $('#community-select option').on('click', function (e) {
       e.preventDefault();
       $('#community-select').data('easySelect').refresh();
   });
  
});

jQuery(document).ready(function($) {

	$('textarea').focusin(function() {
		textarea = $(this);
		textarea.data('place-holder-text', textarea.attr('placeholder'))
		textarea.attr('placeholder', '');
	});

	$('textarea').focusout(function() {
		textarea = $(this);
		textarea.attr('placeholder', textarea.data('place-holder-text'));
	});

$(".postquestion").on('click', function() {
   $(".popupmodal").hide();
   $(".successmsg").show();
});
$(".supportbtn").one( "click", function() {
   $('.errorbatch').hide();
   $('.note-editable').addClass('error');
    //   $('.supportdropdown').addClass('supportpadding1');
	//   $('.supportinput').addClass('supportpadding2');
	//   $('.textedit').addClass('supportpadding3');
   
});
$('.changebatch').click(function() {
   $(".supportinputdesc").hide();
   $(".note-editor .note-toolbar").hide();
   $(".attachfile").hide();
   $(".file-attach-popup").hide();
   $(".choosebatchdrpdwn").show();
   $(".successtext").html("Your request for batch change was successfully received");
   $('.note-editable').css("height", "100px");
   $('.note-editable').removeClass('error');
   $('.textedit .form-group .note-editor').addClass('error');
   $('.errorcat').show();
   $('.errorcourse').show();
   $('.errordesc1').show();
   $('.errordesc2').hide();
   $('.errorbatch').show();
    //   $('.supportdropdown').addClass('supportpadding1');
	//   $('.supportinput').addClass('supportpadding2');
	//   $('.textedit').addClass('supportpadding3');
  });
  
$('.other').click(function() {
   $(".choosebatchdrpdwn").hide();
   $(".note-editor .note-toolbar").show();
   $(".attachfile").show();
   $(".file-attach-popup").show();
   $(".supportinputdesc").show();
   $(".successtext").html("Your message was successfully received");
   $('.note-editable').css("height", "170px");
   $('.note-editable').addClass('error');
   $('.textedit .form-group .note-editor').removeClass('error');
   $('.errorcat').show();
   $('.errorcourse').show();
   $('.errordesc1').show();
   $('.errordesc2').show();
   $('.errorbatch').hide();
    //   $('.supportdropdown').addClass('supportpadding1');
	//   $('.supportinput').addClass('supportpadding2');
	//   $('.textedit').addClass('supportpadding3');
  });
 
$(".dropdown-menu li a").click(function(){
  var selText = $(this).text();
  $(this).parents('.classbutton').find('.dropdown-toggle').html('<span class="selectclass">'+selText+'</span><span class="selectclasscaret fa fa-angle-down">');
  /*$(this).parents('.supportdropdown').find('.dropdown-toggle').html('<span class="selectcat">'+selText+'</span><span class="selectclasscaret fa fa-angle-down">');*/
  
});
});

  
//$('changebatch').click(function(){  
//	$('#question_desc').attr('placeholder', 'Add your reason')

