var current;
$.scrollify({
  section: ".split",
  setHeights: false,
  before: function (i, box) {
    current = i;
  },
});
$(window).on('resize', function () {
  if (current) {
    var currentScrl = $('.box').eq(current).offset().top;
    $(window).scrollTop(currentScrl);
  }
});