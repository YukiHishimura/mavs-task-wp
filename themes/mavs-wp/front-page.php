<?php get_header(); ?>

  <main id="top" class="main">
    <div class="mv">
      <div class="mv__imgBox slideInImg">
        <div class="mv__img--01"></div>
        <div class="mv__img--02"></div>
        <div class="mv__img--03"></div>
        <div class="mv__img--04"></div>
      </div>
      <div class="mv__txtBox slideInCopy">
        <p class="mv__catchcopy--en"><span>U</span>NION</p>
        <p class="mv__catchcopy--en">CREATE</p>
        <p class="mv__catchcopy--en">STRENGTH</p>
        <p class="mv__catchcopy--ja">最高のチームで、最高の価値を提供する</p>
      </div>
      <div class="mv__roundIcon rotateTxt"></div>
    </div>
    <section id="about" class="about scrollTrigger">
      <h2 class="about__ttl">
        <div class="about__ttlInner">ABOUT</div>
      </h2>
      <div class="about__box hidden">
        <p class="about__txt">マーベリックスは<br class="about__br">技術力とコミュニケーションスキルを<br class="about__br">兼ね備えたエンジニア集団。</p>
        <p class="about__txt">それぞれの個性を活かしチームで取り組む<br class="about__br">からこそ最高の価値を提供できる。</p>
        <p class="about__txt">変化を恐れず己を磨き、挑戦を続けながら<br class="about__br">明日の世界を創造していく。</p>
      </div>
      <div class="about__btn hidden"><a href="#" class="about__btnLink">READ MORE</a></div>
      <div class="about__bgBox">
        <div class="about__bgImg--01"></div>
        <div class="about__bgImg--02"></div>
      </div>
    </section>
    <section id="service" class="service scrollTrigger">
      <div class="service__box">
        <h2 class="service__ttl">
          <div class="service__ttlInner"><span>S</span>ERVICE</div>
        </h2>
        <p class="service__sub hidden">サービス</p>
        <p class="service__txt hidden">
          マーベリックスは経験豊富なメンバーによるサイト制作やシステム開発を得意としています。さらに業務に柔軟に対応できる「リモートラボ」なら、お客様の開発を効率的に進めることができます。
        </p>
        <div class="service__btn hidden"><a href="#" class="service__btnLink">READ MORE</a></div>
      </div>
      <div class="service__box hidden">
        <p class="service__pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/top/service.jpg" alt="業務風景" class="service__img"></p>
      </div>
    </section>
    <section id="blog" class="blog scrollTrigger">
      <div class="blog__box">
        <h2 class="blog__ttl">
          <div class="blog__ttlInner"><span>B</span>LOG</div>
        </h2>
        <p class="blog__sub hidden">ブログ</p>
      </div>
      <!-- Swiper本体 -->
      <div class="swiper blog-swiper">
        <!-- Swiperラッパー -->
        <div class="swiper-wrapper blog-swiper__wrapper">
          <?php
          $wp_query = new WP_Query();
          $my_posts = array(
            'post_type' => 'blog',
            'posts_per_page' => 4,
          );

          $wp_query->query($my_posts);
          if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
              $obj = get_post_type_object($post->post_type); // 投稿タイプ情報を取得
              $terms = get_the_terms($post->ID, 'blog_cat');
          ?>
          <!-- スライド -->
          <div class="swiper-slide blog-swiper__slide">
            <a href="<?php the_permalink(); ?>" class="blog__link">
              <p class="blog__pic">
                <?php if (has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('thumbnail'); ?>
                <?php else: ?>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/top/tmb.jpg" alt="サムネイル画像" class="blog__img">
                <?php endif; ?>
              </p>
              <p class="blog__info">
                <?php the_time(get_option('date_format')); ?>
                <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                <?php
                if($terms):
                  foreach($terms as $term):
                    echo $term->name; //ターム名
                  endforeach;
                endif;
                ?>
              </p>
              <p class="blog__cap"><?php the_title(); ?></p>
            </a>
          </div>

          <?php
          endwhile;
          endif;
          ?>
          <?php wp_reset_postdata(); ?>
        </div>
      </div>
      <div class="blog__btn hidden"><a href="<?php echo esc_url(home_url('/')); ?>blog/" class="blog__btnLink">READ MORE</a></div>
    </section>
    <section id="member" class="member scrollTrigger">
      <div class="member__box">
        <h2 class="member__ttl">
          <div class="member__ttlInner"><span>M</span>EMBER</div>
        </h2>
        <p class="member__sub hidden">メンバー</p>
      </div>
      <picture class="member__pic hidden">
        <source media="(max-width: 769px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/top/member_sp.jpg">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/top/member_pc.jpg" alt="オフィス風景" class="member__img">
      </picture>
      <p class="member__txt hidden">個性あるマーベリックスの仲間をご紹介します！</p>
      <div class="member__btn hidden"><a href="#" class="member__btnLink">READ MORE</a></div>
    </section>
    <div class="loopTxt">
      <div class="loopTxt__wrapper">
        <div class="loopTxt__img slideTxt"></div>
        <div class="loopTxt__img slideTxt"></div>
      </div>
    </div>
    <div id="recruit" class="recruit hidden scrollTrigger">
      <a href="#" class="recruit__link">
        <div class="recruit__wrapper hidden">
          <p class="recruit__catchcopy">
            CLIMB TO<br class="recruit__br--sp"> THE TOP <br class="recruit__br--pc">
            WITH MARVERICKS
          </p>
          <p class="recruit__txt">
            マーベリックスでは一緒に働く<br class="recruit__br--sp">メンバーを募集しています。<br>
            まずはカレーを食べに行きましょう！
          </p>
          <div class="recruit__btn">
            <span class="recruit__btnTxt">READ MORE</span>
          </div>
        </div>
      </a>
    </div>
    <section id="news" class="news scrollTrigger">
      <div class="news__box">
        <h2 class="news__ttl">
          <div class="news__ttlInner"><span>N</span>EWS</div>
        </h2>
        <p class="news__sub hidden">ニュース</p>
      </div>
      <ul class="news__ul hidden">
        <li class="news__list">
          <a href="#" class="news__link">
            <p class="news__date">2022.05.01</p>
            <p class="news__cap">ホームページをリニューアルしました</p>
          </a>
        </li>
        <li class="news__list">
          <a href="#" class="news__link">
            <p class="news__date">2022.05.01</p>
            <p class="news__cap">ホームページをリニューアルしました</p>
          </a>
        </li>
        <li class="news__list">
          <a href="#" class="news__link">
            <p class="news__date">2022.05.01</p>
            <p class="news__cap">ホームページをリニューアルしました</p>
          </a>
        </li>
      </ul>
      <div class="news__btn hidden"><a href="#" class="news__btnLink">READ MORE</a></div>
    </section>
  </main>

<?php get_footer(); ?>