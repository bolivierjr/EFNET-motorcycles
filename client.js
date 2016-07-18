$(function() {

  /* fadeIn background images at first load */
  $('#background-container').animate({ opacity: 1 }, { duration: 7000});

  /*header background images fading in and out*/
  var t = setInterval(function() {
    $('.background-fade').last().fadeOut(5000, function() {
      $this = $(this);
      parent = $this.parent();
      $this.remove().css('display','block');
      parent.prepend($this);
    });
  }, 5000);

  /*nav slide open feature*/
  $('.menu-btn').click(function() {
    $('.nav').width(250);
    $('.menu-btn').hide();
  });

  $('.close-btn').click(function() {
    $('.nav').width(0);
    $('.menu-btn').fadeIn(2000);
  });

});
