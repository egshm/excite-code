<?php get_header(); ?>

<!-- .p-page-service -->
<main class="p-page-service">
  <?php get_template_part('template-parts/fv'); ?>

  <?php if (function_exists('bcn_display')) { ?>
    <!-- .c-breadcrumb -->
    <nav class="c-breadcrumb p-page-service__breadcrumb" aria-label="パンくずナビゲーション" vocab="https://schema.org/" typeof="BreadcrumbList">
      <div class="c-breadcrumb__inner">
        <?php bcn_display(); ?>
      </div>
    </nav>
    <!-- /.c-breadcrumb -->
  <?php } ?>

  <!-- .p-summary -->
  <div class="p-summary p-page-service__summary">
    <div class="p-summary__inner">
      <ul class="p-summary__list">
        <li class="p-summary__item">
          <a href="#support" class="p-summary__link">
            <span class="p-summary__link-text">購入サポート</span>
            <img aria-hidden="true" src="<?php echo esc_url(get_theme_file_uri("/images/arrow-down-b.svg")); ?>" alt="" class="p-summary__arrow" width="9" height="5">
          </a>
        </li>
        <li class="p-summary__item">
          <a href="#repair" class="p-summary__link">
            <span class="p-summary__link-text">修理・整備</span>
            <img aria-hidden="true" src="<?php echo esc_url(get_theme_file_uri("/images/arrow-down-b.svg")); ?>" alt="" class="p-summary__arrow" width="9" height="5">
          </a>
        </li>
        <li class="p-summary__item">
          <a href="#inspection" class="p-summary__link">
            <span class="p-summary__link-text">車検・点検</span>
            <img aria-hidden="true" src="<?php echo esc_url(get_theme_file_uri("/images/arrow-down-b.svg")); ?>" alt="" class="p-summary__arrow" width="9" height="5">
          </a>
        </li>
      </ul>
      <p class="p-summary__text-main">
        お客様一人一人が求める<br>理想のカー ライフに寄り添います
      </p>
      <p class="p-summary__text-sub">
        様々な輸入車・国産車のメンテナンスのご相談から点検・整備まで、親切かつスピーディな対応を心がけ、あらゆる疑問や不安にお答えします。
        最新鋭の自社集中工場には、四輪アライメントをはじめ最新コンピューターと各ブランドに精通した熟練のサービススタッフを配置、フロントでは車種ブランド別の専用電話回線をご用意しております。
      </p>
    </div>
  </div>
  <!-- /.p-summary -->

  <ul class="p-page-service__list">
    <!-- .p-media-layers -->
    <li class="p-media-layers p-page-service__item">
      <div class="p-media-layers__layer-main">
        <div class="p-media-layers__body">
          <!-- .c-heading-numbered -->
          <hgroup class="c-heading-numbered p-media-layers__title-lv2" id="support">
            <p class="c-heading-numbered__number">01</p>
            <h2 class="c-heading-numbered__title">購入サポート</h2>
          </hgroup>
          <!-- /.c-heading-numbered -->
          <p class="p-media-layers__text-main">
            国を超え、メーカーを超え、高級の本質をお届けする特別な一台との出会いをサポートします。
          </p>
        </div>
        <figure class="p-media-layers__img-wrap">
          <picture>
            <source
              srcset="<?php echo esc_url(get_theme_file_uri("/images/support.webp")); ?>"
              type="image/webp"
            >
            <source
              srcset="<?php echo esc_url(get_theme_file_uri("/images/support.jpg")); ?>"
            >
            <img
              src="<?php echo esc_url(get_theme_file_uri("/images/support.jpg")); ?>"
              alt=""
              class="p-media-layers__img"
              width="760"
              height="530"
              loading="lazy"
            >
          </picture>
        </figure>
      </div>
      <div class="p-media-layers__layer-sub">
        <!-- .c-heading-lv3 -->
        <hgroup class="c-heading-lv3 p-media-layers__title-lv3">
          <h3 class="c-heading-lv3__main">FEATURES</h3>
          <p class="c-heading-lv3__sub">特徴</p>
        </hgroup>
        <!-- /.c-heading-lv3 -->
        <p class="p-media-layers__text-sub">
          弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。<br>
          これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。
        </p>
      </div>
    </li>
    <!-- /.p-media-layers -->

    <!-- .p-media-layers -->
    <li class="p-media-layers p-page-service__item">
      <div class="p-media-layers__layer-main">
        <div class="p-media-layers__body">
          <!-- .c-heading-numbered -->
          <hgroup class="c-heading-numbered p-media-layers__title-lv2" id="repair">
            <p class="c-heading-numbered__number">02</p>
            <h2 class="c-heading-numbered__title">修理・整備</h2>
          </hgroup>
          <!-- /.c-heading-numbered -->
          <p class="p-media-layers__text-main">
            高度な輸入車修理技術と数多くの修理実績、熟練の技術・設備であなたの愛車を完全に直します。
          </p>
        </div>
        <figure class="p-media-layers__img-wrap">
          <picture>
            <source
              srcset="<?php echo esc_url(get_theme_file_uri("/images/repair.webp")); ?>"
              type="image/webp"
            >
            <source
              srcset="<?php echo esc_url(get_theme_file_uri("/images/repair.jpg")); ?>"
            >
            <img
              src="<?php echo esc_url(get_theme_file_uri("/images/repair.jpg")); ?>"
              alt=""
              class="p-media-layers__img"
              width="760"
              height="530"
              loading="lazy"
            >
          </picture>
        </figure>
      </div>
      <div class="p-media-layers__layer-sub">
        <!-- .c-heading-lv3 -->
        <hgroup class="c-heading-lv3 p-media-layers__title-lv3">
          <h3 class="c-heading-lv3__main">FEATURES</h3>
          <p class="c-heading-lv3__sub">特徴</p>
        </hgroup>
        <!-- /.c-heading-lv3 -->
        <p class="p-media-layers__text-sub">
          弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。<br>
          これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。
        </p>
      </div>
    </li>
    <!-- /.p-media-layers -->

    <!-- .p-media-layers -->
    <li class="p-media-layers p-page-service__item">
      <div class="p-media-layers__layer-main">
        <div class="p-media-layers__body">
          <!-- .c-heading-numbered -->
          <hgroup class="c-heading-numbered p-media-layers__title-lv2" id="inspection">
            <p class="c-heading-numbered__number">03</p>
            <h2 class="c-heading-numbered__title">車検・点検</h2>
          </hgroup>
          <!-- /.c-heading-numbered -->
          <p class="p-media-layers__text-main">
            輸入車の取り扱いが県内トップクラス。専門の整備工場へ任せたいならわたしたちへご相談ください。
          </p>
        </div>
        <figure class="p-media-layers__img-wrap">
          <picture>
            <source
              srcset="<?php echo esc_url(get_theme_file_uri("/images/inspection.webp")); ?>"
              type="image/webp"
            >
            <source
              srcset="<?php echo esc_url(get_theme_file_uri("/images/inspection.jpg")); ?>"
            >
            <img
              src="<?php echo esc_url(get_theme_file_uri("/images/inspection.jpg")); ?>"
              alt=""
              class="p-media-layers__img"
              width="760"
              height="530"
              loading="lazy"
            >
          </picture>
        </figure>
      </div>
      <div class="p-media-layers__layer-sub">
        <!-- .c-heading-lv3 -->
        <hgroup class="c-heading-lv3 p-media-layers__title-lv3">
          <h3 class="c-heading-lv3__main">FEATURES</h3>
          <p class="c-heading-lv3__sub">特徴</p>
        </hgroup>
        <!-- /.c-heading-lv3 -->
        <p class="p-media-layers__text-sub">
          弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。<br>
          これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。
        </p>
      </div>
    </li>
    <!-- /.p-media-layers -->
  </ul>

  <?php get_template_part('template-parts/contact'); ?>
</main>
<!-- .p-page-service -->

<!-- .c-overlay -->
<div class="c-overlay" id="js-overlay"></div>
<!-- /.c-overlay -->

<?php get_footer(); ?>