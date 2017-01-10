function likeCourse(course, login) {
    var context = window.location.href;
    var useremail = $("#uemailid").val();
    status = "user not logged in";
    course_name = $(".course-display-title-" + course).html();
    event_action = course_name;
    var doubleflag = false;
    if (useremail != "NA")
    {
        status = "user logged in";
    }
    var currenttimestamp = new Date($.now());
    if (typeof currentView != 'undefined') {
        event_label = "UserEmail: " + useremail + "---" + "TimeStamp: " + currenttimestamp + "--" + "UserStatus: " + status + "---" + "Current View : " + currentView;
        ga('send', 'event', "Add to Wishlist", event_action, event_label, 0);
        doubleflag = true;
    }

    if (login == 1) {
//        $("#signin-modal").addClass('md-show');
        $("#LogIn").removeClass("active in");
        $("#SignUp").addClass("active in");
        $(".Signinspace").removeClass("active");
        $(".SignUpspace").addClass("active");
        $('.signin.md-trigger.top-signin').trigger('click');
       
    }
    if (typeof clp_version == "undefined") {
        clp_version = "";
    }
    if (typeof login == "undefined") {
        login = false;
    }
    if (typeof offer_id == "undefined") {
        offer_id = "";
    }
    course_id = course;
    if (course !== undefined) {
        // likeUnlike(course, true);
//		$('#ajax-loader').show();
        $.ajax({
            type: "GET",
            url: window.location.origin + "/interested/" + course,
            data: {course_id: course_id, clp_version: clp_version, offer_id: offer_id, login: login},
            dataType: 'json',
            beforeSend: function () {
                /*Make the wishlist heart red color before sending the ajax as it takes time on all course page*/
                /*New All course page v2 - Start*/
                if (!login) {
                    $('.allcourse-wishlist-heart-' + course_id).html('<i class="fa fa-heart btn-link" style=" color:#e94e4e !important;" ></i>');
                    $('.allcourse-wishlist-heart-' + course_id).attr('onclick', 'unlike(' + course_id + ')');
                    $('.allcourse-wishlist-heart-' + course_id).attr('data-original-title', 'Remove from wishlist');
                    if ($(window).width() <= 991) {
                        $(".allcourse-added-wish").show();
                        setTimeout(function () {
                            $('.allcourse-added-wish').fadeOut('fast');
                        }, 3000);
                    }
                }
                /*New All course page v2 - End*/
            },
            success: function (data) {
                if (data.success) {
                    var user_id = data.u_id;
                    var user_email = data.u_email;
                    var page_title = data.context;
                    if (data.status !== "undefined" && data.status == "lead")
                    {
                        $('#load_conversion_code').load(webURL + 'contents/load_conversion_code/' + course_id);
                    }
                    if (user_id !== "undefined" && doubleflag == false) {
                        event_label = "UserEmail: " + user_email + "---" + "TimeStamp: " + currenttimestamp + "--" + "UserStatus: " + "Logged in" + "---" + "PageTitle : " + page_title;
                        ga('send', 'event', "Add to Wishlist", data.course_title, event_label, 0);
                    }
                    $('#open_tickets').html(data.count);
                    likeUnlike(course, true);
//					$('#ajax-loader').hide();
                    // $('#like_'+course).hide();
                } else {
                    console.log('some error while updating');
                }
//				$('#ajax-loader').hide();
            },
            error: function (error) {
                console.log(error);
            }
        });
    }
}
function unlike(course) {
    var useremail = $("#uemailid").val();
    status = "user not logged in";
    course_name = $(".course-display-title-" + course).html();
    event_action = course_name;
    var doubleflagunlike = false;
    if (useremail != "NA")
    {
        status = "user logged in";
    }
    var currenttimestamp = new Date($.now());
    if (typeof currentView != 'undefined') {
        event_label = "UserEmail: " + useremail + "---" + "TimeStamp: " + currenttimestamp + "--" + "UserStatus: " + status + "---" + "Current View : " + currentView;
        ga('send', 'event', "Remove from Wishlist", event_action, event_label, 0);
        doubleflagunlike = true;
    }

    if (course !== undefined) {
        likeUnlike(course, false);
//		$('#ajax-loader').show();
        $.ajax({
            type: "GET",
            url: window.location.origin + "/remove/" + course,
            dataType: 'json',
            beforeSend: function () {
                /*New All course page v2 - Start*/
                $('.allcourse-wishlist-heart-' + course).html('<i class="fa fa-heart-o btn-link" ></i>');
                $('.allcourse-wishlist-heart-' + course).attr('onclick', 'likeCourse(' + course + ')');
                $('.allcourse-wishlist-heart-' + course).attr('data-original-title', 'Add to wishlist');
                if ($(window).width() <= 991) {
                    $(".allcourse-removed-wish").show();
                    setTimeout(function () {
                        $('.allcourse-removed-wish').fadeOut('fast');
                    }, 3000);
                }
                /*New All course page v2 - End*/
            },
            success: function (data) {
                if (data.success) {
                    var user_id = data.u_id;
                    var user_email = data.u_email;
                    var context = window.location.href;
                    if (user_id !== "undefined" && doubleflagunlike == false) {
                        event_label = "UserEmail: " + user_email + "---" + "TimeStamp: " + currenttimestamp + "--" + "UserStatus: " + "Logged in" + "---" + "PageTitle : " + context;
                        ga('send', 'event', "Remove from Wishlist", data.course_title, event_label, 0);
                    }
                    //                        console.log('Update');
                    $('#open_tickets').html(data.count);
                    likeUnlike(course, false);
//					$('#ajax-loader').hide();
                    // $('#like_'+course).hide();
                } else {
                    console.log('some error while updating session');
                }
//				$('#ajax-loader').hide();
            },
            error: function (error) {
            }
        });
    }
}
function likeUnlike(id, like) {
    favouritecount();
    var path = $(location).attr('pathname');
    if ((path.indexOf('favourite') > -1)) {
        $('.listview-visible #like_' + id).parent().parent().parent(
                '.cours-listbox').remove();
        $('.gridview-visible #like_' + id).parent().parent().parent(
                '.cours-listbox').remove();
    }
    if ((path.indexOf('favourite') > -1)) {
        if ($('.cbp-vm-options + ul li').length <= 0) {
            window.location.href = webURL + 'all-courses';
        }
    }
    if (like) {
        $('.listview-visible #like_' + id).attr('onclick', 'unlike(' + id + ')');
        $('.listview-visible #like_' + id).attr('data-original-title', 'Wishlist -');
        $('.listview-visible #like_' + id).html(
                '<i class="fa fa-heart btn-link" style="color:#e94e4e !important; text-shadow: 1px 1px #aaa !important;"></i> <span class="hidden-xs btn-link">Remove from wishlist&nbsp;</span>');
        $('.gridview-visible #like_' + id).attr('onclick', 'unlike(' + id + ')');
        $('.gridview-visible #like_' + id).attr('data-original-title', 'Wishlist -');
        $('.gridview-visible #like_' + id).html(
                '<i class="fa fa-heart btn-link" style="color:#e94e4e !important; text-shadow: 1px 1px #aaa !important;"></i> <span class="hidden-xs btn-link listview-visible" style="display: none;">Remove from wishlist&nbsp;</span>');
        $('.like_' + id).attr('onclick', 'unlike(' + id + ')');
        $('.like_' + id).attr('data-original-title', 'Wishlist -');
        $('.like_' + id).html(
                '<i class="fa fa-heart btn-link" style="color:#e94e4e !important; text-shadow: 1px 1px #aaa !important;"></i> <span class="hidden-xs btn-link">Remove from wishlist&nbsp;</span>');
        $('#gridlike_' + id).attr('onclick', 'unlike(' + id + ')');
        $('#gridlike_' + id).attr('data-original-title', 'Wishlist -');
        $('#gridlike_' + id).html(
                '<i class="fa fa-heart btn-link" style="color:#aaa;"></i>');

    } else {
        $('.listview-visible #like_' + id).attr('onclick',
                'likeCourse(' + id + ')');
        $('.listview-visible #like_' + id).attr('data-original-title', 'Wishlist +');
        $('.listview-visible #like_' + id).html(
                '<i class="fa fa-heart-o btn-link" style="color: #797979 !important;text-shadow: 1px 1px #aaa;"></i> <span class="hidden-xs btn-link">Add to wishlist&nbsp;</span>');
        $('.gridview-visible #like_' + id).attr('onclick',
                'likeCourse(' + id + ')');
        $('.gridview-visible #like_' + id).attr('data-original-title', 'Wishlist +');
        $('.gridview-visible #like_' + id).html(
                '<i class="fa fa-heart-o btn-link" style="color: #797979 !important;text-shadow: 1px 1px #aaa;"></i> <span class="hidden-xs btn-link listview-visible" style="display: none;">Add to wishlist&nbsp;</span>');
        $('.like_' + id).attr('onclick', 'likeCourse(' + id + ')');
        $('.like_' + id).attr('data-original-title', 'Wishlist +');
        $('.like_' + id).html(
                '<i style="color: #797979 !important;text-shadow: 1px 1px #aaa;" class="fa fa-heart-o btn-link"></i> <span class="hidden-xs btn-link">Add to wishlist&nbsp;</span>');
        $('#gridlike_' + id).attr('onclick', 'likeCourse(' + id + ')');
        $('#gridlike_' + id).attr('data-original-title', 'Wishlist +');
        $('#gridlike_' + id).html(
                '<i class="fa fa-heart-o btn-link" style="color:#aaa !important;text-shadow: 1px 1px #aaa;"></i>');

    }

}
function assignPrice(currency) {

    if (typeof coursesGlobalPrice !== "undefined") {
        $.each(coursesGlobalPrice,
                function (i, val) {
                    //console.log(val[currency]);
                    var string = str = '';

                    var currencySymbol = currency.toLowerCase();
                    currencySymbol = allCurrencySign[currencySymbol];
                    var courseId_index = val['offer_batch']['course_id'];
                    var ambElement = $(".AmpPoint");
                    // && (val[currency]['discountedPrice'] < val[currency]['price'])
                    if (typeof val['offer_batch'] !== "undefined" && typeof val['offer_batch']['price_discount_' + currency.toLowerCase()] !== "undefined" && val['offer_batch']['price_discount_' + currency.toLowerCase()] < val['offer_batch']['price_' + currency.toLowerCase()])
                    {
                        var disStr = 0;
                        var toolStr = '';

                        if (val['offer_batch']['discount_type_' + currency.toLowerCase()] == 1) {
                            disStr = parseInt(val['offer_batch']['discount_value_' + currency.toLowerCase()]);
                            toolStr = val['offer_batch']['discount_value_' + currency.toLowerCase()] + '%';
                        } else {
                            toolStr = currencySymbol + val['offer_batch']['discount_value_' + currency.toLowerCase()];
                        }

                        if (typeof val['offer_batch']['over_discount'] !== "undefined") {
                            $.each(val['offer_batch']['over_discount'], function (i, val) {
                                if (val['over_discount_type_' + currency.toLowerCase()] == 1) {
                                    disStr = disStr + parseInt(val['over_discount_value_' + currency.toLowerCase()]);
                                    toolStr = toolStr + ' + ' + val['over_discount_value_' + currency.toLowerCase()] + '%';
                                } else {
                                    toolStr = toolStr + ' + ' + currencySymbol + val['over_discount_value_' + currency.toLowerCase()];
                                }
                            });
                        }

                        if (toolStr.length > 0)
                            toolStr = toolStr + ' Offer';

                        var newPrice = val['offer_batch']['price_discount_' + currency.toLowerCase()];
                        if (typeof ambassadorAmount !== "undefined" && !isNaN(ambassadorAmount[currency.toLowerCase()])) {
                            if (newPrice <= ambassadorAmount[currency.toLowerCase()]) {
                                toolStr = toolStr + ' + ' + newPrice + ' credits applied';
                                newPrice = 0;
                            } else {
                                newPrice = newPrice - ambassadorAmount[currency.toLowerCase()];
                                toolStr = toolStr + ' + ' + ambassadorAmount[currency.toLowerCase()] + ' credits applied';
                            }
                            ambElement.html(ambassadorAmount[currency.toLowerCase()]);
                        }

                        str = '<b>' + currencySymbol
                                + newPrice + '</b>&nbsp;'
                                + '<small class="text-muted">' + currencySymbol
                                + (val['offer_batch']['price_' + currency.toLowerCase()]) + '</small>&nbsp;'
                                + '&nbsp;<span style="color:green;">(' + disStr + '% Off)</span><span data-toggle="tooltip" title="' + toolStr + '" style="background: rgb(221, 221, 221) none repeat scroll 0% 0%; position: relative; top: 1px; border-radius: 45px; color: rgb(0, 0, 0); font-weight: bolder; font-size: 13px; padding: 0px 7px 0px 4px; margin-left: 4px;"> i </span>';
                        // string = '<small class="text-muted">' + currencySymbol + val[currency]['price'] + '</small><br><b>' + currencySymbol + val[currency]['discountedPrice'] + '</b>';
                    } else {

                        var newPrice = val['offer_batch']['price_' + currency.toLowerCase()];
                        if (typeof ambassadorAmount !== "undefined" && !isNaN(ambassadorAmount[currency.toLowerCase()]) && (paidCourses.indexOf(courseId_index) < 0)) {
                            if (newPrice <= ambassadorAmount[currency.toLowerCase()]) {
                                toolStr = toolStr + ' + ' + newPrice + ' credits applied';
                                newPrice = 0;
                            } else {
                                newPrice = newPrice - ambassadorAmount[currency.toLowerCase()];
                                toolStr = toolStr + ' + ' + ambassadorAmount[currency.toLowerCase()] + ' credits applied';
                            }
                            ambElement.html(ambassadorAmount[currency.toLowerCase()]);

                            str = '<b>' + currencySymbol
                                    + newPrice + '</b>&nbsp;'
                                    + '<small class="text-muted">' + currencySymbol
                                    + (val['offer_batch']['price_' + currency.toLowerCase()]) + '</small>&nbsp;';
                        } else {
                            str = '<b>' + currencySymbol
                                    + newPrice + '</b>';
                        }
                    }
                    //console.log('.setprice-' + i);
                    $('.setprice-' + courseId_index).html(str);

                    $.each(val['Batch'],
                            function (j, values) {
                                //if (values[currency] != undefined) {
                                //&& (values[currency]['discountedPrice'] < values[currency]['price'])
                                var batchId = values['id'];

                                if ((typeof val['offer_batch']['batch_discount'] !== "undefined") && typeof val['offer_batch']['batch_discount'][batchId] !== "undefined") {

                                    var newPrice = val['offer_batch']['batch_discount'][batchId]['price_discount_' + currency.toLowerCase()];
                                    if (typeof ambassadorAmount !== "undefined" && !isNaN(ambassadorAmount[currency.toLowerCase()])) {
                                        newPrice = newPrice - ambassadorAmount[currency.toLowerCase()];
                                        ambElement.html(ambassadorAmount[currency.toLowerCase()]);
                                    }

                                    var st = '<b>'
                                            + currencySymbol
                                            + newPrice
                                            + '</b><br><small class="text-muted">'
                                            + currencySymbol
                                            + val['offer_batch']['batch_discount'][batchId]['price_' + currency.toLowerCase()]
                                            + '</small>';
                                } else if (typeof val['offer_batch']['price_discount_' + currency.toLowerCase()] !== "undefined" && val['offer_batch']['price_discount_' + currency.toLowerCase()] < val['offer_batch']['price_' + currency.toLowerCase()]) {

                                    var newPrice = val['offer_batch']['price_discount_' + currency.toLowerCase()];
                                    if (typeof ambassadorAmount !== "undefined" && !isNaN(ambassadorAmount[currency.toLowerCase()])) {
                                        if (newPrice <= ambassadorAmount[currency.toLowerCase()]) {
                                            toolStr = toolStr + ' + ' + newPrice + ' credits applied';
                                            newPrice = 0;
                                        } else {
                                            newPrice = newPrice - ambassadorAmount[currency.toLowerCase()];
                                            toolStr = toolStr + ' + ' + ambassadorAmount[currency.toLowerCase()] + ' credits applied';
                                        }
                                        ambElement.html(ambassadorAmount[currency.toLowerCase()]);
                                    }

                                    var st = '<b>'
                                            + currencySymbol
                                            + newPrice
                                            + '</b><br><small class="text-muted">'
                                            + currencySymbol
                                            + val['offer_batch']['price_' + currency.toLowerCase()]
                                            + '</small>';
                                } else {

                                    var newPrice = val['offer_batch']['price_' + currency.toLowerCase()];
                                    if (typeof ambassadorAmount !== "undefined" && !isNaN(ambassadorAmount[currency.toLowerCase()]) && (paidCourses.indexOf(courseId_index) < 0)) {
                                        if (newPrice <= ambassadorAmount[currency.toLowerCase()]) {
                                            toolStr = toolStr + ' + ' + newPrice + ' credits applied';
                                            newPrice = 0;
                                        } else {
                                            newPrice = newPrice - ambassadorAmount[currency.toLowerCase()];
                                            toolStr = toolStr + ' + ' + ambassadorAmount[currency.toLowerCase()] + ' credits applied';
                                        }

                                        ambElement.html(ambassadorAmount[currency.toLowerCase()]);

                                        var st = '<b>'
                                                + currencySymbol
                                                + newPrice
                                                + '</b><br><small class="text-muted">'
                                                + currencySymbol
                                                + val['offer_batch']['price_' + currency.toLowerCase()]
                                                + '</small>';
                                    } else {
                                        var st = '<b>'
                                                + currencySymbol
                                                + newPrice
                                                + '</b>';
                                    }
                                }

                                $('.setBatchprice-' + batchId).html(st);
                                //}
                            });
                });

        $('#ajax-loader').hide();
        $('[data-toggle="tooltip"]').tooltip();
    }
//    osp rendreing changed to jquery logic based on currency
    if (typeof coursesprice !== "undefined") {
//        console.log(coursesprice);
          var cur = currency.toLowerCase();
          if (cur == "inr")
            {
                $("#payment-inr-button").show();
                $("#payment-paypal-button").hide();
//                    $(".paypal-btn").attr("onclick",'submit_paypal_form('+cur+')');
            } else {
                $("#payment-inr-button").hide();
                $("#payment-paypal-button").show();
                // $(".paypal-btn").attr("onclick",'submit_paypal_form('+cur+')');
            }
            
        var tempdatarray =   coursesprice;
        
        orderpageDiscountShow(tempdatarray,cur); 
        if (typeof coupouncode !== "undefined" && coupouncode) {
            afterCoupounApply(cur);
        }
    }

}

