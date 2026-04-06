<?php
if (is_page('about')) {
  $mix_class = 'p-page-about__contact';

} elseif (is_page('service')) {
  $mix_class = 'p-page-service__contact';

} elseif (is_home() || is_category() || is_date()) {
  $mix_class = 'p-page-news__contact';

} elseif (is_post_type_archive('works') || is_tax('genre')) {
  $mix_class = 'p-page-works__contact';

} elseif (is_page(['contact', 'confirm', 'complete'])) {
  $mix_class = 'p-page-contact__contact';

} else {
  $mix_class = '';
}
?>

<!-- .p-contact -->
<div class="p-contact <?php echo esc_attr($mix_class); ?>">
  <div class="p-contact__inner">
    <div class="p-contact__body">
      <div class="p-contact__content">
        <p class="p-contact__text">
          輸入車の購入や修理のご相談など<br>お気軽にお問い合わせください。
        </p>
        <a href="<?php echo esc_url(home_url("/contact")) ?>" class="p-contact__btn">
          <svg class="p-contact__btn-img" aria-hidden="true" width="15.995" height="12.796" viewBox="0 0 15.995 12.796">
            <path d="M17.4,6H4.6A1.6,1.6,0,0,0,3.008,7.6L3,17.2a1.6,1.6,0,0,0,1.6,1.6H17.4A1.6,1.6,0,0,0,19,17.2V7.6A1.6,1.6,0,0,0,17.4,6Zm0,11.2H4.6v-8l6.4,4,6.4-4ZM11,11.6l-6.4-4H17.4Z" transform="translate(-3 -6)" fill="currentColor"/>
          </svg>
          <span class="p-contact__btn-text">お問い合わせ</span>
        </a>
        <a href="#!" class="p-contact__btn">
          <svg class="p-contact__btn-img" aria-hidden="true" width="17.5" height="17.532" viewBox="0 0 17.5 17.532">
            <path d="M17.558,19.782c-.071,0-.142,0-.212-.01h-.014a16.753,16.753,0,0,1-7.267-2.584,16.545,16.545,0,0,1-5.053-5.053,16.75,16.75,0,0,1-2.584-7.3V4.821A2.359,2.359,0,0,1,4.775,2.25H7.2A2.37,2.37,0,0,1,9.54,4.279v.007a9.594,9.594,0,0,0,.522,2.1,2.365,2.365,0,0,1-.531,2.487l-.611.611a12.13,12.13,0,0,0,3.766,3.766l.608-.608a2.359,2.359,0,0,1,2.492-.534,9.59,9.59,0,0,0,2.095.522h.007a2.359,2.359,0,0,1,2.029,2.384v2.4a2.359,2.359,0,0,1-2.359,2.365Zm-.072-1.5a.859.859,0,0,0,.931-.859V15q0-.009,0-.019a.859.859,0,0,0-.737-.872,11.1,11.1,0,0,1-2.42-.6.859.859,0,0,0-.908.193l-1.019,1.019a.75.75,0,0,1-.9.122A13.628,13.628,0,0,1,7.325,9.734a.75.75,0,0,1,.122-.9L8.468,7.811a.86.86,0,0,0,.19-.9,11.1,11.1,0,0,1-.6-2.422A.863.863,0,0,0,7.2,3.75H4.775a.859.859,0,0,0-.854.931,15.244,15.244,0,0,0,2.353,6.64l0,.006a15.035,15.035,0,0,0,4.6,4.6l.006,0A15.244,15.244,0,0,0,17.487,18.279Z" transform="translate(-2.418 -2.25)" fill="currentColor"/>
          </svg>
          <span class="p-contact__btn-text">0000-000-000</span>
        </a>
        <p class="p-contact__note">受付時間 : 火曜日を除く 10：00〜18：00</p>
      </div>
    </div>
    <figure class="p-contact__img-wrap">
      <picture>
        <source
          srcset="<?php echo esc_url(get_theme_file_uri("images/contact_sp.webp")); ?>"
          type="image/webp"
          media="(max-width: 767.98px)"
        >
        <source
          srcset="<?php echo esc_url(get_theme_file_uri("images/contact_sp.jpg")); ?>"
          media="(max-width: 767.98px)"
        >
        <source
          srcset="<?php echo esc_url(get_theme_file_uri('images/contact.webp')); ?>"
          type="image/webp"
        >
        <source
          srcset="<?php echo esc_url(get_theme_file_uri("images/contact.jpg")); ?>"
        >
        <img
          src="<?php echo esc_url(get_theme_file_uri("images/contact.jpg")); ?>"
          alt=""
          class="p-fv__img"
          width="820"
          height="470"
          loading="lazy"
        >
      </picture>
    </figure>
  </div>
</div>
<!-- /.p-contact -->
