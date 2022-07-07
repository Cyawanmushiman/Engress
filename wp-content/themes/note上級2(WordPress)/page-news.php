<?php get_header(); ?>
<section class="newsArchive">
  <h1 class="newsArchive__title">
  <?php echo get_the_title(); ?>一覧</h1>
  <div class="newsArchive__wrapper">
    <?php
      $paged = get_query_var('paged')? get_query_var('paged') : 1;
      $args = array(
        'posts_per_page'=>10,//取得したい記事数
        'post_type'=>'custom_news',//取得したい投稿タイプ！
        'paged' => $paged,
      );
      $custom_news_pages = new WP_Query($args);//条件を指定した$argsをnew WP_Query()の引数に渡すことでサブループを作成する。作ったサブループを変数に代入する。
      if($custom_news_pages->have_posts()):
        while($custom_news_pages->have_posts()) : $custom_news_pages->the_post();
    ?>
      <a href="<?php the_permalink(); ?>" class="newsArchive__permalink">
        <p class="newsArchive__date"><?php the_time('Y-m-d'); ?></p>
        <h3 class="newsArchive__text"><?php the_title(); ?></h3>
      </a>
    <?php
      endwhile;
      wp_reset_postdata();
    endif;
    ?>
  </div>
</section>

<div class="newsArchive__pageNavi">
  <div class="nav-links">
    <?php //ページリスト表示処理
    global $wp_rewrite;
    $paginate_base = get_pagenum_link(1);
    if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
      $paginate_format = '';
      $paginate_base = add_query_arg('paged','%#%');
    }else{
      $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
      user_trailingslashit('page/%#%/','paged');
      $paginate_base .= '%_%';
    }
    echo paginate_links(array(
      'total' => $custom_news_pages->max_num_pages,
      'mid_size' => 2,
      'current' => ($paged ? $paged : 1),
      'prev_next' => false,
    )); ?>
  </div>
</div>

<section class="newsArchiveCTA">
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