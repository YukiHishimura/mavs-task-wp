
  <footer class="footer">
    <div class="footer__wrapper">
      <nav class="fnav">
        <ul class="fnav__nav">
          <li class="fnav__list"><a href="<?php echo esc_url(home_url('/')); ?>" class="fnav__link">TOP</a></li>
          <li class="fnav__list"><a href="#" class="fnav__link">ABOUT</a></li>
          <li class="fnav__list"><a href="#" class="fnav__link">WORKS</a></li>
          <li class="fnav__list"><a href="#" class="fnav__link">SERVICE</a></li>
          <li class="fnav__list"><a href="#" class="fnav__link">MEMBER</a></li>
          <li class="fnav__list"><a href="#" class="fnav__link">COMPANY</a></li>
          <li class="fnav__list"><a href="<?php echo esc_url(home_url('/')); ?>blog/" class="fnav__link">BLOG</a></li>
          <li class="fnav__list"><a href="#" class="fnav__link">NEWS</a></li>
        </ul>
      </nav>
      <div class="footer__container">
        <div class="footer__box">
          <div class="footer__btn"><a href="<?php echo esc_url(home_url('/')); ?>contact/" class="footer__btnLink">CONTACT</a></div>
          <div class="footer__btn"><a href="#" class="footer__btnLink">RECRUIT</a></div>
        </div>
        <p class="footer__logo"><a href="<?php echo esc_url(home_url('/')); ?>" class="footer__link"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/footer_logo.svg" alt="株式会社マーベリックス" class="footer__img"></a></p>
        <p class="footer__copy"><small class="footer__small">&copy;Mavericks Inc.</small></p>
      </div>
    </div>
    <div id="footer__goTop" class="footer__goTop"></div>
  </footer>

  <?php wp_footer(); ?>
  <?php if(is_archive() || is_tax()) : ?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/blog.js"></script>
  <?php endif; ?>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/script.js"></script>
</body>

</html>