function getPrice(currency, flag) {
    var current_cuurency = $('input[name="seesion_cuurency"]').val();
    $('input[name="seesion_cuurency"]').val(currency);
    var loc = "/img/flags/" + currency;
    $('.country_flags').attr("src", loc.toLowerCase());
    ga('send', 'event', 'Currency Change', current_cuurency, currency, 0);
    var currencydata = new Array();
    var context = window.location.pathname;
    var x = {
        'c': currency,
        'context': context
    };

    currencydata.push(x);



    if (currency == "INR") {

        $("#ccavenue_emi_banner").show();
        $("#paypal_emi_banner").hide();
        $(".offer_bundle_panel_inr").show();
        $(".offer_bundle_panel_usd").hide();
    } else {

        $("#ccavenue_emi_banner").hide();
        $("#paypal_emi_banner").show();
        $(".offer_bundle_panel_inr").hide();
        $(".offer_bundle_panel_usd").show();
    }

    $(".osp").hide();
    var panelshow = "#" + currency + "_panel_order_summary";
    $(panelshow).show();

    if (flag == 1) {
        //            $('#ajax-loader').show();
        $.ajax({
            url: webURL + 'courses/setcurrency',
            data: {
                json: JSON.stringify(currencydata)
            },
            type: 'POST',
            dataType: 'json',
            beforeSend: function () {
                //$('#loader_useredit').show();
            },
            error: function () {
            },
            success: function (data) {
                //$('#ajax-loader').hide();
            }
        });

    }
    //        $('#ajax-loader').hide();
    var path = $(location).attr('pathname');
//	if ((path.indexOf('search') > -1) || (path.indexOf('favourite') > -1)
//			|| (path.indexOf('all-courses') > -1)) {
    assignPrice(currency);
//	}
}
/**
 *
 * @returns {undefined}
 */
