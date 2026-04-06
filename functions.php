<?php
function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // titleタグ自動生成
  add_theme_support('html5', array( // HTML5による出力
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));
}
add_action('after_setup_theme', 'my_setup');


function my_script_init()
{
  // デフォルトjQueryの読込み解除
  wp_deregister_script('jquery');

  // CSS
  wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.2.10');
  wp_enqueue_style('style-css', get_template_directory_uri() . '/css/style.min.css', array(), '1.0.0');

  // JavaScript
  wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), "3.7.1", array('in_footer' => true, 'strategy' => 'defer'));
  wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), "11.2.10", array('in_footer' => true, 'strategy' => 'defer'));
  wp_enqueue_script('inview', get_template_directory_uri() . '/js/jquery.inview.min.js', array('jquery'), "1.1.2", array('in_footer' => true, 'strategy' => 'defer'));
  wp_enqueue_script('main-js', get_template_directory_uri() . '/js/script.js', array('jquery', 'swiper'), '1.0.0', array('in_footer' => true, 'strategy' => 'defer'));
}
add_action('wp_enqueue_scripts', 'my_script_init');


// アセットの読込みを最適化
function my_assets_load_optimize() {
  $theme_uri = get_template_directory_uri();

  $fonts = [
    'oswald-v57-latin-700.woff2',
    'roboto-v51-latin-500.woff2',
    'roboto-v51-latin-regular.woff2'
  ];

  foreach ($fonts as $font) {
    echo '<link rel="preload" href="' . $theme_uri . '/fonts/' . $font . '" as="font" type="font/woff2" crossorigin>' . "\n";
  }
  echo '<link rel="preload" as="style" href="' . $theme_uri . '/css/font.min.css">' . "\n";
  echo '<link rel="stylesheet" href="' . $theme_uri . '/css/font.min.css" media="print" onload="this.media=\'all\'">' . "\n";
  // フォールバック
  echo '<noscript><link rel="stylesheet" href="' . $theme_uri . '/css/font.min.css"></noscript>' . "\n";
}
add_action('wp_head', 'my_assets_load_optimize', 5);


// headタグ内で優先的に実行したいスクリプト
function my_high_priority_script() {
  echo <<<HIGH_PRIORITY_SCRIPT
    <script>
      document.documentElement.classList.add("js-enabled");
    </script>
    HIGH_PRIORITY_SCRIPT;
}
add_action('wp_head', 'my_high_priority_script', 1);


function custom_aside_archives_link($link_html)
{
  // liタグにクラスを付与
  $link_html = str_replace('<li>', '<li class="l-aside__item">', $link_html);
  // aタグにクラスを付与
  $link_html = str_replace('<a ', '<a class="l-aside__link" ', $link_html);
  // aタグ内のテキストをh3タグでラップ
  $link_html = preg_replace(
    '/(<a[^>]*>)(.*?)(<\/a>)/',
    '$1<h3 class="l-aside__text">$2</h3>$3',
    $link_html
  );

  return $link_html;
}
add_action('wp', function () {
  // 通常投稿個別ページ（single.php）限定
  if (is_single()) {
    add_filter('get_archives_link', 'custom_aside_archives_link');
  }
});


function custom_posts_per_page($query)
{
  // カスタム投稿ページまたはタクソノミー別一覧ページの最大表示件数を設定
  if (!is_admin() && $query->is_main_query() &&
      (is_post_type_archive('works') || is_tax('genre'))) {
    $query->set('posts_per_page', 6);
  }
}
add_action('pre_get_posts', 'custom_posts_per_page');
