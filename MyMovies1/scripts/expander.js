$(function() {
  /* initial variables */
  var numRows = $('#ticketLinesTable').find('tr').length;
  var SHOWN = 5;
  var MORE = 20;

  /* get how many more can be shown */
  var getNumMore = function(ns) {
      var more = MORE;
      var leftOver = numRows - ns;
      if ((leftOver) < more) {
        more = leftOver;
      }
      return more;
    }
    /* how many are shown */
  var getInitialNumShown = function() {
      var shown = SHOWN;
      if (numRows < shown) {
        shown = numRows;
      }
      return shown;
    }
    /* set how many are initially shown */
  var numShown = getInitialNumShown();

  /* set the numMore if less than 20 */
  var numMore = getNumMore(numShown);

  /* set more html */
  if (numMore > 0) {
    var more_html = '<p><button id="more">Show <span style="font-weight: bold;">' + numMore + '</span> More...</button></p>';
    $('#ticketLinesTable').find('tr:gt(' + (numShown - 1) + ')').hide().end().after(more_html);
  }
  $('#more').click(function() {
    /* determine how much more we should update */
    numMore = getNumMore(numShown);
    /* update num shown */
    numShown = numShown + numMore;
    $('#ticketLinesTable').find('tr:lt(' + numShown + ')').show();

    /* determine if to show more and how much left over */
    numMore = getNumMore(numShown);
    if (numMore > 0) {
      $('#more span').html(numMore);
    } else {
      $('#more').remove();
    }
  });

});