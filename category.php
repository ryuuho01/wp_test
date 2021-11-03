<?php get_header(); ?>

<div class="page-title">
  <h1 class="page-title__h1"><?php single_cat_title(); ?></h1>
  <!-- カテゴリーのタイトルを出力 -->
</div>

<main>
  <div class="flex">
    <div class="flex_cards flex_categories">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <a class="magazine-colum categories_colum" href="<?php the_permalink(); ?>">
            <!-- サムネイル -->
            <div>
              <?php if (has_post_thumbnail()) : ?>
                <div class="article__card-eyecatch">
                  <?php the_post_thumbnail(); ?>
                </div>
              <?php else : ?>
                <img class="img_thumbnail" src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img">
              <?php endif; ?>
            </div>
            <!-- カード下側 -->
            <div class="text-content">
              <!-- 記事タイトル -->
              <h3 class="article__title">
                <?php
                if (mb_strlen($post->post_title, 'UTF-8') > 30) {
                  $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
                  echo $title . '…';
                } else {
                  echo $post->post_title;
                }
                ?>
              </h3>
              <!-- 投稿時間 -->
              <p class="article__date"><?php echo get_the_date('Y-m-d'); ?></p>
            </div>
          </a>
        <?php endwhile; ?>
      <?php else : ?>
        <p>投稿が見つかりません。</p>
      <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
  </div>
</main>
<?php get_footer(); ?>