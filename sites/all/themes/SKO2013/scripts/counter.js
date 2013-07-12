CountDownTimer('08/01/2013 00:00 AM', 'countdown');

function CountDownTimer(dt)
{
  var end = new Date(dt);
  
  var _second = 1000;
  var _minute = _second * 60;
  var _hour = _minute * 60;
  var _day = _hour * 24;
  var timer;

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

  function updateNumbers(days, hours, minutes) {
    document.getElementById('days').innerHTML = days.charAt(0);
    document.getElementById('day').innerHTML = days.charAt(1);
    document.getElementById('hours').innerHTML = hours.charAt(0);
    document.getElementById('hour').innerHTML = hours.charAt(1);
    document.getElementById('minutes').innerHTML = minutes.charAt(0);
    document.getElementById('minute').innerHTML = minutes.charAt(1);
  }

  function showRemaining() {
    var now = new Date();
    var distance = end - now;
    if (distance < 0) {

      clearInterval(timer);

      updateNumbers("ON", "LI", "NE");

      return;
    }

    var days = pad(Math.floor(distance / _day), 2);
    var hours = pad(Math.floor((distance % _day) / _hour), 2);
    var minutes = pad(Math.floor((distance % _hour) / _minute), 2);

    updateNumbers(days, hours, minutes);
  }

  timer = setInterval(showRemaining, 1000);
}