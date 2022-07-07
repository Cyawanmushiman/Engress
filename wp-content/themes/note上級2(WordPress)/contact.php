<?php 
/*
Template Name: コンタクトページ用
*/
get_header();
?>
<?php
 if(have_posts()) :
   while(have_posts()) :the_post();
?>
<section class="contact">
  <div class="contact__wrapper">
    <div class="contact__text"><?php the_content(); ?></div>
  </div>
</section>
<?php
   endwhile;
  endif;
?>
<?php get_footer(); ?>