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
    <?php echo do_shortcode('[contact-form-7 id="6499f7b" title="お問い合わせフォーム"]'); ?>
  </div>
</main>
<!-- .p-page-contact -->

<!-- .c-overlay -->
<div class="c-overlay" id="js-overlay"></div>
<!-- /.c-overlay -->

<?php get_footer(); ?>
