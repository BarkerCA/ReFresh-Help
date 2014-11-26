$(document).on('page:change', function() {
  $(document).foundation();
  var body = $('body').height();
  var bodyminus = body - 80;
  $('.main').css({'min-height' : bodyminus});
});