 $(document).ready(function () {
  
    

        $("#cbxShowHide").click(function () {
            if ($(this).is(":checked")) {
                $("#pageloaddiv").show();
            } else {
                $("#pageloaddiv").hide();
            }

        });
        $("#divListBox").click(function () {
            $('.filt_wrapper_new input').prop('checked', false);

        });
        $(".show-wish").hide();
        $("#add-list-wish").click(function () {
            $(".not-wish").hide();
            $(".show-wish").show();


        });
        $(".show-wish").hide();
        $("#add-list-wish-grid").click(function () {
            $(".not-wish").hide();
            $(".show-wish").show();

        });


        $("#batch-table-link1").click(function (event) {

            event.preventDefault();
            var txt = $("#open-batch-content").is(':visible') ? 'Show Batches' : 'Hide Batches';
            $("#batch-table-link1").text(txt);
            $("#open-batch-content").slideToggle();


        });

        $(".show-hidden-course").click(function (event) {

            event.preventDefault();
            var txt = $(".hidden-courselist").is(':visible') ? 'View all' : 'View less';
            $(".show-hidden-course").text(txt);
            $(".hidden-courselist").slideToggle();


        });
		
		$("#filter-mobile").click(function () {
        $("#overlay-res").css({"display": "block"});
        $("#filter-sm-xs").show();
		});
    });