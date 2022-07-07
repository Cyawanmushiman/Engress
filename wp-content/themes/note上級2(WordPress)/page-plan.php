<?php 
/*
Template Name: コース・料金ページ用
*/
get_header();
?>
<?php
 if(have_posts()) :
   while(have_posts()) :the_post();
?>
<section class="planModel">
  <div class="planWrapper">
    <h1 class="planModel__title">料金体系</h1>
    <div class="planModel__blocks">
      <div class="planModel__admission">入会金 39,800円</div>
      <div class="planModel__monthMoney">月額費用</div>
    </div>
    <div class="planModel__text"><?php the_content(); ?></div>
  </div>
</section>
<?php
   endwhile;
  endif;
?>

<section class="planTable">
  <div class="planWrapper">
    <h2 class="planTable__title">料金表</h2>
    <div class="scrollWrapper  js-scrollable">

      <div class="planDatas">
        <div class="planDatas__blocks">
          <h3 class="planDatas__title--basic">基礎プラン</h3>
          <div class="planDatas__texts">
            <p class="planDatas__price"><?php the_field('money1');?>円~</p>
            <p class="basic--monthry">*月額（税抜価格）</p>
            <p class="basic--curriculum">カリキュラム作成</p>
            <p class="basic--support">TOEFL学習サポート</p>
            <p class="basic--video">週一回のビデオMTG</p>
          </div>
        </div>
  
        <div class="planDatas__blocks">
          <h3 class="planDatas__title">演習プラン</h3>
          <div class="planDatas__texts">
            <p class="planDatas__price"><?php the_field('money2');?>円~</p>
            <p class="exercise--monthry">*月額（税抜価格）</p>
            <p class="exercise--curriculum">カリキュラム作成</p>
            <p class="exercise--support">TOEFL学習サポート</p>
            <p class="exercise--video">週一回のビデオMTG</p>
            <p class="exercise--test">月二回の模試（解説付き）</p>
          </div>
        </div>
  
        <div class="planDatas__blocks">
          <h3 class="planDatas__title--recommend">おすすめ<br>志望校対策プラン</h3>
          <div class="planDatas__texts">
            <p class="planDatas__price--recommend"><?php the_field('money3');?>円~</p>
            <p class="recommend--monthry">*月額（税抜価格）</p>
            <p class="recommend--curriculum">カリキュラム作成</p>
            <p class="recommend--support">TOEFL学習サポート</p>
            <p class="recommend--video">週一回のビデオMTG</p>
            <p class="recommend--test">月二回の模試（解説付き）</p>
            <p class="recommend--english">週一の英語面接対策</p>
          </div>
        </div>
  
        <div class="planDatas__blocks">
          <h3 class="planDatas__title">フレックスプラン</h3>
          <div class="planDatas__texts">
            <p class="planDatas__price"><?php the_field('money4');?>円~</p>
            <p class="flex--monthry">*月額（税抜価格）</p>
            <p class="flex--other">＊別途ご相談ください</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="planCTA">
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