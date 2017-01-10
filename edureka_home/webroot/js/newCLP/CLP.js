$('body').scrollspy({
    target: '.bs-docs-sidebar',
    offset: 300
});
//$("#sidebar").affix({
//    offset: {
//      top: 80
//    }
//});


$('#sidebar').affix({
    offset: {     
      top: $('#sidebar').offset().top,
      bottom: ($('footer').outerHeight(true)) + 40
    }
});



(function($){
			$(window).load(function(){
				
				$(".country-drop-btn .bootstrap-select.btn-group .dropdown-menu.inner").mCustomScrollbar({
					theme:"minimal-dark",
					mouseWheel:{ preventDefault:true }
				});
				
			
				
				$(".country-drop-btn .bootstrap-select.btn-group .dropdown-menu.inner, html").on("mouseup pointerup",function(e){
					$(".country-drop-btn .bootstrap-select.btn-group .dropdown-menu.inner .mCSB_scrollTools").removeClass("mCSB_scrollTools_onDrag");
				}).on("click",function(e){
					if($(e.target).parents(".mCSB_scrollTools").length || $(".country-drop-btn .bootstrap-select.btn-group .dropdown-menu.inner .mCSB_scrollTools").hasClass("mCSB_scrollTools_onDrag")){ 
						e.stopPropagation(); 
					}
				});

			});
		})(jQuery);
		

$(document).ready(function () {

  $('#Wishlist-click').click(function (e) {
     $(this).find('i.fa').toggleClass('fa-heart-o fa-heart')
    var val = $(".Wishlist-div").text() == "Remove from Wishlist" ? "Add to Wishlist" : "Remove from Wishlist";
    $(".Wishlist-div").text(val).fadeIn("fast");
    e.preventDefault();
  });
});


$("#icon-Information-i").click(function () {
    $(".Updated-course-info-div").toggle();
});

$(document).click(function (e) {
    if (!$(e.target).hasClass("icon-Information-i")
        && $(e.target).parents(".Updated-course-info-div").length === 0) 
    {
        $(".Updated-course-info-div").hide();
    }
});
