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
    var sidebar = $('.has-sidebar').find('.sidebar'),
        main = $('.has-sidebar').find('.main'),
        sidebarHeight = sidebar.height(),
        mainHeight = main.height();

    console.log(mainHeight);
    console.log(sidebarHeight);

    if (mainHeight > sidebarHeight) {
        sidebar.height(mainHeight);
    }

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

        $('.history-item-expanded').find('.detail-container').slideUp(220, function () {
            $('.history-item-expanded').removeClass('history-item-expanded');
            that.closest('.history-item').addClass('history-item-expanded').find('.detail-container').slideDown(220);
        });

    });

});