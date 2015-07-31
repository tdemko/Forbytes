define(['jquery'], function($) {
    var $btnSendEmail = $('.email-form .btn-send-mail'),
    $emailForm = $('.email-form .form-inline'),
    $emailSuccess = $('.email-form .mail-success'),
    $inputSendEmail = $('.email-form .inp-send-mail');


    // Mail functions    var validateEmail = function (email) {
        var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;        return re.test(email);
    };
    var mailValidation = function () {
        if ($btnSendEmail.prop('disabled')) return;  // prevent double click

        var $emailError = $('.email-form .mail-error'),            $emailFormGroup = $('.email-form .form-group');        var showEmailError = function () {
            $emailError.show();            $emailFormGroup.addClass('has-error');
        }        var hideEmailError = function () {
            $emailError.hide();            $emailFormGroup.removeClass('has-error');
        }        var checkMail = function (sendIfValid) {
            var mail = $inputSendEmail.val();            if (validateEmail(mail)) {
                hideEmailError();                if (!sendIfValid)                    return;                $btnSendEmail.prop('disabled', true);                $.post(                    '/wp-admin/admin-ajax.php',                    {
                        action: 'send_mail',                        mail: mail
                    },                    function (response) {
                        $btnSendEmail.prop('disabled', false);                        if (response.status == 'ok') {
                            $('.email-form .inp-send-mail').val('');                            $emailForm.addClass('hidden');                            $emailSuccess.removeClass('hidden');
                        }                        else {                            // Error on server message                        }
                    },                    'json'                ).fail(function () {                    // Error message on server error                    $btnSendEmail.prop('disabled', false);
                });
            }            else {                // Error message invalid mail (client verification)                showEmailError();
            }
        }        $inputSendEmail.off('keyup.validation');        $inputSendEmail.on('keyup.validation', checkMail.bind(window, false));        checkMail(true);
    }    var init = function () {
        $btnSendEmail.on('click', mailValidation);        $inputSendEmail.on('keyup.enterkey', function (event) {
            if (event.keyCode == 13) {
                mailValidation();
            }
        });
    }    return {
        init: init
    }
})

