<?php get_header(); ?>
<div class="single-wrap">
  <div class="single-box">
    <div class="single-post-link"><?php the_post_thumbnail(full); ?></div>
    <h1 class="single-title"><?php the_title(); ?></h1>
  </div>
  <div class="single-container clear">
	  <div id="back-top" style="display: none;"><span></span><a href="#top" class="top-btn" title=""></a></div>
    <div id="content" class="single-content">
        <?php if (have_posts()): ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="single-post">
                  <?php the_content(__('(more...)')); ?>
                </div>
                <div class="soc-box">
<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52eba9d355f2bf46"></script> 
            <!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox"></div>
</div>
				        <div id="hypercomments_widget"></div>
<script type="text/javascript">
_hcwp = window._hcwp || [];
_hcwp.push({widget:"Stream", widget_id: 95083});
(function() {
if("HC_LOAD_INIT" in window)return;
HC_LOAD_INIT = true;
var lang = (navigator.language || navigator.systemLanguage || navigator.userLanguage || "en").substr(0, 2).toLowerCase();
var hcc = document.createElement("script"); hcc.type = "text/javascript"; hcc.async = true;
hcc.src = ("https:" == document.location.protocol ? "https" : "http")+"://w.hypercomments.com/widget/hc/95083/"+lang+"/widget.js";
var s = document.getElementsByTagName("script")[0];
s.parentNode.insertBefore(hcc, s.nextSibling);
})();
</script>
<a href="http://hypercomments.com" class="hc-link" title="comments widget">comments powered by HyperComments</a>
            
            <?php endwhile; ?>
        <?php endif; ?>
    </div><!--content-->

    <div id="sidebar">
        <?php get_sidebar(); ?>
    </div><!--sidebar-->
  </div>
</div>
<?php get_footer(); ?>
