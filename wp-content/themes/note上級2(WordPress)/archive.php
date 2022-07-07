<?php get_header(); ?>
<section class="blogArchive">
  <h1 class="blogArchive__title">
    <?php if(is_home()): ?>
      新着一覧
    <?php elseif(is_category()): ?>
      <?php echo single_cat_title(); ?>一覧
    <?php endif; ?>
  </h1>


  <div class="blogArchive__wrapper">
    <?php
    if(have_posts()) :
      while(have_posts()) :the_post();
    ?>

    <a href="<?php the_permalink(); ?>" class="blogArchive__media">
      <div class="blogArchive__image">
        <?php echo get_thumbnail(); ?>
        <?php $terms = get_the_terms($post->ID, 'category'); ?>
        <span class="blogArchive__label"><?php echo $terms[0]->name; ?></span>
      </div>
      <div class="blogArchive__texts">
        <p class="blogArchive__date"><?php the_time('Y-m-d'); ?></p>
        <h2 class="blogArchive__mediaTitle"><?php the_title(); ?></h2>
        <div class="blogArchive__text"><?php the_excerpt(); ?></div>
      </div>
    </a>

    <?php
      endwhile;
      endif;
    ?>

  </div>
</section>

<!-- <div class="blogArchive__pageNavi">
</div> -->
<?php the_posts_pagination( array(
  'mid_size' => 2,
  'prev_next' => false,
));
?>


<section class="blogArchiveCTA">
  <div class="cta">
    <p class="cta__text">まずは無料で資料請求から</p>
    <a href="<?php echo esc_url(home_url('contact')); ?>" class="button cta__button">資料請求</a>
    <a href="<?php echo esc_url(home_url('contact')); ?>" class="cta__contact">お問い合わせ</a>
  </div>
  <p class="contactLabel">
    <span class="contactLabel__text">お電話でのお問い合わせはこちら　</span>
    <span class="contactLabel__tel">0123-456-7890</span>　
    <span class="contactLabel__hour">平日 08:00~20:00</span>
  </p>
</section>

<?php get_footer(); ?>