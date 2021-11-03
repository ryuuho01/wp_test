<?php get_header(); ?>
<div class="eyecatch single-eyecatch page-eyecatch">

  <?php if (has_post_thumbnail()) : ?>
    <div class="single__eyecatch">
      <?php the_post_thumbnail(); ?>
    </div>
  <?php endif; ?>
  <!-- サムネイル -->

  <div class="single__eyecatch">
    <img src="<?php echo get_template_directory_uri(); ?>/img/sorry.jpg" alt="no-img">
  </div>

  <div class="top-eyecatch_ttl">
    <h1 class="page-title__h1 page-title__404">The Page Is Not Found</h1>
  </div>
</div>
<?php get_footer(); ?>