<?php get_header(); ?>

<!-- .p-page-404 -->
<main class="p-page-404">
  <div class="p-page-404__hero">
    <div class="p-page-404__hero-inner">
      <div class="p-page-404__body">
        <h1 class="p-page-404__title">404 Not Found</h1>
        <div class="p-page-404__wrap-pc">
          <p class="p-page-404__text">
            お探しのページはURLが誤っているか、削除された可能性があります。<br>
            3秒後にTOPページに遷移します。
          </p>
          <!-- .c-btn -->
          <a href="<?php echo esc_url(home_url("/")) ?>" class="c-btn c-btn--border c-btn--img-left p-page-404__btn">
            <img aria-hidden="true" src="<?php echo esc_url(get_theme_file_uri("/images/arrow-left-w.svg")); ?>" alt="" class="c-btn__img" width="5" height="9">
            <span class="c-btn__text">Topへ戻る</span>
          </a>
          <!-- /.c-btn -->
        </div>
      </div>
      <figure class="p-page-404__img-wrap">
        <picture>
          <source
            srcset="<?php echo esc_url(get_theme_file_uri("images/fv-404_sp.webp")); ?>"
            type="image/webp"
            media="(max-width: 767.9px)"
          >
          <source
            srcset="<?php echo esc_url(get_theme_file_uri("images/fv-404_sp.jpg")); ?>"
            media="(max-width: 767.9px)"
          >
          <source
            srcset="<?php echo esc_url(get_theme_file_uri('images/fv-404.webp')); ?>"
            type="image/webp"
          >
          <source
            srcset="<?php echo esc_url(get_theme_file_uri("images/fv-404.jpg")); ?>"
          >
          <img
            fetchpriority="high"
            src="<?php echo esc_url(get_theme_file_uri("images/fv-404.jpg")); ?>"
            alt=""
            class="p-page-404__img"
            width="1034"
            height="823"
            decoding="async"
            loading="eager"
          >
        </picture>
      </figure>
    </div>
  </div>
  <div class="p-page-404__wrap-sp">
    <p class="p-page-404__text">
      お探しのページはURLが誤っているか、削除された可能性があります。<br>
      3秒後にTOPページに遷移します。
    </p>
    <!-- .c-btn -->
    <a href="<?php echo esc_url(home_url("/")) ?>" class="c-btn c-btn--border c-btn--img-left p-page-404__btn">
      <img aria-hidden="true" src="<?php echo esc_url(get_theme_file_uri("/images/arrow-left-b.svg")); ?>" alt="" class="c-btn__img" width="5" height="9">
      <span class="c-btn__text">Topへ戻る</span>
    </a>
    <!-- /.c-btn -->
  </div>
</main>
<!-- /.p-page-404 -->

<!-- .c-overlay -->
<div class="c-overlay" id="js-overlay"></div>
<!-- /.c-overlay -->

<?php get_footer(); ?>