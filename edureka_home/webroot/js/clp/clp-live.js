$(document).ready(function() { 
$( '#myTab a' ).click( function ( e ) {
	e.preventDefault();
	$( this ).tab( 'show' );
  } );

  ( function( $ ) {
	  fakewaffle.responsiveTabs( [ 'xs', 'sm' ] );
  } )( jQuery );
function toggleChevron(e) {
    $(e.target)
        .prev('.panel-headingnew')
        .find("i.indicator")
        .toggleClass('fa-chevron-down fa-chevron-up');
}
$('#CourseFeatures').on('hidden.bs.collapse', toggleChevron);
$('#CourseFeatures').on('shown.bs.collapse', toggleChevron);
$(".panel-headingnew").click(function() {
    $(this).toggleClass("active");
    $(".panel-headingnew").not(this).removeClass("active");
});
});
$(document).ready(function() { 
function toggleChevron(e) {
    $(e.target)
        .prev('.panel-heading')
        .find("i.indicator")
        .toggleClass('fa-plus fa-minus');
}
$('#collapse-myTab').on('hidden.bs.collapse', toggleChevron);
$('#collapse-myTab').on('shown.bs.collapse', toggleChevron);
$(".clp_tab_active").click(function() {
    $(this).toggleClass("active");
    $(".clp_tab_active").not(this).removeClass("active");
});
});
function toggleChevron(e) {
    $(e.target)
        .prev('.panel-headingfaq')
        .find("i.indicator")
        .toggleClass('fa-plus fa-minus');
}
$('#accordionfaq').on('hidden.bs.collapse', toggleChevron);
$('#accordionfaq').on('shown.bs.collapse', toggleChevron);
$(".panel-headingfaq").click(function(){
    $(this).toggleClass("active");
    $(".panel-headingfaq").not(this).removeClass("active");

});

    $(document).ready(function() {     
      var owl = $("#owl-demo");     
      owl.owlCarousel({
         autoPlay: 7000,
		 stopOnHover : true,
		 loop:true,
		 rewindNav: true,
          itemsCustom : [
		  [320, 1],
            [480, 1],
            [600, 1],
            [700, 1],
            [1000, 1],
            [1200, 2],
            [1400, 2],
            [1600, 2]
          ],
          navigation : true     
      });     
    });

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();	 
});

  

  