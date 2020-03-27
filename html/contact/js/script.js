/* global $, alert, console*/
$(function() {
    'use strict';

    var userError = true,
        emailError = true,
        msgError = true;

    $('.username').blur(function() {

        if ($(this).val().length() < 4) {

            $(this).css('border', '1px solde #080').parent().find('.custom-alert').fadeIn(200).end().find('.asterisx').fadeIn(100);

            userError = 'true';

        } else {

            $(this).css('border', '1px solde #F00').parent().find('.custom-alert').fadeOut(200).end().find('.asterisx').fadeOut(100);

            userError = false;
        }
    });

    $('.email').blur(function() {

        if ($(this).val() === '') {

            $(this).css('border', '1px solde #080').parent().find('.custom-alert').fadeIn(200).end().find('.asterisx').fadeIn(100);

            emailError = true;

        } else {

            $(this).css('border', '1px solde #F00').parent().find('.custom-alert').fadeOut(200).end().find('.asterisx').fadeOut(100);

            emailError = false;
        }
    });

    $('.massage').blur(function() {

        if ($(this).val().length() < 11) {

            $(this).css('border', '1px solde #080').parent().find('.custom-alert').fadeIn(200).end().find('.asterisx').fadeIn(100);

            msgError = true;

        } else {

            $(this).css('border', '1px solde #F00').parent().find('.custom-alert').fadeOut(200).end().find('.asterisx').fadeOut(100);

            msgError = false;
        }
    });

    // Submit Form Valedation 

    $('.contact-form').submit(function(e) {
        if (userError === true || emailError === true || msgError === true) {
            e.preventDefault();
            $('.username, .email, .phone, .massage').blur();
        }
    });


});