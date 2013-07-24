var countdown = function () {
    var days = 0,
        hours = 0,
        minutes = 0,
        strings = {},
        diff = Math.round(moment('2013092612', 'YYYYMMDDHH').diff(moment()) / 1000);

    // Days
    days = Math.floor(diff / 86400);
    strings.days = days.toString().split('');

    // Substract days from diff
    diff = diff - (days * 86400);

    // Hours
    hours = Math.floor(diff / 3600);
    strings.hours = hours.toString().split('');

    // Subtract hours from diff
    diff = diff - (hours * 3600);

    // Minutes
    minutes = Math.round(diff / 60);
    strings.minutes = minutes.toString().split('');

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
            }, 100);
        }
    });

    // Equal height on main and sidebar
    var sidebar = $('.has-sidebar').find('.sidebar'),
        main = $('.has-sidebar').find('.main'),
        sidebarHeight = sidebar.height(),
        mainHeight = main.height();

    if (mainHeight > sidebarHeight) {
        sidebar.height(mainHeight);
    }

    // Equal height on labels and textarea (for background effect)
    $('textarea').each(function () {
        $(this).prev('label').height($(this).height() + 17);
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