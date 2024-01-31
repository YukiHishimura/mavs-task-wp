<?php get_header(); ?>

  <main id="complete">
    <div class="wrapper">
      <div class="pageTtl">
        <h2 class="pageTtl__ttl"><span>C</span>OMPLETE</h2>
        <p class="pageTtl__sub">お問い合わせ完了</p>
      </div>
      <div class="thanks">
        <p class="thanks__txt">
          お問い合わせ頂きありがとうございました。<br>
          担当よりご連絡致しますので、しばらくお待ち下さい。<br class="thanks__br">
          2日営業日を過ぎても返信がない場合は、お手数ですがもう1度お問合せください。
        </p>
        <div class="thanks__btn">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="thanks__link">トップページへ</a>
        </div>
      </div>
      <div class="pageBg">
        <div class="pageBg__img--01"></div>
        <div class="pageBg__img--02"></div>
      </div>
    </div>
  </main>

<?php get_footer(); ?>