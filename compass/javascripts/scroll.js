$(window).scroll(function() {
  var windowH = $(window).height();
  var windowW = $(window).width();
  var scrollTop = $(this).scrollTop();
  if (scrollTop > windowH) {
      $('.nav-fixed').removeClass('up');
  }
  else {
      $('.nav-fixed').addClass('up');
  }

  var offset = -windowW / 1280 * 70;
  if (windowW < 768) {
      $('.rounded-bg-top').removeClass('fixed').css('top', offset);
      return false;
  }
  var roundedBgCounter = -1;
  $('.rounded-bg').each(function(i, e){
      var pos = $(this).offset().top;
      if (scrollTop > pos - windowH){
          $(this).find('.rounded-bg-top').removeClass('fixed').css('top', offset);
          roundedBgCounter = i;
      }
      else {
          $(this).find('.rounded-bg-top').addClass('fixed').css('top', '');
      }
  });
  if (roundedBgCounter < 0) {
      if (scrollTop > 500) {
          $('.rounded-bg-top').eq(0).addClass('up');
      }
      else {
          $('.rounded-bg-top').eq(0).removeClass('up');
      }
  }
  else {
      if (scrollTop > $('.rounded-bg').eq(roundedBgCounter).offset().top - windowH + 300) {
          $('.rounded-bg-top').eq(roundedBgCounter+1).addClass('up');
      }
      else {
          $('.rounded-bg-top').eq(roundedBgCounter+1).removeClass('up');
      }

  }
});
