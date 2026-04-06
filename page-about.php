<?php get_header(); ?>

<!-- .p-page-about -->
<main class="p-page-about">
  <?php get_template_part('template-parts/fv'); ?>

  <?php if (function_exists('bcn_display')) { ?>
    <!-- .c-breadcrumb -->
    <nav class="c-breadcrumb p-page-about__breadcrumb" aria-label="パンくずナビゲーション" vocab="https://schema.org/" typeof="BreadcrumbList">
      <div class="c-breadcrumb__inner">
        <?php bcn_display(); ?>
      </div>
    </nav>
    <!-- /.c-breadcrumb -->
  <?php } ?>

  <!-- .p-summary -->
  <div class="p-summary p-page-about__summary">
    <div class="p-summary__inner">
      <ul class="p-summary__list">
        <li class="p-summary__item">
          <a href="#philosophy" class="p-summary__link">
            <span class="p-summary__link-text">経営理念</span>
            <img aria-hidden="true" src="<?php echo esc_url(get_theme_file_uri("/images/arrow-down-b.svg")); ?>" alt="" class="p-summary__arrow" width="9" height="5">
          </a>
        </li>
        <li class="p-summary__item">
          <a href="#access" class="p-summary__link">
            <span class="p-summary__link-text">アクセス</span>
            <img aria-hidden="true" src="<?php echo esc_url(get_theme_file_uri("/images/arrow-down-b.svg")); ?>" alt="" class="p-summary__arrow" width="9" height="5">
          </a>
        </li>
        <li class="p-summary__item">
          <a href="#company" class="p-summary__link">
            <span class="p-summary__link-text">会社概要</span>
            <img aria-hidden="true" src="<?php echo esc_url(get_theme_file_uri("/images/arrow-down-b.svg")); ?>" alt="" class="p-summary__arrow" width="9" height="5">
          </a>
        </li>
      </ul>
      <p class="p-summary__text-main">
        国境を超え、メーカーを超え<br>「型にはまらない」あなただけの歓びを
      </p>
      <p class="p-summary__text-sub">
        弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。<br>
        これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、
        最良の一台との出会いをコーディネートいたします。
      </p>
    </div>
  </div>
  <!-- /.p-summary -->

  <!-- .p-philosophy -->
  <section class="p-philosophy p-page-about__philosophy">
    <div class="p-philosophy__inner">
      <div class="p-philosophy__body">
        <!-- .c-heading-lv2 -->
        <hgroup class="c-heading-lv2" id="philosophy">
          <h2 class="c-heading-lv2__main">Philosophy</h2>
          <p class="c-heading-lv2__sub">経営理念</p>
        </hgroup>
        <!-- /.c-heading-lv2 -->
        <p class="p-philosophy__text">
          「お客様とは一生涯のお付き合い」をモットーとし、同時に社員一人一人が責任と誇り、使命感を持ち日々の仕事にやりがいと喜びを感じることができる会社を目指します。<br>
          そういう「社員満足」があってこそ、本当の「お客様に満足」が可能になり、そしてお客様のご満足がさらに社員の満足を高めてくれるからです。<br>
          心の豊かさは楽とかゆとりとかいうより仕事の充実感に求めねばなりません。<br>
          我々は現状に満足することなく挑戦し続けます。
        </p>
        <p class="p-philosophy__ceo">代表取締役　田中太郎</p>
      </div>
      <figure class="p-philosophy__img-wrap">
        <picture>
          <source
            srcset="<?php echo esc_url(get_theme_file_uri("/images/ceo_sp.webp")); ?>"
            type="image/webp"
            media="(max-width: 767.9px)"
          >
          <source
            srcset="<?php echo esc_url(get_theme_file_uri("/images/ceo_sp.jpg")); ?>"
            media="(max-width: 767.9px)"
          >
          <source
            srcset="<?php echo esc_url(get_theme_file_uri("/images/ceo.webp")); ?>"
            type="image/webp"
          >
          <source
            srcset="<?php echo esc_url(get_theme_file_uri("/images/ceo.jpg")); ?>"
          >
          <img
            src="<?php echo esc_url(get_theme_file_uri("/images/ceo.jpg")); ?>"
            alt=""
            class="p-philosophy__img"
            width="360"
            height="565"
            loading="lazy"
          >
        </picture>
      </figure>
    </div>
  </section>
  <!-- /.p-philosophy -->

  <!-- .p-access -->
  <section class="p-access p-page-about__access">
    <div class="p-access__inner">
      <!-- .c-heading-lv2 -->
      <hgroup class="c-heading-lv2" id="access">
        <h2 class="c-heading-lv2__main">Access</h2>
        <p class="c-heading-lv2__sub">アクセス</p>
      </hgroup>
      <!-- /.c-heading-lv2 -->
      <div class="p-access__text-wrap">
        <p class="p-access__text">〒000-0000</p>
        <p class="p-access__text">〇〇県△△市□□区▲▲町0-0-0</p>
      </div>
      <div class="p-access__map-wrap">
        <iframe class="p-access__map" src="<?php echo esc_url("https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.4880144994904!2d139.69799637608375!3d35.68960667258443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188cd0d6b1ba1f%3A0x1c32a1f1ecacfdd5!2z5paw5a6_6aeF!5e0!3m2!1sja!2sjp!4v1739263560042!5m2!1sja!2sjp"); ?>" title="株式会社Excitecodeの所在地" width="355" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>
  <!-- /.p-access -->

  <!-- .p-company -->
  <section class="p-company p-page-about__company">
    <div class="p-company__inner">
      <!-- .c-heading-lv2 -->
      <hgroup class="c-heading-lv2 p-company__title" id="company">
        <h2 class="c-heading-lv2__main">Company Profile</h2>
        <p class="c-heading-lv2__sub">会社概要</p>
      </hgroup>

      <!-- .c-table -->
      <div class="c-table p-company__table">
        <table class="c-table__inner" aria-label="会社概要">
          <tbody class="c-table__body">
            <tr class="c-table__row">
              <th class="c-table__header">会社名</th>
              <td class="c-table__text">株式会社Excitecode</td>
            </tr>
            <tr class="c-table__row">
              <th class="c-table__header">所在地</th>
              <td class="c-table__text">〒000-0000 〇〇県△△市□□区▲▲町0-0-0</td>
            </tr>
            <tr class="c-table__row">
              <th class="c-table__header">設立</th>
              <td class="c-table__text">2015年12月10日</td>
            </tr>
            <tr class="c-table__row">
              <th class="c-table__header">代表取締役</th>
              <td class="c-table__text">田中　太郎</td>
            </tr>
            <tr class="c-table__row">
              <th class="c-table__header">事業内容</th>
              <td class="c-table__text">
                <ul class="c-table__list">
                  <li class="c-table__item">自動車販売（新車、中古車）古物No.第00000000号</li>
                  <li class="c-table__item">自動車整備（国産車、輸入車）<br class="u-sp-only">陸運局認証工場　認証No.0-0000</li>
                  <li class="c-table__item">輸入車販売（自動車、自動車関連部品）</li>
                  <li class="c-table__item">保険代理店<br class="u-sp-only">（ABC損害保険株式会社、DFG損害保険株式会社）</li>
                </ul>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- .c-table -->
    </div>

    <!-- .c-loop-slider -->
    <div class="c-loop-slider p-company__slider" aria-hidden="true">
      <ul class="c-loop-slider__list">
        <li class="c-loop-slider__item">
          <picture>
            <source
              srcset="<?php echo esc_url(get_theme_file_uri("/images/company.webp")); ?>"
              type="image/webp"
            >
            <source
              srcset="<?php echo esc_url(get_theme_file_uri("/images/company.jpg")); ?>"
            >
            <img
              class="c-loop-slider__img"
              src="<?php echo esc_url(get_theme_file_uri("/images/company.jpg")); ?>"
              alt=""
              width="480"
              height="400"
              loading="lazy"
            >
          </picture>
        </li>
        <li class="c-loop-slider__item">
          <picture>
            <source
              srcset="<?php echo esc_url(get_theme_file_uri("/images/company-02.webp")); ?>"
              type="image/webp"
            >
            <source
              srcset="<?php echo esc_url(get_theme_file_uri("/images/company-02.jpg")); ?>"
            >
            <img
              class="c-loop-slider__img"
              src="<?php echo esc_url(get_theme_file_uri("/images/company-02.jpg")); ?>"
              alt=""
              width="480"
              height="400"
              loading="lazy"
            >
          </picture>
        </li>
        <li class="c-loop-slider__item">
          <picture>
            <source
              srcset="<?php echo esc_url(get_theme_file_uri("/images/company-03.webp")); ?>"
              type="image/webp"
            >
            <source
              srcset="<?php echo esc_url(get_theme_file_uri("/images/company-03.jpg")); ?>"
            >
            <img
              class="c-loop-slider__img"
              src="<?php echo esc_url(get_theme_file_uri("/images/company-03.jpg")); ?>"
              alt=""
              width="480"
              height="400"
              loading="lazy"
            >
          </picture>
        </li>
        <li class="c-loop-slider__item">
          <picture>
            <source
              srcset="<?php echo esc_url(get_theme_file_uri("/images/company-04.webp")); ?>"
              type="image/webp"
            >
            <source
              srcset="<?php echo esc_url(get_theme_file_uri("/images/company-04.jpg")); ?>"
            >
            <img
              class="c-loop-slider__img"
              src="<?php echo esc_url(get_theme_file_uri("/images/company-04.jpg")); ?>"
              alt=""
              width="480"
              height="400"
              loading="lazy"
            >
          </picture>
        </li>
        <li class="c-loop-slider__item">
          <picture>
            <source
              srcset="<?php echo esc_url(get_theme_file_uri("/images/company-05.webp")); ?>"
              type="image/webp"
            >
            <source
              srcset="<?php echo esc_url(get_theme_file_uri("/images/company-05.jpg")); ?>"
            >
            <img
              class="c-loop-slider__img"
              src="<?php echo esc_url(get_theme_file_uri("/images/company-05.jpg")); ?>"
              alt=""
              width="480"
              height="400"
              loading="lazy"
            >
          </picture>
        </li>
        <li class="c-loop-slider__item">
          <picture>
            <source
              srcset="<?php echo esc_url(get_theme_file_uri("/images/company-06.webp")); ?>"
              type="image/webp"
            >
            <source
              srcset="<?php echo esc_url(get_theme_file_uri("/images/company-06.jpg")); ?>"
            >
            <img
              class="c-loop-slider__img"
              src="<?php echo esc_url(get_theme_file_uri("/images/company-06.jpg")); ?>"
              alt=""
              width="480"
              height="400"
              loading="lazy"
            >
          </picture>
        </li>
      </ul>
      <!-- 無限ループ用にスライダーを複製 -->
      <ul class="c-loop-slider__list">
        <li class="c-loop-slider__item">
          <picture>
            <source
              srcset="<?php echo esc_url(get_theme_file_uri("/images/company.webp")); ?>"
              type="image/webp"
            >
            <source
              srcset="<?php echo esc_url(get_theme_file_uri("/images/company.jpg")); ?>"
            >
            <img
              class="c-loop-slider__img"
              src="<?php echo esc_url(get_theme_file_uri("/images/company.jpg")); ?>"
              alt=""
              width="480"
              height="400"
              loading="lazy"
            >
          </picture>
        </li>
        <li class="c-loop-slider__item">
          <picture>
            <source
              srcset="<?php echo esc_url(get_theme_file_uri("/images/company-02.webp")); ?>"
              type="image/webp"
            >
            <source
              srcset="<?php echo esc_url(get_theme_file_uri("/images/company-02.jpg")); ?>"
            >
            <img
              class="c-loop-slider__img"
              src="<?php echo esc_url(get_theme_file_uri("/images/company-02.jpg")); ?>"
              alt=""
              width="480"
              height="400"
              loading="lazy"
            >
          </picture>
        </li>
        <li class="c-loop-slider__item">
          <picture>
            <source
              srcset="<?php echo esc_url(get_theme_file_uri("/images/company-03.webp")); ?>"
              type="image/webp"
            >
            <source
              srcset="<?php echo esc_url(get_theme_file_uri("/images/company-03.jpg")); ?>"
            >
            <img
              class="c-loop-slider__img"
              src="<?php echo esc_url(get_theme_file_uri("/images/company-03.jpg")); ?>"
              alt=""
              width="480"
              height="400"
              loading="lazy"
            >
          </picture>
        </li>
        <li class="c-loop-slider__item">
          <picture>
            <source
              srcset="<?php echo esc_url(get_theme_file_uri("/images/company-04.webp")); ?>"
              type="image/webp"
            >
            <source
              srcset="<?php echo esc_url(get_theme_file_uri("/images/company-04.jpg")); ?>"
            >
            <img
              class="c-loop-slider__img"
              src="<?php echo esc_url(get_theme_file_uri("/images/company-04.jpg")); ?>"
              alt=""
              width="480"
              height="400"
              loading="lazy"
            >
          </picture>
        </li>
        <li class="c-loop-slider__item">
          <picture>
            <source
              srcset="<?php echo esc_url(get_theme_file_uri("/images/company-05.webp")); ?>"
              type="image/webp"
            >
            <source
              srcset="<?php echo esc_url(get_theme_file_uri("/images/company-05.jpg")); ?>"
            >
            <img
              class="c-loop-slider__img"
              src="<?php echo esc_url(get_theme_file_uri("/images/company-05.jpg")); ?>"
              alt=""
              width="480"
              height="400"
              loading="lazy"
            >
          </picture>
        </li>
        <li class="c-loop-slider__item">
          <picture>
            <source
              srcset="<?php echo esc_url(get_theme_file_uri("/images/company-06.webp")); ?>"
              type="image/webp"
            >
            <source
              srcset="<?php echo esc_url(get_theme_file_uri("/images/company-06.jpg")); ?>"
            >
            <img
              class="c-loop-slider__img"
              src="<?php echo esc_url(get_theme_file_uri("/images/company-06.jpg")); ?>"
              alt=""
              width="480"
              height="400"
              loading="lazy"
            >
          </picture>
        </li>
      </ul>
    </div>
    <!-- /.c-loop-slider -->
  </section>
  <!-- /.p-company -->

  <?php get_template_part('template-parts/contact'); ?>
</main>
<!-- .p-page-about -->

<!-- .c-overlay -->
<div class="c-overlay" id="js-overlay"></div>
<!-- /.c-overlay -->

<?php get_footer(); ?>