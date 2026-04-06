<?php get_header(); ?>

<!-- .p-page-news-detail -->
<div class="p-page-news-detail">
  <?php if (function_exists('bcn_display')) { ?>
    <!-- .c-breadcrumb -->
    <nav class="c-breadcrumb p-page-news-detail__breadcrumb" aria-label="パンくずナビゲーション" vocab="https://schema.org/" typeof="BreadcrumbList">
      <div class="c-breadcrumb__inner">
        <?php bcn_display(); ?>
      </div>
    </nav>
    <!-- /.c-breadcrumb -->
  <?php } ?>

  <div class="l-inner p-page-news-detail__inner">
    <main class="p-page-news-detail__main">
      <article class="p-page-news-detail__article">
        <!-- .p-hero-news -->
        <div class="p-hero-news p-page-news-detail__hero">
          <div class="p-hero-news__header">
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
            <h1 class="p-hero-news__title">
              <?php the_title(); ?>
            </h1>
            <time class="p-hero-news__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
          </div>
          <figure class="p-hero-news__img-wrap">
            <?php if (has_post_thumbnail()) : ?>
              <!-- アイキャッチ画像 -->
              <?php the_post_thumbnail('full', ['class' => 'p-hero-news__img']); ?>
            <?php else : ?>
              <!-- NoImage画像 -->
              <img class="p-hero-news__img" src="<?php echo esc_url(get_theme_file_uri("images/noimage.png")); ?>" alt="NoImage画像" width="315" height="176">
            <?php endif ; ?>
          </figure>
        </div>
        <!-- /.p-hero-news -->

        <!-- .p-post-news -->
        <div class="p-post-news p-page-news-detail__post">
          <?php the_content(); ?>
        </div>
        <!-- /.p-post-news -->
      </article>
      
      <?php
      // 矢印アイコンのパスを取得
      $prev_arrow_path = esc_url(get_theme_file_uri("/images/arrow-left-b.svg"));
      $next_arrow_path = esc_url(get_theme_file_uri("/images/arrow-right-b.svg"));
      // リンクを取得
      $prev_link = get_previous_post_link('%link', '<img src="' . $prev_arrow_path . '" class="c-btn__img" alt="" width="5" height="9"><span class="c-btn__text">前の記事へ</span>');
      $next_link = get_next_post_link('%link', '<span class="c-btn__text">次の記事へ</span><img src="' . $next_arrow_path . '" class="c-btn__img" alt="" width="5" height="9">');
      // HTMLを出力
      if (!empty($prev_link) || !empty($next_link)) {
        echo '<div class="p-page-news-detail__btn-wrap">';
        // 前の記事へのリンク
        if (!empty($prev_link)) {
          echo str_replace('<a href=', '<a class="c-btn c-btn--border c-btn--img-left p-page-news-detail__btn" href=', $prev_link);
        }
        // 次の記事へのリンク
        if (!empty($next_link)) {
          echo str_replace('<a href=', '<a class="c-btn c-btn--border p-page-news-detail__btn p-page-news-detail__btn--next" href=', $next_link);
        }
        echo '</div>';
      }
      ?>
    </main>

    <!-- .l-aside -->
    <aside class="l-aside p-page-news-detail__aside">
      <h2 class="l-aside__title">最新記事</h2>
      <?php
      $the_query = new WP_Query([
        "post_type" => "post",
        "posts_per_page" => 5,
        "orderby" => "date",
        "order" => "DESC",
      ]);
      ?>
      <?php if ($the_query->have_posts()) : ?>
        <ul class="l-aside__list">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <!-- .p-media -->
            <li class="p-media p-media--aside l-aside__item">
              <a href="<?php the_permalink(); ?>" class="p-media__link">
                <div class="p-media__body">
                  <h3 class="p-media__title">
                    <span class="js-limitedText" data-limit-sp="36" data-limit-pc="36"><?php the_title(); ?></span>
                  </h3>
                  <time class="p-media__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                </div>
                <figure class="p-media__img-wrap">
                  <?php if (has_post_thumbnail()) : ?>
                    <!-- アイキャッチ画像 -->
                    <?php the_post_thumbnail('full', ['class' => 'p-media__img']); ?>
                  <?php else : ?>
                    <!-- NoImage画像 -->
                    <img class="p-media__img" src="<?php echo esc_url(get_theme_file_uri("images/noimage.png")); ?>" alt="NoImage画像" width="100" height="100">
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

      <h2 class="l-aside__title">アーカイブ</h2>
      <ul class="l-aside__list">
        <?php wp_get_archives('type=monthly&limit=5'); ?>
      </ul>

      <h2 class="l-aside__title">カテゴリー</h2>
      <ul class="l-aside__list">
        <?php
        $categories = get_categories();
        foreach ($categories as $category) {
          echo '<li class="l-aside__item">' .
                 '<a class="l-aside__link" href="' . get_category_link($category->term_id) . '">' .
                   '<h3 class="l-aside__text">' . $category->name . '</h3>' .
                 '</a>' .
                '</li>';
        }
        ?>
      </ul>
    </aside>
    <!-- /.l-aside -->
  </div>

  <?php get_template_part('template-parts/contact'); ?>
</div>
<!-- /.p-page-news-detail -->

<!-- .c-overlay -->
<div class="c-overlay" id="js-overlay"></div>
<!-- /.c-overlay -->

<?php get_footer(); ?>