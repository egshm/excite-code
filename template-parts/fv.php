<?php
if (is_page('about')) {
  $img_webp_pc = '/images/fv-about.webp';
  $img_webp_sp = '/images/fv-about_sp.webp';
  $img_pc = '/images/fv-about.jpg';
  $img_sp = '/images/fv-about_sp.jpg';
  $title_main = 'About';
  $title_sub = '私たちについて';
  $mix_class = 'p-page-about__fv';

} elseif (is_page('service')) {
  $img_webp_pc = '/images/fv-service.webp';
  $img_webp_sp = '/images/fv-service_sp.webp';
  $img_pc = '/images/fv-service.jpg';
  $img_sp = '/images/fv-service_sp.jpg';
  $title_main = 'Service';
  $title_sub = 'サービス紹介';
  $mix_class = 'p-page-service__fv';

} elseif (is_home() || is_category() || is_date()) {
  $img_webp_pc = '/images/fv-news.webp';
  $img_webp_sp = '/images/fv-news_sp.webp';
  $img_pc = '/images/fv-news.jpg';
  $img_sp = '/images/fv-news_sp.jpg';
  $title_main = 'News';
  $title_sub = 'お知らせ';
  $mix_class = 'p-page-news__fv';

} elseif (is_post_type_archive('works') || is_tax('genre')) {
  $img_webp_pc = '/images/fv-works.webp';
  $img_webp_sp = '/images/fv-works_sp.webp';
  $img_pc = '/images/fv-works.jpg';
  $img_sp = '/images/fv-works_sp.jpg';
  $title_main = 'Works';
  $title_sub = '実績紹介';
  $mix_class = 'p-page-works__fv';

} elseif (is_page(['contact', 'confirm', 'complete'])) {
  $img_webp_pc = '/images/fv-contact.webp';
  $img_webp_sp = '/images/fv-contact_sp.webp';
  $img_pc = '/images/fv-contact.jpg';
  $img_sp = '/images/fv-contact_sp.jpg';
  $title_main = 'Contact';
  $title_sub = 'お問い合わせ';
  $mix_class = 'p-page-contact__fv';

} else {
  $img_pc = '/images/fv-default.jpg';
  $img_sp = $img_pc;
  $title_main = 'Not found image and title';
  $title_sub = '背景画像とタイトルが設定されていません';
  $mix_class = '';
}
?>

<!-- .p-fv-sub -->
<div class="p-fv-sub <?php echo esc_attr($mix_class); ?>" id="js-fv">
  <div class="p-fv-sub__inner">
    <hgroup class="p-fv-sub__title" id="js-fvTitle">
      <h1 class="p-fv-sub__title-main"><?php echo esc_html($title_main); ?></h1>
      <p class="p-fv-sub__title-sub"><?php echo esc_html($title_sub); ?></p>
    </hgroup>
    <figure class="p-fv-sub__img-wrap" id="js-fvImg">
      <picture>
        <source
          srcset="<?php echo esc_url(get_theme_file_uri($img_webp_sp)); ?>"
          type="image/webp"
          media="(max-width: 767.9px)"
        >
        <source
          srcset="<?php echo esc_url(get_theme_file_uri($img_sp)); ?>"
          media="(max-width: 767.9px)"
        >
        <source
          srcset="<?php echo esc_url(get_theme_file_uri($img_webp_pc)); ?>"
          type="image/webp"
        >
        <source
          srcset="<?php echo esc_url(get_theme_file_uri($img_pc)); ?>"
        >
        <img
          fetchpriority="high"
          src="<?php echo esc_url(get_theme_file_uri($img_pc)); ?>"
          alt=""
          class="p-fv__img"
          width="1270"
          height="514"
          decoding="async"
          loading="eager"
        >
      </picture>
    </figure>
  </div>
</div>
<!-- /.p-fv-sub -->
