<?php get_header(); ?>

  <main id="single">
  <?php if(have_posts()): ?>
  <?php while(have_posts()): the_post(); ?>
    <div class="wrapper">
      <div class="pageTtl">
        <h2 class="pageTtl__ttl"><span>B</span>LOG</h2>
        <p class="pageTtl__sub">ブログ</p>
      </div>
      <div class="content">
        <!-- コンテンツ -->
        <p class="content__info">
          <?php the_time(get_option('date_format')); ?>
          <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
          <?php
          $terms = get_the_terms($post->ID, 'blog_cat');
          if($terms):
            foreach($terms as $term):
              echo $term->name; //ターム名
            endforeach;
          endif;
          ?>
        </p>
        <p class="content__cap"><?php the_title(); ?></p>
        <?php if (has_post_thumbnail()) : ?>
        <p class="content__pic">
          <?php the_post_thumbnail('full'); ?>
        </p>
        <?php endif; ?>

        <!-- ユーザー編集エリア -->
        <div class="content__area">
          <?php the_content(); ?>
        </div>

        <ul class="content__nav">
          <li class="content__prev">
            <?php previous_post_link('%link', 'PREV'); ?>
          </li>
          <li class="content__next">
            <?php next_post_link('%link', 'NEXT'); ?>
          </li>
        </ul>
      </div>
      <div class="pageBg">
        <div class="pageBg__img--01"></div>
        <div class="pageBg__img--02"></div>
      </div>
    </div>
  <?php endwhile; ?>
  <?php endif; ?>
  </main>

<?php get_footer(); ?>