<?php get_header(); ?>

<div class="container clear">
	<div id="content">
    <?php if (have_posts()): ?>
      <?php while (have_posts()) : the_post(); ?>
				<div class="post clear">
					<div class="post-side">
						<a class="post-link" href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(full); ?></a>
					</div>
					<div class="post-content">
						<a class="post-title" href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						<div class="post-description">
              <?php the_content_rss('', FALSE, '', 25); ?>
						</div>
					</div>

				</div><!--post-->

      <?php endwhile;  else: ?>
			<div class="results_not">No results found.</div>
    <?php endif; ?>

	</div><!--content-->

	<div id="sidebar">
    <?php get_sidebar(); ?>
	</div><!--sidebar-->

</div>
<?php get_footer(); ?>
