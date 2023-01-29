$( document ).ready(function() {
  $('.animate').each(function() {
    var viewport_height = $(window).height();
    var scrollTop = $(window).scrollTop();
    var elementOffset = $(this).offset().top;
    var distance_from_top = (elementOffset - scrollTop);
    if (distance_from_top + 150 < viewport_height) {
      if ($(this).hasClass('inviewport')) {
      } else {
        $(this).addClass('inviewport');
      }
    } 
  });
});

$(window).scroll(function(){
  $('.animate').each(function() {
    var viewport_height = $(window).height();
    var scrollTop = $(window).scrollTop();
    var elementOffset = $(this).offset().top;
    var distance_from_top = (elementOffset - scrollTop);
    if (distance_from_top + 150 < viewport_height) {
      if ($(this).hasClass('inviewport')) {
      } else {
        $(this).addClass('inviewport');
      }
    }
  });
});
