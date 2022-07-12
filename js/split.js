$(window).on('scroll', function () {

  var $window = $(window);
  var $panel = $('.split');

  var scroll = $window.scrollTop() + ($window.height() / 4);

  $panel.removeClass('show');

  $panel.each(function () {
    var $this = $(this);

    if ($this.offset().top <= scroll && $this.offset().top + $this.height() > scroll + 400)
    {
      $this.addClass('show');
    }
  });

}).scroll()