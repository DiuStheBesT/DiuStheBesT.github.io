(function() {

  $(".sw-1").YouTubePopUp();

  var swiper = new Swiper('.swiper-container', {
    pagination: '.swiper-pagination',
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    slidesPerView: 1,
    initialSlide: 2,
    paginationClickable: true
    // loop: true
  });

  // menu scroll
  $('.nav-list_link').bind('click.smoothscroll', function(e){
    $(this).parents('ul').removeClass('open');
    // e.preventDefault();
    var target = this.hash,
        $target = $(target);
    $('html, body').stop().animate({'scrollTop': $target.offset().top}, 900, 'swing', function () {
      window.location.hash = target;
    });
  });

  $('.activities-boxes__link').bind('click.smoothscroll', function(e){
    $(this).parents('div').removeClass('open');
    e.preventDefault();
    var target = this.hash,
        $target = $(target);
    $('html, body').stop().animate({'scrollTop': $target.offset().top}, 900, 'swing', function () {
      window.location.hash = target;
    });
  });
  $('.info-develop__links a,.work-together__link-1,.info-develop__links a').bind('click.smoothscroll', function(e){
    $(this).parents('div').removeClass('open');
    e.preventDefault();
    var target = this.hash,
        $target = $(target);
    $('html, body').stop().animate({'scrollTop': $target.offset().top}, 900, 'swing', function () {
      window.location.hash = target;
    });
  });

})();