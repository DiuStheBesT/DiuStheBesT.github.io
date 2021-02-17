</div>
</div><!--middle-->
</div><!--wrapper-->

 <div id="footer">
  <div class="foot">
    <div class="foot-content"><?php dynamic_sidebar('footer') ?></div>
  </div>
</div><!--footer-->
<?php wp_footer(); ?>
<script>
  $(function(){

	    //Button up
      $("#back-top").hide();
      $(window).scroll(function(){
        if($(this).scrollTop()){
          $('#back-top').fadeIn();
        }else{
          $('#back-top').fadeOut();
        }
      });
      $('#back-top a').click(function(){
	      $('html,body').animate({scrollTop: 0}, 100);
        return false;
      });

      // Show search
      $('.search-icon').on('click', function(event) {
      event.preventDefault();
        if ( !$(".search-box").hasClass('search-active') ) {
          $(".search-box").addClass('search-active');
        }else {
          $(".search-box").removeClass('search-active');
        }
      })
  });
</script>
</body>
</html>
