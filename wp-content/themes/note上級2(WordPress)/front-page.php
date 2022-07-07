<?php get_header(); ?>      
      <main class="mainMV">
        <h1 class="mainMV__title">TOEFL対策はEngress</h1>
        <p class="mainMV__content">日本人へのTOEFL指導歴豊かな講師陣の<br class="br-sp"> コーチング型TOEFLスクール</p>
        <a href="<?php echo esc_url(home_url('contact')); ?>" class="button mainMV__button">資料請求</a>
        <a href="<?php echo esc_url(home_url('contact')); ?>" class="mainMV__link">お問い合わせ</a>
      </main>

      <section class="mainAbout">
        <h2 class="mainAbout__title">TOEFL学習でこんな悩みありませんか？</h2>
        <div class="mainAbout__threeTexts">
          <p class="mainAbout__text1">勉強の習慣が<br>身についていない</p>
          <p class="mainAbout__text2">勉強しているはず<br>なのに点数が伸びない</p>
          <p class="mainAbout__text3">正しい勉強方法が<br>わからない</p>
        </div>
        <div class="mainAbout__contents">
          <div class="mainAbout__inner">
            <h2 class="mainAbout__h2">Engressは<br> 
              <span class="underLine">TOEFLに特化したスクール</span>です</h2>
            <p class="mainAbout__text">完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で<br>TOEFLの苦手分野を克服します。</p>
          </div>
        </div>
      </section>

      <section class="main3media">
        <h2 class="main3media__title">TOEFL対策に特化したEngress3つの強み</h2>
        <div class="mainWrapper">

          <div class="main3media__media">
            <div class="main3media__texts">
              <span class="label main3media__label">特長 １</span>
              <h3 class="main3media__h3">TOEFLに最適化された<br> 無駄のないカリキュラム</h3>
              <p class="main3media__text">TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。</p>
            </div>
            <div class="main3media__image">
              <img src="<?php echo get_template_directory_uri(); ?>/img/jpeg/feature01@2x.jpg" alt="">
            </div>
          </div>
          <div class="main3media__media">
            <div class="main3media__texts">
              <span class="label main3media__label">特長 ２</span>
              <h3 class="main3media__h3">日本人指導歴10年以上の<br> 経験豊富な講師陣</h3>
              <p class="main3media__text">Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。</p>
            </div>
            <div class="main3media__image">
              <img src="<?php echo get_template_directory_uri(); ?>/img/jpeg/feature02@2x.jpg" alt="">
            </div>
          </div>
          <div class="main3media__media">
            <div class="main3media__texts">
              <span class="label main3media__label">特長 ３</span>
              <h3 class="main3media__h3--margin">平均3ヶ月でTOEFL iBT20点アップ</h3>
              <p class="main3media__text">Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。</p>
            </div>
            <div class="main3media__image">
              <img src="<?php echo get_template_directory_uri(); ?>/img/jpeg/feature03@2x.jpg" alt="">
            </div>
          </div>
        </div>
      </section>
      <div class="price main__price">
        <h2 class="price__title">Engressの料金プランはこちら</h2>
        <a href="<?php echo esc_url(home_url('price')); ?>" class="price__button">料金を見てみる</a>
      </div>

      <section class="mainModel">
        <h2 class="mainModel__title">TOEFL成功事例</h2>
        <div class="mainWrapper">
          <div class="mainModel__cards">

            <?php 
            $models = array('model1','model2','model3');
            foreach($models as $model):
            if(have_rows($model)):
              while(have_rows($model)):the_row();
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
            <?php
                endwhile;
              endif;
            endforeach;
            ?>
          </div>
        </div>
      </section>

      <section class="mainFlow">
        <h2 class="mainFlow__title">ご利用の流れ</h2>
        <div class="mainWrapper">
          <div class="mainFlow__card">
            <span class="mainFlow__number">01</span>
            <span class="mainFlow__cardTitle">お問い合わせ</span>
            <span class="mainFlow__text">まずはフォームまたはお電話からお申し込みください。</span>
          </div>
          <div class="mainFlow__card">
            <span class="mainFlow__number">02</span>
            <span class="mainFlow__cardTitle">ヒアリング</span>
            <span class="mainFlow__text">現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</span>
          </div>
          <div class="mainFlow__card">
            <span class="mainFlow__number">03</span>
            <span class="mainFlow__cardTitle">学習プランのご提供</span>
            <span class="mainFlow__text">目標達成のために最適な学習プランをご提案致します。</span>
          </div>
          <div class="mainFlow__card">
            <span class="mainFlow__number">04</span>
            <span class="mainFlow__cardTitle">ご入会</span>
            <span class="mainFlow__text">お申込み完了後、レッスンがスタートします。</span>
          </div>
        </div>
      </section>

      <section class="mainQuestions">
        <h2 class="mainQuestions__title">よくある質問</h2>
        <div class="mainWrapper">
          <dl class="accordion">
            <div class='accordion__content'>
              <dt class="accordion__question">
                <p>Engressはサラリーマンでも学習を続けられるでしょうか？</p>
              </dt>
              <dd class="accordion__answer">
                <p>Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</p>
              </dd>
            </div>
            
            <div class='accordion__content'>
              <dt class="accordion__question QApadding">
                <p>教材はオリジナルのものを使用しているのでしょうか？</p>
              </dt>
              <dd class="accordion__answer">
                <p>答え答え答え答え答え答え</p>
              </dd>
            </div>
          
            <div class='accordion__content'>
              <dt class="accordion__question QApadding">
                <p>講師に日本人はいますか？</p>
              </dt>
              <dd class="accordion__answer">
                <p>答え答え答え答え答え答え</p>
              </dd>
            </div>
          
            <div class='accordion__content'>
              <dt class="accordion__question QApadding">
                <p>TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？</p>
              </dt>
              <dd class="accordion__answer">
                <p>答え答え答え答え答え答え</p>
              </dd>
            </div>
          </dl>
        </div>
      </section>

      <section class="mainPosts">
        <div class="mainWrapper">
          <div class="mainPosts__inner">
            <div class="mainBlog">
              <h2 class="mainPosts__title">ブログ</h2>
              <?php
              $args = array(
                'posts_per_page'=>2,//取得したい記事数
                'post_type'=>'post',//取得したい投稿タイプ
              );
              $blog_pages = new WP_Query($args);//条件を指定した$argsをnew WP_Query()の引数に渡すことでサブループを作成する。作ったサブループを変数に代入する。
              if($blog_pages->have_posts()):
                while($blog_pages->have_posts()) : $blog_pages->the_post();
              ?>

              <a href="<?php the_permalink();?>" class="mainBlog__permalink">
                <div class="mainBlog__image">
                  <?php echo get_thumbnail(); ?>
                  <?php $terms = get_the_terms($post->ID, 'category'); ?>
                  <span class="blogArchive__label"><?php echo $terms[0]->name; ?></span>
                </div>
                <div class="mainBlog__texts">
                  <h3 class="mainBlog__h3"><?php the_title(); ?></h3>
                  <p class="mainBlog__date"><?php the_time('Y-m-d'); ?></p>
                </div>
              </a>

              <?php
                endwhile;
                wp_reset_postdata();
              endif;
              ?>
            </div>
    
            <div class="mainNews">
              <h2 class="mainPosts__title">お知らせ</h2>
              <?php
              $args = array(
                'posts_per_page'=>3,//取得したい記事数
                'post_type'=>'custom_news',//取得したい投稿タイプ
              );
              $custom_news_pages = new WP_Query($args);//条件を指定した$argsをnew WP_Query()の引数に渡すことでサブループを作成する。作ったサブループを変数に代入する。
              if($custom_news_pages->have_posts()):
                while($custom_news_pages->have_posts()) : $custom_news_pages->the_post();
              ?>

              <a href="<?php the_permalink(); ?>" class="mainNews__permalink">
                <p class="mainNews__date"><?php the_time('Y-m-d'); ?></p>
                <p class="mainNews__text"><?php the_title(); ?></p>
              </a>

              <?php
                endwhile;
                wp_reset_postdata();
              endif;
              ?>
            </div>
          </div>
        </div>
      </section>


      <section class="mainCTA">
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