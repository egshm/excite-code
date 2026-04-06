<?php get_header(); ?>

<!-- .p-page-works-detail -->
<main class="p-page-works-detail">
  <?php if (function_exists('bcn_display')) { ?>
    <!-- .c-breadcrumb -->
    <nav class="c-breadcrumb p-page-works-detail__breadcrumb" aria-label="パンくずナビゲーション" vocab="https://schema.org/" typeof="BreadcrumbList">
      <div class="c-breadcrumb__inner">
        <?php bcn_display(); ?>
      </div>
    </nav>
    <!-- /.c-breadcrumb -->
  <?php } ?>

  <div class="p-page-works-detail__inner">
    <article class="p-page-works-detail__article">
      <!-- .p-hero-works -->
      <div class="p-hero-works p-page-works-detail__hero">
        <div class="p-hero-works__header">
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
          <h1 class="p-hero-works__title">
            <?php the_title(); ?>
          </h1>
          <time class="p-hero-works__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
        </div>
        <figure class="p-hero-works__img-wrap">
          <?php if (has_post_thumbnail()) : ?>
            <!-- アイキャッチ画像 -->
            <?php the_post_thumbnail('full', ['class' => 'p-hero-works__img']); ?>
          <?php else : ?>
            <!-- NoImage画像 -->
            <img class="p-hero-works__img" src="<?php echo esc_url(get_theme_file_uri("images/noimage.png")); ?>" alt="NoImage画像" width="840" height="471">
          <?php endif ; ?>
        </figure>
      </div>
      <!-- /.p-hero-works -->

      <!-- .p-post-works -->
      <div class="p-post-works p-page-works-detail__post">
        <?php the_content(); ?>
        <div class="p-post-works__btn-wrap">
          <!-- .c-btn -->
          <a href="<?php echo esc_url(home_url("/works")) ?>" class="c-btn c-btn--border c-btn--img-left p-post-works__btn">
            <img src="<?php echo esc_url(get_theme_file_uri("/images/arrow-left-b.svg")); ?>" alt="" class="c-btn__img" width="5" height="9">
            <span class="c-btn__text">実績一覧へ戻る</span>
          </a>
          <!-- /.c-btn -->
        </div>
      </div>
      <!-- /.p-post-works -->
    </article>
  </div>

  <?php get_template_part('template-parts/contact'); ?>
</main>
<!-- .p-page-works-detail -->

<!-- .c-overlay -->
<div class="c-overlay" id="js-overlay"></div>
<!-- /.c-overlay -->

<?php get_footer(); ?>