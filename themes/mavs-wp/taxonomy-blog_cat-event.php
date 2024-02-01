<?php get_header(); ?>

  <main id="archive">
    <div class="wrapper">
      <div class="pageTtl">
        <h2 class="pageTtl__ttl"><span>B</span>LOG</h2>
        <p class="pageTtl__sub">ブログ</p>
      </div>
      <div id="category" class="category">
        <p class="category__name">EVENT</p>
        <div id="category__btn" class="category__btn">CATEGORY</div>
        <ul id="category__ul" class="category__ul">
          <li><a href="<?php echo esc_url(home_url('/')); ?>blog/">ALL</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>blog_cat/technology/">TECHNOLOGY</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>blog_cat/curry/">CURRY</a></li>
          <li class="current-cat"><a href="<?php echo esc_url(home_url('/')); ?>blog_cat/event/">EVENT</a></li>
        </ul>
      </div>
      <div class="archive">
        <?php
        $term_object = get_queried_object();
        $term_slug = $term_object->slug;
        if (wp_is_mobile()) {
          $num = 6;
        } else {
          $num = 12;
        }
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $wp_query = new WP_Query();
        $my_posts = array(
          'post_type' => 'blog',
          'posts_per_page' => $num,
          'paged' => $paged,
          'taxonomy' => 'blog_cat',
          'term' => $term_slug,
        );

        $wp_query->query($my_posts);
        if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
            $obj = get_post_type_object($post->post_type); // 投稿タイプ情報を取得
            $terms = get_the_terms($post->ID, 'blog_cat');
        ?>
        <!-- ループさせるコンテンツ -->
        <div class="archive__slide">
          <a href="<?php the_permalink(); ?>" class="archive__link">
            <p class="archive__pic">
              <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('thumbnail'); ?>
              <?php else: ?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/blog/tmb.jpg" alt="サムネイル画像" class="archive__img">
              <?php endif; ?>
            </p>
            <div class="archive__box">
              <p class="archive__info">
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
              <p class="archive__cap"><?php the_title(); ?></p>
            </div>
          </a>
        </div>
        
        <?php
        endwhile;
        endif;
        ?>
      </div>
      <!-- PageNavi -->
      <div class="pagenation">
        <?php if (function_exists('wp_pagenavi')) {
          wp_pagenavi(array('query' => $wp_query));
        } ?>
      </div>

      <div class="pageBg">
        <div class="pageBg__img--01"></div>
        <div class="pageBg__img--02"></div>
      </div>
    </div>
    <?php wp_reset_postdata(); ?>
  </main>

<?php get_footer(); ?>