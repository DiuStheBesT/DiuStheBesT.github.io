<?php get_header(); ?>

    <div id="content">

        <div class="results"><?php echo single_cat_title(); ?> :</div>
        <?php if (have_posts()): ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="post">
                    <h2 class="post-title"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                    <div class="post-content clear">
                        <a class="post-link" href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(array(250, 150)); ?></a>
                        <div>
                            <?php the_content_rss('', FALSE, '', 50); ?>
                            <a href="<?php the_permalink() ?>" class="post-link-btn">Read More &amp; Download</a>
                        </div>
                    </div><!--post content-->
                    <div class="post-meta">
                        <div class="post-category"><?php the_category(', ', 'single'); ?></div>
                        <div class="post-tags"></div>
                        <div class="post-date"><?php the_time('F dS, Y'); ?></div>
                    </div><!--post meta-->
                </div><!--post-->
            <?php endwhile;  else: ?>
            <div class="results_not">No results found.</div>
        <?php endif; ?>

        <div class="nav">
            <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
                <div class="clear">
                    <span class="alignleft"><?php echo $prev_link; ?></span>
                    <span class="alignright"><?php echo $next_link; ?></span>
                </div>
            <?php } ?>
        </div><!--navigation-->

    </div><!--content-->

    <div id="sidebar">
        <?php get_sidebar(); ?>
    </div><!--sidebar-->

<?php get_footer(); ?>