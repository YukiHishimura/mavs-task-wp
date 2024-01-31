<?php get_header(); ?>

  <main id="contact">
    <div class="wrapper">
      <div class="pageTtl">
        <h2 class="pageTtl__ttl"><span>C</span>ONTACT</h2>
        <p class="pageTtl__sub">お問い合わせ</p>
      </div>
      <div class="contactForm">
        <p class="contactForm__txt">
          株式会社マーベリックスへのお問い合わせページです。<br class="contactForm__br">
          プライバシーポリシーをご確認の上、お気軽にお問い合わせください。
        </p>
        <!-- お問い合わせフォーム -->
        <?php the_content(); ?>
      </div>
      <div class="pageBg">
        <div class="pageBg__img--01"></div>
        <div class="pageBg__img--02"></div>
      </div>
    </div>
  </main>

<?php get_footer(); ?>