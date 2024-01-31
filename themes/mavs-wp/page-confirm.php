<?php get_header(); ?>

  <main id="confirm">
    <div class="wrapper">
      <div class="pageTtl">
        <h2 class="pageTtl__ttl"><span>C</span>ONFIRM</h2>
        <p class="pageTtl__sub">お問い合わせ内容確認</p>
      </div>
      <div class="contactForm">
        <p class="contactForm__txt">
          内容に間違いがないかご確認をお願いします。
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