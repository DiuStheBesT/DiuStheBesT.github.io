<?php get_header(); ?>

<div id="contact-content">
  <?php if (have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>
      <div class="contact clear">
        <?php the_content(); ?>
      </div>
      <!--content-->

    <?php endwhile;  else: ?>
    <div class="results_not">No results found.</div>
  <?php endif; ?>

</div><!--content-->
<?php get_footer(); ?>