function resetPreferenceValues() {

    $('.newsigninsignup.cntry-curncy-wrapper [name="SearchCountryList"]').val('');
    $('.no-country-matches-found').hide();
    $('.newsigninsignup.cntry-curncy-wrapper .search-country-wrap').find('.country-list-wrap li').show();
    var reset = false;
    $('.newsigninsignup.cntry-curncy-wrapper .select-right-item').each(function () {
        if ($(this).hasClass('country-item') && $(this).data('countryid') != default_country) {
            reset = true;
        }
        if ($(this).hasClass('currency-item') && $(this).data('value') != popup_currency) {
            reset = true;
        }
    });
    if (reset) {
        $('#setpreferrence_table input[name="preferred_country"]').val(default_country);
        $('#setpreferrence_table input[name="preferred_timezone"]').val(default_time);
        $('#setpreferrence_table input[name="preferred_currency"]').val(popup_currency);
        $('#country-select-item  li, #currency-select-item li').removeClass('select-right-item');
        var lielement = $('#country-select-item li[data-countryid="' + default_country + '"]');
        lielement.addClass('select-right-item');
        if (!lielement.is(':first-child')) {
            lielement.closest('ul .mCSB_container').prepend(lielement);
        }
        var lielement = $('#currency-select-item li[data-value="' + popup_currency + '"]');
        lielement.addClass('select-right-item');

    }
}
function resetPreferenceValuesOnBrowserBack() {
    if (typeof default_country == 'undefined')
        return false;
    var changed_country = $('#setpreferrence_table input[name="preferred_country"]').val();
    var changed_currency = $('#setpreferrence_table input[name="preferred_currency"]').val();
    var changed_timezone = $('#setpreferrence_table input[name="preferred_timezone"]').val();
    var timezoneOffset = $('#setpreferrence_table input[name="preferred_timezone_offset"]').val();
    if ((changed_country != default_country || changed_currency != popup_currency) && timezoneOffset != '') {
        default_country = changed_country;
        updateCountryValue(changed_country);
        $('.contact-for-other,.contact-for-india').addClass('hide');
        if (changed_country == 'IN')
            $('.contact-for-india').removeClass('hide');
        else
            $('.contact-for-other').removeClass('hide');

        var currency_ = popup_currency = changed_currency;
        onCurrencyChange(currency_);
        if (typeof setNewCurrency == 'function') {
            setNewCurrency(currency_);
        } else if (typeof priceChange == 'function') {
            priceChange(currency_);
        }
        if (typeof getPrice == 'function') {
            getPrice(currency_, false);
        }
        changePrizeWithSign(currency_);

        var timezone_ = default_time = changed_timezone;
        if (typeof changeTimezone == 'function') {
            changeTimezone(timezone_, timezoneOffset);
        }
        resetPreferenceValues();
    }
}
/**
 *
 * @returns {undefined}
 */
