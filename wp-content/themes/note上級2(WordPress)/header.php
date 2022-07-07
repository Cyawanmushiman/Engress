<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title><?php bloginfo('name'); ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- resetCSS< -->
      <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <!-- FontAwesome -->
      <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <!-- CSSの読み込み -->
      <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
    <!-- スクロールひんと -->
      <link rel="stylesheet" href="https://unpkg.com/scroll-hint@1.1.10/css/scroll-hint.css">
      <?php wp_head(); ?>
    </head>

    <body>
      <header class="header">
        <div class="header__left">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="logo header__logo"><img src="<?php echo get_template_directory_uri(); ?>/img/png/logo (2)@2x.png" alt=""></a>
          <nav class="global-nav">
            <?php
            wp_nav_menu(
              array(
                'theme_location' => 'place_global',//メニューの位置を記述する。place_globalはグローバルの位置。
                'container' => false,//出力されるulタグを囲ませないための処理。trueだと<ul>タグは<div>タグに囲まれてしまい、デザインが崩れる可能性がある。
              )
              );
            ?>
          </nav>
        </div>

        <div class="header__right">
          <div class="timeTel header__timeTel">
            <p class="time header__time">平日8:00〜20:00</p>
            <p class="tel header__tel"><img class = "telIcon header__telIcon"src="<?php echo get_template_directory_uri(); ?>/img/svg/パス 29.svg" alt="">0120-456-7890</p>
          </div>
          <a href="<?php echo esc_url(home_url('contact')); ?>" class="header__document">資料請求</a>
          <a href="<?php echo esc_url(home_url('contact')); ?>" class="header__contact">お問い合わせ</a>
        </div>

        <!-- ハンバーガーメニュー -->
        <div id="navArea">
          <nav class="humburgerNav">
            <div class="inner">
              <a href="<?php echo esc_url(home_url('/')); ?>" ><img  class="inner__logo" src="<?php echo get_template_directory_uri(); ?>/img/png/logo (2)@2x.png" alt="ロゴ"></a>
              <?php
              wp_nav_menu(
                array(
                  'theme_location' => 'place_global',//メニューの位置を記述する。place_globalはグローバルの位置。
                  'container' => false,//出力されるulタグを囲ませないための処理。trueだと<ul>タグは<div>タグに囲まれてしまい、デザインが崩れる可能性がある。
                )
                );
              ?>

              <div class="hamburger__info">
                <p class="hamburger__minimumText">平日08:00〜20:00</p>
                <p class="humburger__text"><img class="telIcon" src="<?php echo get_template_directory_uri(); ?>/img/svg/パス 29.svg" alt="電話アイコン">0120-456-7890</p>
                <a href="<?php echo esc_url(home_url('contact')); ?>" class="humburger__btn--document">資料請求</a>
                <a href="<?php echo esc_url(home_url('contact')); ?>" class="humburger__btn--contact">お問い合わせ</a>
              </div>
            </div>
          </nav>
        
          <div class="toggle_btn" id="btn17">
            <span></span>
            <span></span>
            <span></span>
          </div>
        
          <div id="mask"></div>
        </div>
        <!-- ハンバーガーメニュー -->
      </header>
      
      <?php if(is_page('contact')): ?>
        <main class="contactMV">
          <h1 class="contactMV__title"><?php echo get_the_title(); ?></h1>
        </main>
      <?php elseif(is_page('price')): ?>
        <main class="planMV">
          <h1 class="planMV__title">コース・料金</h1>
        </main>
      <?php elseif(is_page('news')): ?>
        <main class="newsArchiveMV">
          <h1 class="newsArchiveMV__title"><?php echo get_the_title(); ?></h1>
        </main>
      <?php elseif(is_home() || is_archive()): ?>
        <main class="blogArchiveMV">
          <?php $pageName = get_page_by_path('blog-archive'); ?>
          <h1 class="blogArchiveMV__title"><?php echo $pageName->post_title; ?></h1>
        </main>
      <?php endif; ?>

      <?php if(! is_front_page()): ?>
        <?php if( is_single() || is_page('thanks')): ?>
          <div class="singleWrapper">
            <div class="breadCranp">
              <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                <?php if(function_exists('bcn_display'))
                {
                    bcn_display();
                }?>
                
              </div>
            </div>
          </div>
        <?php else: ?>
          <div class="breadCranp">
            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
              <?php if(function_exists('bcn_display'))
              {
                  bcn_display();
              }?>
              
            </div>
          </div>
        <?php endif; ?>
      <?php endif; ?>