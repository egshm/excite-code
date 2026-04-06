<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php if (is_404()) : ?>
	  <meta http-equiv="refresh" content=" 3; url=<?php echo esc_url(home_url("")); ?>">
  <?php endif; ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <!-- .l-header -->
  <header class="l-header" id="js-header">
    <div class="l-header__inner">
      <!-- .c-logo -->
      <p class="c-logo l-header__logo">
        <a href="<?php echo esc_url(home_url("/")) ?>" class="c-logo__link">
          <img
            class="c-logo__img"
            id="js-logo"
            src="<?php echo esc_url(get_theme_file_uri("/images/logo-b.png")); ?>"
            data-logo-b="<?php echo esc_url(get_theme_file_uri("/images/logo-b.png")); ?>"
            data-logo-w="<?php echo esc_url(get_theme_file_uri("/images/logo-w.png")); ?>"
            alt="ExciteCodeのロゴ | トップページを開く"
            width="115"
            height="80"
          >
        </a>
      </p>
      <!-- /.c-logo -->

      <!-- .c-hamburger -->
      <button id="js-hamburger" class="c-hamburger l-header__hamburger" aria-label="メニューを開く" aria-controls="spmenu" aria-expanded="false">
        <span class="c-hamburger__line"></span>
      </button>
      <!-- /.c-hamburger -->

      <!-- .c-menu -->
      <nav aria-label="メインメニュー" class="c-menu l-header__menu">
        <ul class="c-menu__list">
          <li class="c-menu__item">
            <a href="<?php echo esc_url(home_url("/")) ?>" class="c-menu__link">Top</a>
          </li>
          <li class="c-menu__item">
            <a href="<?php echo esc_url(home_url("/about")) ?>" class="c-menu__link">About</a>
          </li>
          <li class="c-menu__item">
            <a href="<?php echo esc_url(home_url("/service")) ?>" class="c-menu__link">Service</a>
          </li>
          <li class="c-menu__item">
            <a href="<?php echo esc_url(home_url("/works")) ?>" class="c-menu__link">Works</a>
          </li>
          <li class="c-menu__item">
            <a href="<?php echo esc_url(home_url("/news")) ?>" class="c-menu__link">News</a>
          </li>
        </ul>
      </nav>
      <!-- /.c-menu -->

      <a href="<?php echo esc_url(home_url("/contact")) ?>" class="l-header__btn">
        <svg class="l-header__btn-img" aria-hidden="true" width="15.995" height="12.796" viewBox="0 0 15.995 12.796">
          <path d="M17.4,6H4.6A1.6,1.6,0,0,0,3.008,7.6L3,17.2a1.6,1.6,0,0,0,1.6,1.6H17.4A1.6,1.6,0,0,0,19,17.2V7.6A1.6,1.6,0,0,0,17.4,6Zm0,11.2H4.6v-8l6.4,4,6.4-4ZM11,11.6l-6.4-4H17.4Z" transform="translate(-3 -6)" fill="currentColor"/>
        </svg>
        Contact
      </a>

      <!-- .p-spmenu -->
      <nav aria-label="スマホ用メニュー" aria-hidden="true" id="spmenu" class="p-spmenu l-header__spmenu js-spmenu">
        <div class="p-spmenu__inner">
          <ul class="p-spmenu__list">
            <li class="p-spmenu__item">
              <a href="<?php echo esc_url(home_url("/")) ?>" class="p-spmenu__link">Top</a>
            </li>
            <li class="p-spmenu__item">
              <a href="<?php echo esc_url(home_url("/about")) ?>" class="p-spmenu__link">About</a>
            </li>
            <li class="p-spmenu__item">
              <a href="<?php echo esc_url(home_url("/service")) ?>" class="p-spmenu__link">Service</a>
            </li>
            <li class="p-spmenu__item">
              <a href="<?php echo esc_url(home_url("/works")) ?>" class="p-spmenu__link">Works</a>
            </li>
            <li class="p-spmenu__item">
              <a href="<?php echo esc_url(home_url("/news")) ?>" class="p-spmenu__link">News</a>
            </li>
            <li class="p-spmenu__item">
              <a href="<?php echo esc_url(home_url("/contact")) ?>" class="p-spmenu__link">Contact</a>
            </li>
            <li class="p-spmenu__item">
              <a href="#!" class="p-spmenu__link">プライバシーポリシー</a>
            </li>
          </ul>
          <!-- .c-icons -->
          <ul class="c-icons p-spmenu__icons">
            <li class="c-icons__item">
              <a href="#!" class="c-icons__link">
                <img src="<?php echo esc_url(get_theme_file_uri("/images/facebook.png")); ?>" alt="Facebookの公式ページを開く" class="c-icons__img" width="22" height="22">
              </a>
            </li>
            <li class="c-icons__item">
              <a href="#!" class="c-icons__link">
                <img src="<?php echo esc_url(get_theme_file_uri("/images/twitter.png")); ?>" alt="Twitterの公式ページを開く" class="c-icons__img" width="19" height="19">
              </a>
            </li>
            <li class="c-icons__item">
              <a href="#!" class="c-icons__link">
                <img src="<?php echo esc_url(get_theme_file_uri("/images/instagram.png")); ?>" alt="Instagramの公式ページを開く" class="c-icons__img" width="22" height="18">
              </a>
            </li>
          </ul>
          <!-- /.c-icons -->
        </div>
      </nav>
      <!-- /.p-spmenu -->
    </div>
  </header>
  <!-- /.l-header -->