function updateCountryValue(countryId) {

    $('select.edu-common-country-select').val(countryId);
    if (typeof $().selectpicker == 'function') {

        $('select.edu-common-country-select').val();
        var selectedOption = $('select.edu-common-country-select option[value=' + countryId + ']');
        var htmlData = '<i class="glyphicon ' + selectedOption.data('icon') + '"></i> ' + selectedOption.html() + '';
        var selectedOptionLiIndex = selectedOption.data('index');
        $('.country-dropdown-wrapper span.filter-option').html(htmlData);
        $('.country-dropdown-wrapper span.filter-option').closest('button.dropdown-toggle').attr('title', selectedOption.html());
        $('.country-dropdown-wrapper .dropdown-menu.inner li').removeClass('selected active');
        $('.country-dropdown-wrapper .dropdown-menu.inner li[data-original-index=' + selectedOptionLiIndex + ']').addClass('selected active');

    }
//        $('.edu-common-country-select').selectpicker('refresh');
}
/**
 *
 * @param {type} param
 */
function changeCountryRequest(requestData, updateModal) {
    $.ajax({
        url: webURL + 'preferences/updatepreference',
        data: requestData,
        type: 'POST',
        dataType: 'json',
        success: function (response) {
            $("#overlay-res").hide();

            if (typeof response == 'object') {
                if (typeof response.preffered_country != 'undefined') {
                    var country = default_country = response.preffered_country;
                    updateCountryValue(country);
                }
                if (typeof response.preffered_currency != 'undefined') {
                    var currency_ = popup_currency = response.preffered_currency;
                    onCurrencyChange(currency_);
                    if (typeof setNewCurrency == 'function') {
                        setNewCurrency(currency_);
                    } else if (typeof priceChange == 'function') {
                        priceChange(currency_);
                    }
                    if (typeof getPrice == 'function') {
                        getPrice(currency_, false);
                    }
                    changePrizeWithSign(currency_);

                }
                if (typeof response.preferred_timezone != 'undefined') {
                    var timezone_ = default_time = response.preferred_timezone;
                    var timezoneOffset = response.preferred_timezone_offset;
                    if (typeof changeTimezone == 'function') {
                        changeTimezone(timezone_, timezoneOffset);
                        $('#setpreferrence_table input[name="preferred_timezone"]').val(timezoneOffset);
                        $('#setpreferrence_table input[name="preferred_timezone_offset"]').val(timezoneOffset);
                    }
                    if (typeof getTime == 'function') {
                        getTime(timezone_, false);
                    }
                }
                if (typeof response.country != 'undefined') {
                    $('#setpreferrence_table input[name="country_code"]').val(response.country);
                    $('.contact-for-other,.contact-for-india').addClass('hide');
                    if (response.country == 'IN')
                        $('.contact-for-india').removeClass('hide');
                    else
                        $('.contact-for-other').removeClass('hide');
                }
            }

            if (updateModal)
                resetPreferenceValues();
            toggleScroll(false);
            $('#modal-country-currency-new').removeClass('md-show');
        }
    });
}

