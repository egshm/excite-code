<?php get_header(); ?>

<!-- .p-page-news -->
<main class="p-page-news">
  <?php get_template_part('template-parts/fv'); ?>

  <?php if (function_exists('bcn_display')) { ?>
    <!-- .c-breadcrumb -->
    <nav class="c-breadcrumb p-page-news__breadcrumb" aria-label="パンくずナビゲーション" vocab="https://schema.org/" typeof="BreadcrumbList">
      <div class="c-breadcrumb__inner">
        <?php bcn_display(); ?>
      </div>
    </nav>
    <!-- /.c-breadcrumb -->
  <?php } ?>

  <!-- .p-post-area -->
  <section class="p-post-area p-page-news__post-area">
    <!-- .l-inner -->
    <div class="p-post-area__inner l-inner">
      <div class="p-post-area__header">
        <!-- .c-tab -->
        <nav aria-label="記事の分類ナビゲーション" class="c-tab p-post-area__tab">
          <ul class="c-tab__list">
            <?php
            // 通常投稿一覧ページ（home.php）へのリンク
            $home_link = sprintf(
              '<li class="c-tab__item %s">' .
                '<a class="c-tab__link" href="%s">すべてのお知らせ</a>' . 
              '</li>',
              (is_front_page() || is_home() || is_date()) ? 'is-active' : '',
              esc_url(home_url('/news'))
            );
            echo $home_link;

            // カテゴリーを取得
            $categories = get_categories([
              'orderby' => 'name',
              'order'   => 'ASC',
              'number'  => 10
            ]);

            // 各カテゴリー別一覧ページへのリンク
            if ($categories) {
              $current_category_id = get_queried_object_id();
                foreach ($categories as $category) {
                  $category_link = sprintf(
                    '<li class="c-tab__item %s">' .
                      '<a class="c-tab__link" href="%s">%s</a>' . 
                    '</li>',
                    ($current_category_id === $category->term_id) ? 'is-active' : '',
                    esc_url(get_category_link($category->term_id)),
                    esc_html($category->name)
                  );
                  echo $category_link;
                }
              }
            ?>
          </ul>
        </nav>
        <!-- .c-tab -->
      </div>

      <div class="p-post-area__content">
        <?php if (have_posts()) : ?>
          <!-- .p-posts -->
          <ul class="p-posts p-post-area__posts">
            <?php while (have_posts()) : the_post(); ?>
              <li class="p-posts__item js-inview">
                <a href="<?php the_permalink(); ?>" class="p-posts__link">
                  <div class="p-posts__header">
                    <time class="p-posts__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                    <?php // カテゴリー一覧
                    $categories = get_the_category();
                    if (!empty($categories)) {
                      $limit = 5;
                      $count = 0;

                      echo '<ul class="c-categories p-posts__categories">';
                      foreach ($categories as $category) {
                        if ($count >= $limit) {
                          break;
                        }
                        echo '<li class="c-categories__item">';
                        echo esc_html($category->name);
                        echo '</li>';
                        $count++;
                      }
                      echo '</ul>';
                    }
                    ?>
                  </div>
                  <div class="p-posts__body">
                    <h2 class="p-posts__title js-limitedText" data-limit-sp="40" data-limit-pc="46">
                      <?php the_title(); ?>
                    </h2>
                  </div>
                </a>
              </li>
            <?php endwhile; ?>
          </ul>
          <!-- /.p-posts -->
        <?php else : ?>
          <p>記事が投稿されていません。</p>
        <?php endif; ?>

        <?php
        the_posts_pagination([
          'class'      => 'c-pagination',
          'aria_label' => 'お知らせ投稿記事のページネーション',
          'mid_size' => 5,
          'prev_text' => '<img src="' . esc_url(get_theme_file_uri("/images/arrow-left-b.svg")) . '" alt="" class="c-pagination__arrow" width="11" height="18">',
          'next_text' => '<img src="' . esc_url(get_theme_file_uri("/images/arrow-right-b.svg")) . '" alt="" class="c-pagination__arrow" width="11" height="18">',
        ]);
        ?>
      </div>
    </div>
    <!-- /.l-inner -->
  </section>
  <!-- /.p-post-area -->

  <?php get_template_part('template-parts/contact'); ?>
</main>
<!-- .p-page-news -->

<!-- .c-overlay -->
<div class="c-overlay" id="js-overlay"></div>
<!-- /.c-overlay -->

<?php get_footer(); ?>
