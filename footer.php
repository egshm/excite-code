<!-- .l-footer -->
<footer class="l-footer">
  <!-- .l-inner -->
  <div class="l-inner l-footer__inner">
    <ul class="l-footer__menu">
      <li class="l-footer__menu-item">
        <a href="<?php echo esc_url(home_url("/")) ?>" class="l-footer__link">Top</a>
      </li>
      <li class="l-footer__menu-item">
        <a href="<?php echo esc_url(home_url("/about")) ?>" class="l-footer__link">About</a>
      </li>
      <li class="l-footer__menu-item">
        <a href="<?php echo esc_url(home_url("/service")) ?>" class="l-footer__link">Service</a>
      </li>
      <li class="l-footer__menu-item">
        <a href="<?php echo esc_url(home_url("/works")) ?>" class="l-footer__link">Works</a>
      </li>
      <li class="l-footer__menu-item">
        <a href="<?php echo esc_url(home_url("/news")) ?>" class="l-footer__link">News</a>
      </li>
      <li class="l-footer__menu-item">
        <a href="<?php echo esc_url(home_url("/contact")) ?>" class="l-footer__link">Contact</a>
      </li>
      <li class="l-footer__menu-item">
        <a href="#!" class="l-footer__link">プライバシーポリシー</a>
      </li>
    </ul>
    <div class="l-footer__info">
      <div class="l-footer__icon-wrap">
        <!-- .c-logo -->
        <p class="c-logo l-footer__logo">
          <a href="<?php echo esc_url(home_url("/")) ?>" class="c-logo__link">
            <img class="c-logo__img" src="<?php echo esc_url(get_theme_file_uri("/images/logo-w.png")); ?>" alt="ExciteCodeのロゴ | トップページを開く" width="115" height="80">
          </a>
        </p>
        <!-- /.c-logo -->

        <!-- .c-icons -->
        <ul class="c-icons l-footer__icons">
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
      <small class="l-footer__copyright" lang="en">&copy;<?php echo wp_date("Y");?> ExciteCode Automobile</small>
    </div>
    <!-- /.l-inner -->
  </div>
</footer>
<!-- /.l-footer -->
<?php wp_footer(); ?>
</body>

</html>