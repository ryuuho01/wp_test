<?php
function twpp_enqueue_styles(){
  wp_enqueue_style('reset-sheet', get_template_directory_uri() . "/css/reset.css");
  wp_enqueue_style('main-style-sheet', get_template_directory_uri() . "/style.css");
}
add_action('wp_enqueue_scripts', 'twpp_enqueue_styles');

add_filter('show_admin_bar', '__return_false');

// JavaScriptの取得はよく使用する。wp_enqueue_script()関数を使用して取得。第一引数に任意のスクリプトの名称を指定。
function twpp_enqueue_scripts()
{
  wp_enqueue_script(
    'main-js-sheet',
    get_template_directory_uri() . '/js/main.js',
    array(),
    false,
    true
  );
}
add_action('wp_enqueue_scripts', 'twpp_enqueue_scripts');
add_theme_support('post-thumbnails');

// 以下、カスタム投稿タイプの追加。例えば、会社のニュース部分と会社のブログ記事を分けて投稿する必要がある場合などに使用。

add_action('init', 'create_post_type');
function create_post_type()
{
  register_post_type('news', [
    'labels' => [
      'name'          => 'ニュース',
      'singular_name' => 'news',
    ],
    'public'        => true,
    'has_archive'   => true,
    'menu_position' => 5,
    'show_in_rest'  => true,
    array(
      'supports' => array('title', 'thumbnail', 'editor')
    )
  ]);
}
function custom_template_include($template)
{
  if (is_single() && in_category('news')) {
    $new_template = locate_template(array('single-news.php'));
    if ('' != $new_template) {
      return $new_template;
    }
  }
  return $template;
}
add_filter('template_include', 'custom_template_include', 99);

// ウィジェット追加
// function my_theme_widgets_init()
// {
//   register_sidebar(array(
//     'name' => 'Main Sidebar',
//     'id' => 'main-sidebar',
//   ));
// }
// add_action('widgets_init', 'my_theme_widgets_init');