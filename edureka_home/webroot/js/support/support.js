
		// video popup file upload

$(function(){

    var ul = $('#uploadvideo ul');

    $('#drop a').click(function(){
        // Simulate a click on the file input button
        // to show the file browser dialog
        $(this).parent().find('input').click();
    });

    // Initialize the jQuery File Upload plugin
    $('#uploadvideo').fileupload({

        // This element will accept file drag/drop uploading
        dropZone: $('#drop'),

        // This function is called when a file is added to the queue;
        // either via the browse button, or via drag/drop:
        add: function (e, data) {

                        var tpl = $('<li class="working"><i class="icon-file"></i>'+'<p></p><span> X </span></li>');

            // Append the file name and file size
            tpl.find('p').append('<i class="ulpoad-file-text">' +data.files[0].name+ '</i>')
                         .append('<i class="displaynone-filesize">' + formatFileSize(data.files[0].size) + '</i>')
						 .append('<div class="progress"><div class="progress-bar" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" role="progressbar" style="width:100%"></div></div>');
						 
	        // Display the comment section after se;ecting the file					 
			tpl.find('li').change($("#lmssubcomment").css("display", "block"));
			
            // Add the HTML to the UL element
            data.context = tpl.appendTo(ul);

            // Initialize the knob plugin
            tpl.find('input').knob();

            // Listen for clicks on the cancel icon
            tpl.find('span').click(function(){

                if(tpl.hasClass('working')){
                    jqXHR.abort();
					$("#validfileselect").css("display", "block");
                }

                tpl.fadeOut(function(){
                    tpl.remove();
					$("#validfileselect").css("display", "block");
                });

            });

            // Automatically upload the file once it is added to the queue
            var jqXHR = data.submit();
        },

        progress: function(e, data){

            // Calculate the completion percentage of the upload
            var progress = parseInt(data.loaded / data.total * 100, 10);

            // Update the hidden input field and trigger a change
            // so that the jQuery knob plugin knows to update the dial
            data.context.find('input').val(progress).change();

            if(progress == 100){
                data.context.removeClass('working');
            }
        },

        fail:function(e, data){
            // Something has gone wrong!
            data.context.addClass('error');
        }

    });


    // Prevent the default action when a file is dropped on the window
    $(document).on('drop dragover', function (e) {
        e.preventDefault();
    });

    // Helper function that formats the file sizes
    function formatFileSize(bytes) {
        if (typeof bytes !== 'number') {
            return '';
        }

        if (bytes >= 1000000000) {
            return (bytes / 1000000000).toFixed(2) + ' GB';
        }

        if (bytes >= 1000000) {
            return (bytes / 1000000).toFixed(2) + ' MB';
        }

        return (bytes / 1000).toFixed(2) + ' KB';
    }

});


		$(document).ready(function() {
			var showChar = 395;
			var ellipsestext = "...";
			var moretext = "Read More";
			var lesstext = "Read Less";
			$('.more').each(function() {
				var content = $(this).html();
		
				if(content.length > showChar) {
		
					var c = content.substr(0, showChar);
					var h = content.substr(showChar-0, content.length - showChar);
		
					var html = c + '<span class="moreellipses">' + ellipsestext+ '</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
		
					$(this).html(html);
				}
		
			});
		
			$(".morelink").click(function(){
				if($(this).hasClass("less")) {
					$(this).removeClass("less");
					$(this).html(moretext);
				} else {
					$(this).addClass("less");
					$(this).html(lesstext);
				}
				$(this).parent().prev().toggle();
				$(this).prev().toggle();
				return false;
			});
		});

		$(document).ready(function(){
			$('.view-hiiden-list-comment').click(function(){
			
			   $('.hidden-list-comment').slideToggle('slow');
			   if($(this).text() == 'Click to hide the comments')
			   {
				   $(this).text('View 3 more conversations');
			   }
			   else
			   {
				   $(this).text('Click to hide the comments');
			   }
				   });
		});

    (function($){
           $(window).on("load",function(){
            $(".support-drop-list").mCustomScrollbar();
        });
    })(jQuery);
	(function($){
           $(".chnage-batch-select").on("click",function(){
            $(".three-batch-select").css("display","block");
        });
    })(jQuery);
	(function($){
           $(".non-batch-selection").on("click",function(){
            $(".three-batch-select").css("display","none");
        });
    })(jQuery);
	(function($){
           $(".Re-open-click-direct").on("click",function(){
            $(".direct-closed-ticket-open").css("display","block");
        });
    })(jQuery);
	(function($){
           $(".Post-and-re-open").on("click",function(){
            $(".closed-ticket-open").css("display","block");
			$(".view-hiiden-list-comment").css("display","none");
			$(".closed-hidden-list-comment").css("display","block");			
        });
    })(jQuery);

		jQuery(document).ready(function($){
	
jQuery.each(jQuery('textarea[data-autoresize]'), function() {
    var offset = this.offsetHeight - this.clientHeight;
 
    var resizeTextarea = function(el) {
        jQuery(el).css('height', '35px').css('height', el.scrollHeight + offset);
    };
    jQuery(this).on('keyup input', function() { resizeTextarea(this); }).removeAttr('data-autoresize');
});
});


	$(".file-1").fileinput({
    uploadUrl: "/file-upload-batch/2",
    autoReplace: false,
	showUpload: false,
	showRemove: false,
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
	
	$(document).ready(function() {
	function auto_grow(element) {
    element.style.height = "5px";
    element.style.height = (element.scrollHeight)+"px";
	}
	});

    $('.slb').simplebox({
      fadeSpeed: 350
    });

  	$(document).ready(function() {
	$('.post-support-btn').attr('disabled', true);
	$('textarea').on('keyup',function() {
		var textarea_value = $("#texta").val();
		
		if(textarea_value != '') {
			$('.post-support-btn').attr('disabled' , false);
		}else{
			$('.post-support-btn').attr('disabled' , true);
		}
	});
	});

$(document).ready(function() {
    $(".Recent-Activity-panel-data-mobile").hide();
    $(".arrow-up").hide();
    $(".Recent-mobile").click(function(){
            $(this).next(".Recent-Activity-panel-data-mobile").slideToggle(500);
            $(this).find(".arrow-up, .arrow-down").toggle();
    });
});

 