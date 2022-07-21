var current;
$.scrollify({
  section: ".split",
  interstitialSection: "header,footer,.global-contact",
  setHeights: false,
  before: function (i, split) {
    current = i;
  },
});
$(window).on('resize', function () {
  if (current)
  {
    var currentScrl = $('.split').eq(current).offset().top;
    $(window).scrollTop(currentScrl);
  }
});