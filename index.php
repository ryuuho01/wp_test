<?php get_header(); ?>
<div class="top-eyecatch">
  <img src="" alt="">
  <h1 class="top-eyecatch_ttl">Commit to the growth<br>for everyone</h1>
</div>
<main>
  <p class="newpost__sub-ttl">New Post</p>
  <h2 class="section-title">新着記事</h2>
  <div class="flex">
    <div class="flex_cards">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <a class="magazine-colum" href="<?php the_permalink(); ?>">
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
            <!-- カテゴリ -->
            <div>
              <?php if (!is_category() && has_category()) : ?>
                <p class="category-tag">
                  <?php $postcat = get_the_category();
                  echo $postcat[0]->name;
                  ?>
                </p>
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