/*
 Added by viky to handle currency change requests
 */
function onCurrencyChange(currency) {
    currency = currency.toLowerCase();
    if (typeof isAmbassadorMoneyAvailable != 'undefined' && typeof ambassadorAmount != "undefined") {
        if (ambassadorAmount != null && typeof ambassadorAmount[currency] != "undefined" && !isNaN(ambassadorAmount[currency])) {
            $(".AmpPoint").html(ambassadorAmount[currency]);
            $('.referral-credits-title').each(function () {
                var template = $(this).data('title-template');
                template = template.replace('<ref_credits>', ambassadorAmount[currency]);
                $(this).attr('data-original-title', template);
                $(this).attr('title', template);
            });
        }
    }
}
$(document).ready(function (e) {
    $('select.edu-common-country-select').off('change');
    $('select.edu-common-country-select').on('change', function () {
        var selected = $(this).val();

        var context = window.location.pathname;
        if ($('#custom-payment-currency').length > 0) {
            var selectedCurrency = $('#custom-payment-currency').val();
            var x = {'preferred_country': selected, 'preferred_currency': selectedCurrency, 'context': context};
        } else {

            var x = {'preferred_country': selected, 'context': context};
        }
        changeCountryRequest(x, true)
    });
    $('.cuntry-submit.cancel-btn-filter').off('click');
    $('.cuntry-submit.cancel-btn-filter').on('click', function () {
        $('html,body').css('overflow', 'visible');
        var selected = $(this).closest('div.md-modal').find('.md-content .md-close');
        selected.trigger('click');

    });
    $('#setpreferrence_table').off('submit');
    $('#setpreferrence_table').on('submit', function () {
        $('html,body').css('overflow', 'visible');
        var postData = $(this).serialize();
        changeCountryRequest(postData, true);
        return false;
    });
    $('#country-select-item , #currency-select-item').off('click', 'li');
    $('#country-select-item , #currency-select-item').on('click', 'li', function (e) {
        e.preventDefault()

        $that = $(this);
        $that.parent().find('li').removeClass('select-right-item');
        $that.addClass('select-right-item');
        var updateTimezone = false;
        if ($that.closest('#country-select-item').length > 0) {
            $('#currency-select-item li').removeClass('select-right-item');
            $('#currency-select-item li[data-value="' + $that.data('currency') + '"]').addClass('select-right-item');
        }
        $('.cntry-curncy-panel .select-right-item').each(function () {
            if ($(this).hasClass('country-item')) {
                $('#setpreferrence_table input[name="preferred_country"]').val($(this).data('countryid'));
                $('#setpreferrence_table input[name="preferred_timezone"]').val($(this).data('timezone'));
            }
            if ($(this).hasClass('currency-item'))
                $('#setpreferrence_table input[name="preferred_currency"]').val($(this).data('value'));
        });
    });
    $('.newsigninsignup.cntry-curncy-wrapper').off('keyup', '[name="SearchCountryList"]');
    $('.newsigninsignup.cntry-curncy-wrapper').on('keyup', '[name="SearchCountryList"]', function (e) {
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
        var visiblelist = $(this).closest('.search-country-wrap').find('.country-list-wrap li:visible');
        if (visiblelist.length == 0) {
            $('.no-country-matches-found').show();
        } else {
            $('.no-country-matches-found').hide();
        }
    });

    $(".currency").on("click", "li", function () {
        var flag = 1;
        var currency = $(this).data('original-index'); //track the li id i.e inr or usd
        $('#currencyShow').html(currency + '&nbsp; <i class="fa fa-angle-down"></i>');
//        $(".curreny_appear").html(currency);
        changePrizeWithSign(currency);

        var selected = $('select.edu-common-country-select').val()
        var context = window.location.pathname;
        var x = {'preferred_country': selected, "preferred_currency": currency, 'context': context};
        changeCountryRequest(x, true);

    });
    $(".timezone-set").on("click", "li", function () {

        //alert("set timezone");
        var flag = 1;
        var time = this.id;//track the li id i.e inr or usd


        var path = $(location).attr('pathname');
        //if ((path.indexOf('search') > -1) || (path.indexOf('favourite') > -1) || (path.indexOf('all-courses') > -1)) {
        getTime(time, flag);

    });
    $('.custom-bootstrap.country-dropdown-wrapper').on('click', '.btn.dropdown-toggle', function () {
        var scrollElement = $(this).find('.dropdown-menu.inner');

        if (!scrollElement.hasClass('mCustomScrollbar')) {
            $(".edu-common-country-select .dropdown-menu.inner").mCustomScrollbar({
                theme: "minimal-dark",
                mouseWheel: {preventDefault: true}
            });
            $(" .edu-common-country-select, .dropdown-menu.inner, html").on("mouseup pointerup", function () {
                $(".edu-common-country-select .dropdown-menu.inner, .mCSB_scrollTools").removeClass("mCSB_scrollTools_onDrag");
            }).on("click", function (e) {
                if ($(e.target).parents(".mCSB_scrollTools").length || $(".edu-common-country-select, .dropdown-menu.inner .mCSB_scrollTools").hasClass("mCSB_scrollTools_onDrag")) {
                    e.stopPropagation();
                }
            });

        }
        var windowWidth = $(window).width();
        var windowHeight = $(window).height();
        if (windowWidth <= 991 && windowHeight <= 991) {
            $('.nav-tabs .country-selector a').tab('show');
            $('.md-trigger.currency-drop-trigger:first').trigger('click');
            return false;
        }

    });
    $('.dropdown.currency-dropdown-wrapper').on('click', '.currency-btn.res-popup', function () {

        var windowWidth = $(window).width();
        var windowHeight = $(window).height();
        if (windowWidth <= 991 && windowHeight <= 991) {
            $('.nav-tabs .currency-selector a').tab('show');
            $('.md-trigger.currency-drop-trigger:first').trigger('click');
            return false;
        }

    });
    resetPreferenceValuesOnBrowserBack();
    setTimeout(function () {
        adjustPage();
//        $('.bs-country-select-wrapper').removeClass('hide');
    }, 100);
});
function getTime(time, flag) {
    var current_time = $('input[name="seesion_time"]').val();
    var timedata = new Array();
    var x = {
        'tz': time
    };
    $('input[name="seesion_time"]').val(time)
    ga('send', 'event', 'Timezone Change', current_time, time, 0);
    timedata.push(x);
    //alert(time);
    if (flag == 1) {
        //            $('#ajax-loader').show();
        $.ajax({
            url: webURL + 'courses/settimezone',
            data: {
                json: JSON.stringify(timedata)
            },
            type: 'POST',
            dataType: 'json',
            beforeSend: function () {
                //$('#loader_useredit').show();
            },
            error: function () {
            },
            success: function (data) {
                //$('#ajax-loader').hide();
            }
        });
        setTimeZone(time);
    }
}

