/**
 * WiNA Spotlight Countdown Clock
 * Ticks away the time until the first day of school!
 *
 * @author Pieter De Baets
 * @author Thomas Meire
 *
 * @copyright Copyright &copy; 2010 WiNA Devteam
 */
function pad(number, length) {
    var str = '' + number;
    while (str.length < length) {
        str = '0' + str;
    }
    return str;
}

var countdown = function () {
    var days = 0,
        hours = 0,
        minutes = 0,
        strings = {},
        diff = Math.round(moment('2013092612', 'YYYYMMDDHH').diff(moment()) / 1000);

    // Days
    days = Math.floor(diff / 86400);
    strings.days = pad(days.toString(), 2).split('');

    // Substract days from diff
    diff = diff - (days * 86400);

    // Hours
    hours = Math.floor(diff / 3600);
    strings.hours = pad(hours.toString(), 2).split('');

    // Subtract hours from diff
    diff = diff - (hours * 3600);

    // Minutes
    minutes = Math.round(diff / 60);
    strings.minutes = pad(minutes.toString(), 2).split('');

    $.each(strings, function (key, value) {
        var numbers = $('#countdown-' + key).find('.number');

        $.each(value, function (key, number) {
            $(numbers[key]).text(number);
        });
    });

    // No idea why
    days = hours = minutes = strings = diff = null;
};

var setupNav = function () {
    $('#nav-toggle a').click(function () {
        $('#site-header').toggleClass('is-expanded');
        return false;
    });
};

$(document).ready(function () {

    // Countdown
    setInterval(countdown, 30000);
    countdown();

    // Scroll detection for the navigation
    var detect = true,
        timeout = null;

    $(window).scroll(function () {
        if (detect) {
            if ($(window).scrollTop() > 150) {
                $('body').addClass('is-scrolling');
            } else {
                $('body').removeClass('is-scrolling');
            }

            detect = false;
        }

        if (!timeout) {
            timeout = setTimeout(function () {
                detect = true;
                timeout = null;
            }, 30);
        }
    });


    // Equal height on main and sidebar
    setupNav();

    $(window).resize(function () {
        setupNav();
    });

    // Equal height on labels and textarea (for background effect)
    $('.contact').find('textarea').each(function () {
        $(this).parent().prev().height($(this).height() + 15);
    });
    $('.contact').find('select').each(function () {
        $(this).prev().height($(this).height() + 15);
    });

    // History accordeon
    $('.history-item:not(.history-item-expanded)').find('.detail-container').hide();

    $('.history-item-toggle').click(function (e) {
        e.preventDefault();

        var that = $(this);

        if($('.history-item-expanded').length == 0) {
            that.closest('.history-item').addClass('history-item-expanded').find('.detail-container').slideDown(220);
        } else {
             $('.history-item-expanded').find('.detail-container').slideUp(220, function () {
                $('.history-item-expanded').removeClass('history-item-expanded');
                that.closest('.history-item').addClass('history-item-expanded').find('.detail-container').slideDown(220);
            });
        }

    });

    $('#praktisch-meewerken-button').click(function (e) {
        $('html, body').animate({
            scrollTop: $("#meewerken-scrollto").offset().top
        }, 500, function() {
            $("#meewerken-scrollto").fadeTo(200, 0.2).fadeTo(200, 1);
        });


        return false;
    });

});
