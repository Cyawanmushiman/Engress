<?php 
/*
Template Name: お問い合わせ完了
*/
get_header();
?>
<?php
 if(have_posts()) :
   while(have_posts()) :the_post();
?>
<section class="thanks">
  <div class="thanks__wrapper">
    <div class="thanks__text"><?php the_content(); ?></div>
    <a href="<?php echo esc_url(home_url('/')); ?>" class="thanks__homeLink">ホームへ戻る</a>
  </div>
</section>
<?php
   endwhile;
  endif;
?>


<?php get_footer(); ?>