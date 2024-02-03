<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,user-scalable=yes" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- title、descriptionはプラグインで設定 -->
  <link rel="stylesheet" href="https://use.typekit.net/zte7fky.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Allura&family=M+PLUS+1:wght@700&family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/common.css" rel="stylesheet" />
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css" rel="stylesheet" />
<?php wp_head(); ?>
</head>

<body>
  <?php if(is_front_page()): ?>
    <div class="loader">
      <div class="loader__logo"></div>
    </div>
  <?php endif; ?>
  <header class="header">
    <h1 class="header__ttl"><a href="<?php echo esc_url(home_url('/')); ?>" class="header__ttlLink"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/mavs_logo.svg" alt="株式会社マーベリックス" id="header__img" class="header__img"></a></h1>
    <div id="menuBtn" class="menuBtn">
      <span id="menuBtn__top" class="menuBtn__top"></span>
      <span id="menuBtn__middle" class="menuBtn__middle"></span>
      <span id="menuBtn__bottom" class="menuBtn__bottom"></span>
    </div>
    <nav id="gnav" class="gnav">
      <div class="gnav__pc">
        <ul class="gnav__nav">
          <li class="gnav__list"><a href="#" class="gnav__link">ABOUT</a></li>
          <li class="gnav__list"><a href="#" class="gnav__link">SERVICE</a></li>
          <li class="gnav__list"><a href="#" class="gnav__link">NEWS</a></li>
          <li class="gnav__list"><a href="<?php echo esc_url(home_url('/')); ?>blog/" class="gnav__link">BLOG</a></li>
          <li class="gnav__list"><a href="#" class="gnav__link">COMPANY</a></li>
          <li class="gnav__list"><a href="#" class="gnav__link">RECRUIT</a></li>
          <li class="gnav__list"><a href="<?php echo esc_url(home_url('/')); ?>contact/" class="gnav__link">CONTACT</a></li>
        </ul>
      </div>
      <div class="gnav__sp">
        <ul class="gnav__nav">
          <li class="gnav__list"><a href="<?php echo esc_url(home_url('/')); ?>" class="gnav__link">TOP</a></li>
          <li class="gnav__list"><a href="#" class="gnav__link">ABOUT</a></li>
          <li class="gnav__list"><a href="#" class="gnav__link">WORKS</a></li>
          <li class="gnav__list"><a href="#" class="gnav__link">SERVICE</a></li>
          <li class="gnav__list"><a href="#" class="gnav__link">MEMBER</a></li>
          <li class="gnav__list"><a href="#" class="gnav__link">COMPANY</a></li>
          <li class="gnav__list"><a href="<?php echo esc_url(home_url('/')); ?>blog/" class="gnav__link">BLOG</a></li>
          <li class="gnav__list"><a href="#" class="gnav__link">NEWS</a></li>
        </ul>
        <div class="gnav__box">
          <div class="gnav__btn"><a href="<?php echo esc_url(home_url('/')); ?>contact/" class="gnav__btnLink">CONTACT</a></div>
          <div class="gnav__btn"><a href="#" class="gnav__btnLink">RECRUIT</a></div>
        </div>
      </div>
    </nav>
  </header>
