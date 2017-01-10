var toValidate = $('#inputcupon'),
        valid = false;
    toValidate.keyup(function () {
        if ($(this).val().length > 0) {
            $(this).data('valid', true);
        } else {
            $(this).data('valid', false);
        }
        toValidate.each(function () {
            if ($(this).data('valid') == true) {
                valid = true;
            } else {
                valid = false;
            }
        });
        if (valid === true) {
            $('button[type=submit]').prop('disabled', false);
        }else{
            $('button[type=submit]').prop('disabled', true);        
        }
    });
	