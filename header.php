<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- ↓を記述することでデフォルトのUTF-8が出力されます -->
  <meta charset="<?php bloginfo('charset'); ?>">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

  <!-- フォントスタイル追加 -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">

  <!-- ↓を記述することでheadタグ内でファイルを読み込んだり、プラグインを使用できるようになります -->
  <?php wp_head(); ?>

</head>

<!-- ↓を記述することでbody要素にページごとのクラスを振り分けることができます -->

<body <?php body_class(); ?>>
  <header class="article-nav">
    <!-- ↓を記述することでトップページへのリンクを自動で設定することができます -->
    <a href="<?php echo esc_url(home_url('/')); ?>" class="article-logo">
      <img class="img_logo" src="<?php echo get_template_directory_uri(); ?>/img/estramedia__logo.png" alt="logo">
    </a><br>
    <nav>
      <ul class="flex__item">
        <li class="nav__list">
          <a href="http://localhost/wp01/category/html/">HTML</a>
        </li>
        <li class="nav__list">
          <a href="http://localhost/wp01/category/css/">CSS</a>
        </li>
        <li class="nav__list">
          <a href="http://localhost/wp01/category/javascript/">JavaScript</a>
        </li>
        <li class="nav__list">
          <a href="http://localhost/wp01/category/php/">PHP</a>
        </li>
        <li class="nav__list">
          <a href="http://localhost/wp01/category/mysql/">MySQL</a>
        </li>
      </ul>
    </nav>
  </header>