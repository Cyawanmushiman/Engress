<?php 
      $term = get_the_terms($post->ID,'category');
      ?>
      <p class="main__label"><?php echo $term[0]->name; ?></p>
      <h2 class="main__title"><?php the_title(); ?></h2>
      <div class="main__profile">
        <div class="snsArea">
          <!-- facebook -->
          <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="69" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
  
          <!-- twitter -->
          <a class="twitterTweet" href="https://twitter.com/share?ref_src=twsrc%5Etfw" onClick="window.open(encodeURI(decodeURI(this.href)), 'tweetwindow', 'width=69, height=20, personalbar=0, toolbar=0, scrollbars=1, sizable=1'); return false;" rel="nofollow"><img src="img/jpeg/グループ 509@2x.jpg" alt="ツイート" width="69" height="20" /></a>
        </div>
        <span class="main__date"><?php the_time('Y-m-d'); ?></span>
      </div>
      
      <div class="main__image"><img src="img/png/sample01@2x.png" alt=""></div>
      <?php var_dump($post); ?>
      <?php preg_match_all('/<h[1-6]>.+<\/h[1-6]>/u', $post->post_content, $matches);
      var_dump($matches);
      ?>
      <h2 class="main__titleh2"><?php echo $matches[0][0]; ?></h2>
      <p class="main__h2Text">親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。</p>
      <h3 class="main__titleh3"><?php echo $matches[0][1]; ?></h3>
      <p class="main__h3Text">
        本文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
      </p>
      <div class="main__blockquote">
        引用文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
      </div>
      <div class="main__image--margin"><img src="img/jpeg/sample4@2x.jpg" alt=""></div>
      <ul class="main__menu">
        <li class="main__item">リストリストリストリストリスト</li>
        <li class="main__item">リストリストリストリストリストリストリストリストリスト</li>
        <li class="main__item">リストリストリストリストリストリストリストリストリストリストリストリストリストリスト</li>
      </ul>
      <p class="main__text--yellow">テキストリンクテキストリンク</p>

      <h2 class="news__titleh2">見出し1</h2>
    <p class="news__h2Text">本文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
    <h3 class="news__titleh3">見出し2</h3>
    <p class="news__h3Text">本文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
    <p class="news__blockquote">
      引用文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
    </p>
    <div class="news__image"><img src="img/png/sample4@2x.png" alt=""></div>
    <ul class="news__menu">
      <li class="news__item">リストリストリストリストリスト</li>
      <li class="news__item">リストリストリストリストリストリストリストリストリスト</li>
      <li class="news__item">リストリストリストリストリストリストリストリストリストリストリストリストリストリスト</li>
    </ul>
    <a href="" class="news__text--yellow">テキストリンクテキストリンク</a>


    <?php
      $args = array(
        'posts_per_page'=>10,//取得したい記事数
        'post_type'=>'post',//取得したい投稿タイプ
      );
      $blog_pages = new WP_Query($args);//条件を指定した$argsをnew WP_Query()の引数に渡すことでサブループを作成する。作ったサブループを変数に代入する。
      if($blog_pages->have_posts()):
        while($blog_pages->have_posts()) : $blog_pages->the_post();
    ?>

<?php
      endwhile;
      wp_reset_postdata();
    endif;
    ?>

<?php 
/*
Template Name: ブログアーカイブページ
*/
?>

<div class="card mainModel__card">
  <p class="card__text"><?php the_sub_field('cardText');?></p>
  <p class="card__image">
    <?php 
    $attachment_id = get_sub_field('cardImage');
    echo wp_get_attachment_image($attachment_id,125,140);
    ?>
  </p>
  <div class="card__Info">
    <p class="card__profile">
      <span class="card__job"><?php the_sub_field('cardJob'); ?></span>
      <span class="card__name"><?php the_sub_field('cardName'); ?></span>
    </p>
    <p class="card__story"><?php the_sub_field('cardStory'); ?></p>
  </div>
</div>
<div class="card mainModel__card">
  <p class="card__text">半年でTOEFL 40点→100点を達成！コロンビア大学大学院に合格</p>
  <p class="card__image"><img src="<?php echo get_template_directory_uri(); ?>/img/jpeg/model02@2x.jpg" alt="#"></p>
  <div class="card__Info">
    <p class="card__profile">
      <span class="card__job">大学生</span>
      <span class="card__name">Y.Takiyamaさん</span>
    </p>
    <p class="card__story">6ヶ月でTOEFL40→100点</p>
  </div>
</div>
<div class="card mainModel__card">
  <p class="card__text">早稲田大学 国際教養学部AO入試合格！TOEFL iBT 109点</p>
  <p class="card__image"><img src="<?php echo get_template_directory_uri(); ?>/img/jpeg/model03@2x.jpg" alt="#"></p>
  <div class="card__Info">
    <p class="card__profile">
      <span class="card__job">高校生</span>
      <span class="card__name">M.Yamadaさん</span>
    </p>
    <p class="card__story">5ヶ月でTOEFL68→109点</p>
  </div>
</div>

<form action="">
      <label class="contact__inputLabel" for="company">会社名</label>
      <input class="input" type="text" id="company" placeholder="Engress">

      <label class="contact__inputLabel" for="name">氏名</label>
      <input class="input" type="text" id="name" placeholder="田中　太郎">
    
      <label class="contact__inputLabel" for="mail">メールアドレス</label>
      <input class="input" type="email" id="mail" placeholder="example@example.com">
    
      <label class="contact__inputLabel" for="tel">電話番号</label>
      <input class="input--tel" type="text" id="tel" placeholder="01-2345-6789">
    
      <p class="contact__radioText">お問い合わせの種類を選択してください<span class="fwb">（資料請求の方は資料請求を選択ください）</span></p>

      <input id="talk" class="contact__radioBtn" type="radio" name="種類" checked>
      <label for="talk" class="contact__kindsLabel">商談のご相談</label>
      <br>
      <input id="service" class="contact__radioBtn" type="radio" name="種類">
      <label for="service" class="contact__kindsLabel">サービスに関するお問い合わせ</label>
      <br>
      <input id="document" class="contact__radioBtn" type="radio" name="種類">
      <label for="document" class="contact__kindsLabel">資料請求</label>
      <br>
      <input id="other" class="contact__radioBtn" type="radio" name="種類">
      <label for="other" class="contact__kindsLabel">その他</label>
      <br>

      <label class="contact__textareaLabel" for="text">お問い合わせ内容</label>
      <textarea id="text" placeholder="入力して下さい"></textarea>

      <p class="contact__pribacy"><a href="" class="text--yellow">プライバシーポリシー</a>に同意の上、送信ください。</p>

      <input id="check" class="contact__checkbox" type="checkbox" name="プライバシーポリシー">
      <label for="check" class="contact__checkboxLabel">プライバシーポリシーに同意する</label>


      <input class="button--submit" type="submit" value="送信する">
    </form>


    <?php
global $wp_query;
$big = 999999999; // need an unlikely integer
echo paginate_links( array(
  'mid_size' => 2,
  'prev_next' => false,
) );
?>

&gt; 