function setTimeZone(timezone) {

    if (typeof batchesTimeOntimeZone !== "undefined") {
        $.each(batchesTimeOntimeZone, function (i, val) {
            if (i == 'batch') {
                $.each(val, function (id, values) {
                    var courseOnwards = '<span><i class="fa fa-calendar"></i> '
                            + values[timezone]['sMonth'] + ' '
                            + values[timezone]['sDate'] + ' onwards</span>';
                    $('.courseOnwards-' + id).html(courseOnwards);
                })
            } else {
                var timezone_display = allTimeZone[timezone];
                var arraytimezone = timezone_display.split("-");
                var str = '';
                var ord_str = '';
                str = '<br class="hidden-sm hidden-xs">' + val[timezone]['startson']
                        + '-' + val[timezone]['endson'] + ' ' + arraytimezone[0]
                        + '</small>';
                ord_str = '<br><span>' + val[timezone]['startson']
                        + ' - ' + val[timezone]['endson'] + '(' + arraytimezone[0] + ')</span>';
                var strDate = val[timezone]['startdate'];
                var strMonth = val[timezone]['startmonth'];
                var strmonthdate = 'Class Starts on ' + strDate + ' ' + strMonth;
                $('.startInfo-' + i).html(strmonthdate);
                //console.log(strmonthdate);
                $('.sdate-' + i).html(strDate);
                $('.smonth-' + i).html(strMonth);
                $('.smonth-' + i).html(strMonth);
                var data_days = '';
                data_days = $('.order-batch-time-' + i).attr('data-days');
                // console.log(data_days);
                $('.time-change-' + i).html(val[timezone]['days'] + ' ' + data_days + str);
                $('.order-batch-time-' + i).html('<span>' + val[timezone]['days'] + '</span>' + data_days + ord_str);
                $('.order-day-month-' + i).html(val[timezone]['startdate'] + '<br>' + val[timezone]['startmonth']);

            }
        });
    }
}

function favouritecount() {
    if ($('#open_tickets').text() == 0) {
        $('#open_tickets').parent().css('cursor', 'default');
        $('#open_tickets').parent().attr('href', 'javascript:void(0)');
    } else {
        $('#open_tickets').parent('.text-muted').css('cursor', 'pointer');
        $('#open_tickets').parent().attr('href', '/search/favourite');
    }
}
//favouritecount();
