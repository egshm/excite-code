<?php get_header(); ?>

<!-- .p-page-top -->
<main class="p-page-top">
  <!-- .p-fv -->
  <div class="p-fv p-page-top__fv">
    <div class="p-fv__inner">
      <div class="p-fv__content">
        <h1 class="p-fv__copy-wrapper">
          <span class="p-fv__copy">あなたの</span>
          <span class="p-fv__copy">日常が目覚める</span>
        </h1>
      </div>
      <div aria-hidden="true" class="swiper-container p-fv__slider" id="js-fvSlider">
        <div class="swiper-wrapper p-fv__slide-wrapper">
          <div class="swiper-slide p-fv__slide">
            <picture>
              <source
                srcset="<?php echo esc_url(get_theme_file_uri("images/fv_sp.webp")); ?>"
                type="image/webp"
                media="(max-width: 767.9px)"
              >
              <source
                srcset="<?php echo esc_url(get_theme_file_uri("images/fv_sp.jpg")); ?>"
                media="(max-width: 767.9px)"
              >
              <source
                srcset="<?php echo esc_url(get_theme_file_uri('images/fv.webp')); ?>"
                type="image/webp"
              >
              <source
                srcset="<?php echo esc_url(get_theme_file_uri("images/fv.jpg")); ?>"
              >
              <img
                fetchpriority="high"
                src="<?php echo esc_url(get_theme_file_uri("images/fv.jpg")); ?>"
                alt=""
                class="p-fv__img"
                width="1034"
                height="823"
                decoding="async"
                loading="eager"
              >
            </picture>
          </div>
          <div class="swiper-slide p-fv__slide">
            <picture>
              <source
                srcset="<?php echo esc_url(get_theme_file_uri("images/fv-02_sp.webp")); ?>"
                type="image/webp"
                media="(max-width: 767.9px)"
              >
              <source
                srcset="<?php echo esc_url(get_theme_file_uri("images/fv-02_sp.jpg")); ?>"
                media="(max-width: 767.9px)"
              >
              <source
                srcset="<?php echo esc_url(get_theme_file_uri('images/fv-02.webp')); ?>"
                type="image/webp"
              >
              <source
                srcset="<?php echo esc_url(get_theme_file_uri("images/fv-02.jpg")); ?>"
              >
              <img
                src="<?php echo esc_url(get_theme_file_uri("images/fv-02.jpg")); ?>"
                alt=""
                class="p-fv__img"
                width="1034"
                height="823"
                loading="lazy"
              >
            </picture>
          </div>
          <div class="swiper-slide p-fv__slide">
            <picture>
              <source
                srcset="<?php echo esc_url(get_theme_file_uri("images/fv-03_sp.webp")); ?>"
                type="image/webp"
                media="(max-width: 767.9px)"
              >
              <source
                srcset="<?php echo esc_url(get_theme_file_uri("images/fv-03_sp.jpg")); ?>"
                media="(max-width: 767.9px)"
              >
              <source
                srcset="<?php echo esc_url(get_theme_file_uri('images/fv-03.webp')); ?>"
                type="image/webp"
              >
              <source
                srcset="<?php echo esc_url(get_theme_file_uri("images/fv-03.jpg")); ?>"
              >
              <img
                src="<?php echo esc_url(get_theme_file_uri("images/fv-03.jpg")); ?>"
                alt=""
                class="p-fv__img"
                width="1034"
                height="823"
                loading="lazy"
              >
            </picture>
          </div>
          <div class="swiper-slide p-fv__slide">
            <picture>
              <source
                srcset="<?php echo esc_url(get_theme_file_uri("images/fv-04_sp.webp")); ?>"
                type="image/webp"
                media="(max-width: 767.9px)"
              >
              <source
                srcset="<?php echo esc_url(get_theme_file_uri("images/fv-04_sp.jpg")); ?>"
                media="(max-width: 767.9px)"
              >
              <source
                srcset="<?php echo esc_url(get_theme_file_uri('images/fv-04.webp')); ?>"
                type="image/webp"
              >
              <source
                srcset="<?php echo esc_url(get_theme_file_uri("images/fv-04.jpg")); ?>"
              >
              <img
                src="<?php echo esc_url(get_theme_file_uri("images/fv-04.jpg")); ?>"
                alt=""
                class="p-fv__img"
                width="1034"
                height="823"
                loading="lazy"
              >
            </picture>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.p-fv -->

  <!-- .c-flow-text -->
  <div class="c-flow-text p-page-top__flow-text">
    <p class="c-flow-text__text" id="js-flowText">Good life for Good Car</p>
  </div>
  <!-- /.c-flow-text -->

  <!-- .about -->
  <section class="p-about p-page-top__about">
    <!-- .l-inner -->
    <div class="l-inner p-about__inner">
      <div class="p-about__body">
        <h2 class="p-about__title">About us</h2>
        <p class="p-about__text">
          弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。<br>
          これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、
          最良の一台との出会いをコーディネートいたします。
        </p>
        <!-- .c-btn -->
        <a href="<?php echo esc_url(home_url("/about")) ?>" class="c-btn p-about__btn">
          <span class="c-btn__text">Read more</span>
          <img src="<?php echo esc_url(get_theme_file_uri("/images/arrow-right-b.svg")); ?>" alt="" class="c-btn__img" width="5" height="9">
        </a>
        <!-- /.c-btn -->
      </div>
      <figure class="p-about__img-wrap">
        <picture>
          <source
            srcset="<?php echo esc_url(get_theme_file_uri("/images/about.webp")); ?>"
            type="image/webp"
          >
          <source
            srcset="<?php echo esc_url(get_theme_file_uri("/images/about.jpg")); ?>"
          >
          <img
            src="<?php echo esc_url(get_theme_file_uri("/images/about.jpg")); ?>"
            alt=""
            class="p-about__img"
            width="550"
            height="480"
            loading="lazy"
          >
        </picture>
      </figure>
    </div>
    <!-- /.l-inner -->
  </section>
  <!-- /.about -->

  <!-- .p-service -->
  <section class="p-service p-page-top__service">
    <!-- .l-inner -->
    <div class="l-inner p-service__inner">
      <h2 class="p-service__title js-inview">Service</h2>
      <ul class="p-service__list">
        <!-- .p-card -->
        <li class="p-service__item p-card">
          <hgroup class="p-card__title">
            <h3 class="p-card__title-main">購入サポート</h3>
            <p class="p-card__title-sub">Service01</p>
          </hgroup>
          <figure class="p-card__img-wrap">
            <picture>
              <source
                srcset="<?php echo esc_url(get_theme_file_uri("/images/service.webp")); ?>"
                type="image/webp"
              >
              <source
                srcset="<?php echo esc_url(get_theme_file_uri("/images/service.jpg")); ?>"
              >
              <img
                src="<?php echo esc_url(get_theme_file_uri("/images/service.jpg")); ?>"
                alt=""
                class="p-card__img"
                width="335"
                height="170"
                loading="lazy"
              >
            </picture>
          </figure>
          <p class="p-card__text">
            国を超え、メーカーを超え、高級の本質をお届けする特別な一台との出会いをサポートします。
          </p>
          <!-- .c-btn -->
          <a href="<?php echo esc_url(home_url("/service#support")) ?>" class="c-btn c-btn--border p-card__btn">
            <span class="c-btn__text">Read more</span>
            <img src="<?php echo esc_url(get_theme_file_uri("/images/arrow-right-b.svg")); ?>" alt="" class="c-btn__img" width="5" height="9">
          </a>
          <!-- /.c-btn -->
        </li>
        <!-- /.p-card -->

        <!-- .p-card -->
        <li class="p-service__item p-card">
          <hgroup class="p-card__title">
            <h3 class="p-card__title-main">修理・整備</h3>
            <p class="p-card__title-sub">Service02</p>
          </hgroup>
          <figure class="p-card__img-wrap">
            <picture>
              <source
                srcset="<?php echo esc_url(get_theme_file_uri("/images/service-02.webp")); ?>"
                type="image/webp"
              >
              <source
                srcset="<?php echo esc_url(get_theme_file_uri("/images/service-02.jpg")); ?>"
              >
              <img
                src="<?php echo esc_url(get_theme_file_uri("/images/service-02.jpg")); ?>"
                alt=""
                class="p-card__img"
                width="335"
                height="170"
                loading="lazy"
              >
            </picture>
          </figure>
          <p class="p-card__text">
            高度な輸入車修理技術と数多くの修理実績、熟練の技術・設備であなたの愛車を完全に直します。
          </p>
          <!-- .c-btn -->
          <a href="<?php echo esc_url(home_url("/service#repair")) ?>" class="c-btn c-btn--border p-card__btn">
            <span class="c-btn__text">Read more</span>
            <img src="<?php echo esc_url(get_theme_file_uri("/images/arrow-right-b.svg")); ?>" alt="" class="c-btn__img" width="5" height="9">
          </a>
          <!-- /.c-btn -->
        </li>
        <!-- /.p-card -->

        <!-- .p-card -->
        <li class="p-service__item p-card">
          <hgroup class="p-card__title">
            <h3 class="p-card__title-main">車検・点検</h3>
            <p class="p-card__title-sub">Service03</p>
          </hgroup>
          <figure class="p-card__img-wrap">
            <picture>
              <source
                srcset="<?php echo esc_url(get_theme_file_uri("/images/service-03.webp")); ?>"
                type="image/webp"
              >
              <source
                srcset="<?php echo esc_url(get_theme_file_uri("/images/service-03.jpg")); ?>"
              >
              <img
                src="<?php echo esc_url(get_theme_file_uri("/images/service-03.jpg")); ?>"
                alt=""
                class="p-card__img"
                width="335"
                height="170"
                loading="lazy"
              >
            </picture>
          </figure>
          <p class="p-card__text">
            輸入車の取り扱いが県内トップクラス。専門の整備工場へ任せたいなら弊社へご相談ください。
          </p>
          <!-- .c-btn -->
          <a href="<?php echo esc_url(home_url("/service#inspection")) ?>" class="c-btn c-btn--border p-card__btn">
            <span class="c-btn__text">Read more</span>
            <img src="<?php echo esc_url(get_theme_file_uri("/images/arrow-right-b.svg")); ?>" alt="" class="c-btn__img" width="5" height="9">
          </a>
          <!-- /.c-btn -->
        </li>
        <!-- /.p-card -->
      </ul>
    </div>
    <!-- /.l-inner -->
  </section>
  <!-- /.p-service -->

  <!-- .p-works -->
  <section class="p-works p-page-top__works">
    <!-- .l-inner -->
    <div class="p-works__inner l-inner">
      <h2 class="p-works__title js-inview">Works</h2>
      <div class="p-works__content">
        <?php
        $the_query = new WP_Query([
          "post_type" => "works",
          "posts_per_page" => 3
        ]);
        ?>
        <?php if ($the_query->have_posts()) : ?>
          <ul class="p-works__list">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <!-- .p-media -->
              <li class="p-works__item p-media js-inview">
                <a href="<?php the_permalink(); ?>" class="p-media__link">
                  <div class="p-media__body">
                    <?php // カテゴリー一覧
                    $taxonomy_terms = get_the_terms($post->ID, 'genre');
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
                    <h3 class="p-media__title">
                      <span class="js-limitedText" data-limit-sp="24">
                        <?php the_title(); ?>
                      </span>
                    </h3>
                    <?php
                    // 実績情報のカスタムフィールドを取得
                    $post_id = get_the_ID();
                    $works_meta = [
                      'text'  => get_post_meta($post_id, 'cf-works-text', true)
                    ];
                    ?>
                    <p class="p-media__text js-limitedText" data-limit-pc="82">
                      <?php echo esc_html($works_meta['text']); ?>
                    </p>
                    <time class="p-media__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                  </div>
                  <figure class="p-media__img-wrap">
                    <?php if (has_post_thumbnail()) : ?>
                      <!-- アイキャッチ画像 -->
                      <?php the_post_thumbnail('full', ['class' => 'p-media__img', 'loading' => 'lazy']); ?>
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

        <div class="p-works__btn-wrap">
          <!-- .c-btn -->
          <a href="<?php echo esc_url(home_url("/works")) ?>" class="c-btn p-works__btn">
            <span class="c-btn__text">Read more</span>
            <img src="<?php echo esc_url(get_theme_file_uri("/images/arrow-right-b.svg")); ?>" alt="" class="c-btn__img" width="5" height="9">
          </a>
          <!-- /.c-btn -->
        </div>
      </div>
    </div>
    <!-- /.l-inner -->
  </section>
  <!-- /.p-works -->

  <!-- .p-post-area -->
  <section class="p-post-area p-page-top__post-area">
    <!-- .l-inner -->
    <div class="p-post-area__inner l-inner">
      <div class="p-post-area__header">
        <h2 class="p-post-area__title js-inview">News</h2>
        <!-- .c-tab -->
        <nav aria-label="記事の分類ナビゲーション" class="c-tab p-post-area__tab p-post-area__tab--inview js-inview">
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
        <?php
        $the_query = new WP_Query([
          "post_type" => "post",
          "posts_per_page" => 5,
        ]);
        ?>
        <?php if ($the_query->have_posts()) : ?>
          <!-- .p-posts -->
          <ul class="p-posts p-post-area__posts">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <li class="p-posts__item js-inview">
                <a href="<?php esc_url(the_permalink()); ?>" class="p-posts__link">
                  <div class="p-posts__header">
                    <time class="p-posts__date" datetime="2026-01-13">2026.01.13</time>
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
                    <h3 class="p-posts__title">
                      <?php the_title(); ?>
                    </h3>
                  </div>
                </a>
              </li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          </ul>
          <!-- /.p-posts -->
        <?php else : ?>
          <p class="p-post-area__error">記事が投稿されていません。</p>
        <?php endif; ?>

        <div class="p-post-area__btn-wrap">
          <!-- .c-btn -->
          <a href="<?php echo esc_url(home_url("/news")) ?>" class="c-btn p-post-area__btn">
            <span class="c-btn__text">Read more</span>
            <img src="<?php echo esc_url(get_theme_file_uri("/images/arrow-right-b.svg")); ?>" alt="" class="c-btn__img" width="5" height="9">
          </a>
          <!-- /.c-btn -->
        </div>
      </div>
    </div>
    <!-- /.l-inner -->
  </section>
  <!-- /.p-post-area -->

  <?php get_template_part('template-parts/contact'); ?>
</main>
<!-- /.p-page-top -->

<!-- .c-overlay -->
<div class="c-overlay" id="js-overlay"></div>
<!-- /.c-overlay -->

<?php get_footer(); ?>