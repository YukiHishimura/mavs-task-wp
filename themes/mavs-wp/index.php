<?php get_header(); ?>

  <main id="notFound">
    <div class="wrapper">
      <div class="pageTtl">
        <h2 class="pageTtl__ttl"><span>N</span>OT FOUND</h2>
        <p class="pageTtl__sub">ページが見つかりません</p>
      </div>
      <div class="message">
        <p class="message__txt">
          お探しのページは、削除されたか、名前が変更された可能性があります。<br>
          直接アドレスを入力された場合は、アドレスが正しく入力されているかもう一度ご確認ください。
        </p>
        <div class="message__btn">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="message__link">トップページへ</a>
        </div>
      </div>
      <div class="pageBg">
        <div class="pageBg__img--01"></div>
        <div class="pageBg__img--02"></div>
      </div>
    </div>
  </main>

<?php get_footer(); ?>