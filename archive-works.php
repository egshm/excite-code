<?php get_header(); ?>

<!-- .p-page-works -->
<main class="p-page-works">
  <?php get_template_part('template-parts/fv'); ?>

  <?php if (function_exists('bcn_display')) { ?>
    <!-- .c-breadcrumb -->
    <nav class="c-breadcrumb p-page-works__breadcrumb" aria-label="パンくずナビゲーション" vocab="https://schema.org/" typeof="BreadcrumbList">
      <div class="c-breadcrumb__inner">
        <?php bcn_display(); ?>
      </div>
    </nav>
    <!-- /.c-breadcrumb -->
  <?php } ?>

  <!-- .p-post-area -->
  <section class="p-post-area p-page-works__post-area">
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
                '<a class="c-tab__link" href="%s">すべての実績</a>' . 
              '</li>',
              (is_post_type_archive()) ? 'is-active' : '',
              esc_url(home_url('/works'))
            );
            echo $home_link;

            // カテゴリーを取得
            $terms = get_terms([
              'taxonomy' => 'genre',
              'orderby' => 'name',
              'order'   => 'ASC',
              'number'  => 10
            ]);

            // 各カテゴリー別一覧ページへのリンク
            if ($terms) {
              // 現在のタームIDを取得
              $current_term_id = is_tax('genre') ? get_queried_object_id() : null;
              foreach ($terms as $term) {
                $term_link = sprintf(
                  '<li class="c-tab__item %s">' .
                    '<a class="c-tab__link" href="%s">%s</a>' . 
                  '</li>',
                  ($current_term_id === $term->term_id) ? 'is-active' : '',
                  esc_url(get_term_link($term->term_id)),
                  esc_html($term->name)
                );
                echo $term_link;
              }
            }
            ?>
          </ul>
        </nav>
        <!-- .c-tab -->
      </div>

      <div class="p-post-area__content">
        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $the_query = new WP_Query([
          "post_type" => "works",
          "posts_per_page" => 6,
          "paged" => $paged,
        ]);
        ?>
        <?php if ($the_query->have_posts()) : ?>
          <ul class="p-post-area__list">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <!-- .p-media -->
              <li class="p-post-area__item p-media p-media--works js-inview">
                <a href="<?php the_permalink(); ?>" class="p-media__link">
                  <div class="p-media__body">
                    <?php // カテゴリー一覧
                    $taxonomy_terms = get_the_terms(get_the_ID(), 'genre');
                    if (!empty($taxonomy_terms)) {
                      $limit = 5;
                      $count = 0;

                      echo '<ul class="c-categories p-media__categories">';
                      foreach ($taxonomy_terms as $taxonomy_term) {
                        if ($count >= $limit) {
                          break;
                        }
                        echo '<li class="c-categories__item">';
                        echo esc_html($taxonomy_term->name);
                        echo '</li>';
                        $count++;
                      }
                      echo '</ul>';
                    }
                    ?>
                    <h2 class="p-media__title">
                      <span class="js-limitedText" data-limit-sp="24" data-limit-pc="46">
                        <?php the_title(); ?>
                      </span>
                    </h2>
                    <time class="p-media__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                  </div>
                  <figure class="p-media__img-wrap">
                    <?php if (has_post_thumbnail()) : ?>
                      <!-- アイキャッチ画像 -->
                      <?php the_post_thumbnail('full', ['class' => 'p-media__img']); ?>
                    <?php else : ?>
                      <!-- NoImage画像 -->
                      <img class="p-media__img" src="<?php echo esc_url(get_theme_file_uri("images/noimage.png")); ?>" alt="NoImage画像" width="130" height="100">
                    <?php endif ; ?>
                  </figure>
                </a>
              </li>
              <!-- /.p-media -->
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          </ul>
        <?php else : ?>
            <p>記事が投稿されていません</p>
        <?php endif; ?>

        <?php
        the_posts_pagination([
          'class'      => 'c-pagination',
          'aria_label' => '実績紹介投稿記事のページネーション',
          'mid_size' => 5,
          'prev_text' => '<img src="' . esc_url(get_theme_file_uri("/images/arrow-left-b.svg")) . '" alt="" class="c-pagination__arrow" width="11" height="18">',
          'next_text' => '<img src="' . esc_url(get_theme_file_uri("/images/arrow-right-b.svg")) . '" alt="" class="c-pagination__arrow" width="11" height="18">',
          'total' => $the_query->max_num_pages,
          'current' => $paged
        ]);
        ?>
      </div>
    </div>
    <!-- /.l-inner -->
  </section>
  <!-- /.p-post-area -->

  <?php get_template_part('template-parts/contact'); ?>
</main>
<!-- .p-page-works -->

<!-- .c-overlay -->
<div class="c-overlay" id="js-overlay"></div>
<!-- /.c-overlay -->

<?php get_footer(); ?>