<?php get_header(); ?>

<!-- .p-page-contact -->
<main class="p-page-contact">
  <?php get_template_part('template-parts/fv'); ?>

  <?php if (function_exists('bcn_display')) { ?>
    <!-- .c-breadcrumb -->
    <nav class="c-breadcrumb p-page-contact__breadcrumb" aria-label="パンくずナビゲーション" vocab="https://schema.org/" typeof="BreadcrumbList">
      <div class="c-breadcrumb__inner">
        <?php bcn_display(); ?>
      </div>
    </nav>
    <!-- /.c-breadcrumb -->
  <?php } ?>

  <div class="p-page-contact__inner">
    <p class="p-page-contact__lead-en">
      Thank you for contacting us.
    </p>
    <p class="p-page-contact__lead">
      お問い合わせありがとうございます。
    </p>
    <p class="p-page-contact__text">
      近日中に折り返しご連絡いたします。<br>
      今しばらくお待ちくださいますよう、よろしくお願い申し上げます。<br>
      万が一、ご回答メールが届かない場合は、送信トラブル等の可能性もありますので、大変お手数ではございますが、
      もう一度フォームよりお問い合わせいただくか、お電話にてお問い合わせをお願いいたします。<br>
      今後ともご愛顧賜りますようよろしくお願い申し上げます。
    </p>
    <div class="p-page-contact__btn-wrap">
      <a href="<?php echo esc_url(home_url("/")) ?>" class="c-btn-contact c-btn-contact--lg c-btn-contact--colored c-btn-contact--img-left p-page-contact__btn">
        <svg aria-hidden="true" class="c-btn-contact__img" width="5" height="8.745" viewBox="0 0 5 8.745">
          <path d="M12.754,10.567,16.063,7.26a.622.622,0,0,0,0-.883.63.63,0,0,0-.885,0l-3.749,3.746a.624.624,0,0,0-.018.862l3.765,3.773a.625.625,0,0,0,.885-.883Z" transform="translate(-11.246 -6.196)" fill="currentColor"/>
        </svg>
        <button class="c-btn-contact__btn">Topへ戻る</button>
      </a>
    </div>
  </div>
</main>
<!-- .p-page-contact -->

<!-- .c-overlay -->
<div class="c-overlay" id="js-overlay"></div>
<!-- /.c-overlay -->

<?php get_footer(); ?>