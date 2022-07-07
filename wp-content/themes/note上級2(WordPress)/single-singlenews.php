<?php 
/*
Template Name: お知らせ詳細ページ
Template Post Type: custom_news
*/
?>
<?php get_header(); ?>
<section class="news">
  <div class="news__wrapper">
    <?php
    if(have_posts()) :
      while(have_posts()) :the_post();
    ?>
    <h1 class="news__title"><?php the_title(); ?></h1>
    <p class="news__date"><?php the_time('Y-m-d'); ?></p>
    <div class="news__content">
      <?php the_content(); ?>
    </div>
    <?php
      endwhile;
    endif;
    ?>
  </div>
</section>

<section class="newsCTA">
  <div class="cta">
    <p class="cta__text">まずは無料で資料請求から</p>
    <a href="<?php echo esc_url(home_url('contact')); ?>" class="button cta__button">資料請求</a>
    <a href="<?php echo esc_url(home_url('contact')); ?>" class="cta__contact">お問い合わせ</a>
  </div>
  <p class="contactLabel">
    <span class="contactLabel__text">お電話でのお問い合わせはこちら　</span>
    <span class="contactLabel__tel">0123-456-7890</span>　
    <span class="contactLabel__hour">平日 08:00~20:00</span>
  </p>
</section>

<?php get_footer(); ?>