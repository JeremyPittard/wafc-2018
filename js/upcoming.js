jQuery(function($) {
  var loopValue = 1;
  var card = $(".upcoming-games__card");
  var maxCards = $(".upcoming-games__content").data("team-count");

  setInterval(function() {
    card.each(function() {
      if (loopValue == $(this).data("loop-index")) {
        $(this).addClass("active");
      } else {
        $(this).removeClass("active");
      }
    });
    loopValue++;

    if (loopValue >= maxCards) {
      loopValue = 0;
    }
  }, 5000);
});
