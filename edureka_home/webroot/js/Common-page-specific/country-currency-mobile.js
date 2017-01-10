(function ($) {
        $(window).load(function () {

            $(".dropdown-menu-scrollbar").mCustomScrollbar({
                theme: "minimal-dark",
                mouseWheel: {preventDefault: true}
            });



            $(".dropdown-menu-scrollbar, html").on("mouseup pointerup", function (e) {
                $(".dropdown-menu-scrollbar .mCSB_scrollTools").removeClass("mCSB_scrollTools_onDrag");
            }).on("click", function (e) {
                if ($(e.target).parents(".mCSB_scrollTools").length || $(".dropdown-menu-scrollbar .mCSB_scrollTools").hasClass("mCSB_scrollTools_onDrag")) {
                    e.stopPropagation();
                }
            });

        });
    })(jQuery);

    $(function () {
        console.log('ready');

        $('#country-select-item li, #currency-select-item li').click(function (e) {
            e.preventDefault()

            $that = $(this);

            $that.parent().find('li').removeClass('select-right-item');
            $that.addClass('select-right-item');

        });


        $('[name="SearchCountryList"]').keyup(function (e) {
            var code = e.keyCode || e.which;
            if (code == '9')
                return;
            if (code == '27')
                $(this).val(null);
            var $rows = $(this).closest('.search-country-wrap').find('.country-list-wrap li');
            var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
            $rows.show().filter(function () {
                var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
                return !~text.indexOf(val);
            }).hide();
        });

    })