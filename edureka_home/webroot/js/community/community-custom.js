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

$(function () {
                $('#btn-active-post').keyup(function () {
                    if ($(this).val() == '') {
                        //Check to see if there is any text entered
                        // If there is no text within the input ten disable the button
                        $('.comm-post-btn').prop('disabled', true);
                    } else {
                        //If there is text in the input, then enable the button
                        $('.comm-post-btn').prop('disabled', false);
                    }
                });
            }); 

jQuery(document).ready(function($){
	
jQuery.each(jQuery('textarea[data-autoresize]'), function() {
    var offset = this.offsetHeight - this.clientHeight;
 
    var resizeTextarea = function(el) {
        jQuery(el).css('height', '33px').css('height', el.scrollHeight + offset);
    };
    jQuery(this).on('keyup input', function() { resizeTextarea(this); }).removeAttr('data-autoresize');
});

    $("[data-collapse-group='myDivs']").click(function () {
    var $this = $(this);
   $("[data-collapse-group='myDivs']:not([data-target='" + $this.data("target") + "'])").each(function () {
        $($(this).data("target")).removeClass("in").addClass('collapse');
   });
});



$('.comm-sidebar').Stickyfill();




$('#comments').hide();
//Attach click event to button
$('.commentsBtn').click(function() {
    $('#comments').slideToggle('slow');
    $(this).hide();
    //Kill the default function of the anchor tag
    return false;
});





	var maxLength = 412;
	$(".show-read-more").each(function(){
		var myStr = $(this).text();
		if($.trim(myStr).length > maxLength){
			var newStr = myStr.substring(0, maxLength);
			var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
			$(this).empty().html(newStr);
			$(this).append(' <a href="javascript:void(0);" class="read-more">...read more</a>');
			$(this).append('<span class="more-text">' + removedStr + '</span>');
		}
	});
	$(".read-more").click(function(){
		$(this).siblings(".more-text").contents().unwrap();
		$(this).remove();
	});
	

	$("body").tooltip({selector:'[data-show=tip]'});
	

	
});

$(document).ready(function () {
    // Load the first 3 list items from another HTML file
   
    $('#act-error-list > div:lt(3)').show();
    var items =  5;
    var shown =  3;
    $('#act-loadMore').click(function () {
     
        shown = $('#act-error-list > div:visible').size()+2;
        if(shown< items) {$('#act-error-list > div:lt('+shown+')').show();}
        else {$('#act-error-list > div:lt('+items+')').show();
             $('#act-loadMore').hide();
             }
    });
	
	$('#comm-thread-list > div:lt(5)').show();
    var itemsthrd =  7;
    var shownth =  5;
    $('#comm-th-loadMore').click(function () {
     
        shownth = $('#comm-thread-list > div:visible').size()+2;
        if(shownth< itemsthrd) {$('#comm-thread-list > div:lt('+shownth+')').show();}
        else {$('#comm-thread-list > div:lt('+itemsthrd+')').show();
             $('#comm-th-loadMore').hide();
             }
    });
	
            $(".dropdown-courses dt a").click(function() {
                $(".dropdown-courses dd ul").toggle();
            });
                        
            $(".dropdown-courses dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown-courses dt a span").html(text);
                $(".dropdown-courses dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown-courses"))
                   {$(".dropdown-courses dd ul").hide();}
            });

	$(".srchclick").click(function(){
       $(".searchlmscontent").toggle();
				
     });
	 	var notH = 1,
    $pop = $('.searchlmscontent').hover(function(){notH^=1;});

$(document).on('mousedown', function( e ){
  if(notH||e.which==27) $pop.stop().fadeOut();
});

$(".file-1").fileinput({
    uploadUrl: "/file-upload-batch/2",
    autoReplace: false,
	showUpload: false,
	showRemove: false,
	showClose:false,
	dropZoneEnabled:false,
		showCaption: false,
		layoutTemplates: {
          actions: '<div class="file-actions">\n' +
                  '    <div class="file-footer-buttons" style="float:none">\n' +
                  '        {upload}{delete}{other}' +
                  '    </div>\n' +
                  '</div>',
          actionDelete: '<button type="button" class="kv-file-remove custome-remove-icon" {dataUrl}{dataKey}><i class=\"icon-cross\"></i></button>',
          actionUpload: '',
      },
    maxFileCount: 3,
	browseClass: "atach-btn-file",
	browseLabel: "",
	browseIcon: "<i class=\"icon-attach\"></i> ",
    allowedFileExtensions : ['jpg', 'png','gif','swf','pdf','3gp','flv','mp4','ogg','webm','csv','xlsx', 'xls','zip','zar','tar'],
	previewFileIcon: "<i class='fa fa-file'></i>"
	});
	
	 $('.slb').simplebox({
      fadeSpeed: 350
    });

});

