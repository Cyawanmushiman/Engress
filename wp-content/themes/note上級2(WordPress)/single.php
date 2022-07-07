<?php get_header(); ?>
<section class="blog">
  <div class="blog__wrapper">
    <div class="main blog__main">
      <?php 
      $term = get_the_terms($post->ID,'category');
      ?>
      <div class="main__label"><?php echo $term[0]->name; ?></div>
      <?php 
      if(have_posts()) :
        while(have_posts()) :the_post();
      ?>

      <h2 class="main__title"><?php the_title(); ?></h2>
      <div class="main__profile">
        <?php wp_social_bookmarking_light_output_e(null, get_permalink(), the_title("", "", false)); ?>
        <span class="main__date"><?php the_time('Y-m-d'); ?></span>
      </div>
      <div class="main__image">
        <?php
        if(has_post_thumbnail()):
          the_post_thumbnail();
        else:
          echo '<img src="'.get_template_directory_uri(). '/img/jpeg/グループ 510@2x.jpg" />'; //シングル・ダブルクォートが全角になっているので変更する。
        endif;
        ?>
      </div>
      <div class="main__content">
        <?php the_content(); ?>
      </div>

      <?php
        endwhile;
      endif;
      ?>
      <div class="main__recommend">
        <h3 class="main__recommendTitle">おすすめの記事</h3>
        <?php
          $args = array(
            'post_type'=>'post',//取得したい投稿タイプ
            'posts_per_page'=>3,//取得したい記事数
            'tag_name'=>'pickup',//取得するカテゴリーの名前
            'ignore_sticky_posts' => true,
          );
          $blog_pages = new WP_Query($args);//条件を指定した$argsをnew WP_Query()の引数に渡すことでサブループを作成する。作ったサブループを変数に代入する。
          if($blog_pages->have_posts()):
            while($blog_pages->have_posts()) : $blog_pages->the_post();
        ?>
        <?php 
        $term = get_the_terms($post->ID,'category');
        ?>
        <a href="<?php the_permalink(); ?>" class="main__permalink">
          <div class="main__recommendImage">
            <?php echo get_thumbnail(); ?>
            <span class="main__recommendLabel"><?php echo $term[0]->name; ?></span>
          </div>
          <div class="main__recommendTexts">
            <p class="main__recommendDate"><?php the_time('Y-m-d'); ?></p>
            <p class="main__excerpt"><?php the_title(); ?></p>
          </div>
        </a>
        <?php
          endwhile;
          wp_reset_postdata();
        endif;
        ?>
      </div>
    </div>

    <div class="aside blog__aside">
      <h3 class="aside__title">関連記事</h3>
        <?php
        $term = get_the_terms($post->ID,'category');
        $args = array(
          'posts_per_page'=>3,//取得したい記事数
          'post_type'=>'post',//取得したい投稿タイプ
          'category_name'=>$term[0]->slug,//取得するカテゴリーの名前
        );
        $sameCategory_pages = new WP_Query($args);
        if($sameCategory_pages->have_posts()):
          while($sameCategory_pages->have_posts()) : $sameCategory_pages->the_post();
        ?>

        <a href="<?php the_permalink(); ?>" class="aside__blogLink">
          <div class="aside__image"><?php echo get_thumbnail(); ?></div>
          <p class="aside__text"><?php the_title(); ?></p>
        </a>

        <?php
          endwhile;
          wp_reset_postdata();
        endif;
        ?>
      <h3 class="aside__title--category">カテゴリー</h3>
        <ul class="aside__menu">
          <?php 
          $terms = get_terms('category');//タクソノミーが「category」のタームのオブジェクトを全て取得する
          foreach($terms as $term):
          ?>
            <li class="aside__item"><a href="<?php echo get_term_link($term); ?>" class="aside__link"><?php echo $term->name; ?></a></li>
          <?php endforeach; ?>
        </ul>
    </div>
  </div>
</section>

<section class="blogCTA">
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