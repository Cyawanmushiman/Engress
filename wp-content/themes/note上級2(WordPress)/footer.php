<footer class="footer">
        <div class="footer__wrapper">
          <nav class="footer__nav">
            <?php
            wp_nav_menu(
              array(
                'theme_location' => 'place_footer',//メニューの位置を記述する。place_globalはグローバルの位置。
                'container' => false,//出力されるulタグを囲ませないための処理。trueだと<ul>タグは<div>タグに囲まれてしまい、デザインが崩れる可能性がある。
              )
            );
            ?>
          </nav>
  
          <div class="footer__right">
            <a href="<?php echo esc_url(home_url('/'))?>" class="footer__logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/png/logo (2)@2x.png" alt="ロゴ" />
            </a>
            <p class="footer__tel"><img class="footer__telIcon" src="<?php echo get_template_directory_uri(); ?>/img/svg/パス 16.svg" alt="電話アイコン">0123-456-7890</p>
            <p class="footer__hour">平日08:00~20:00</p>
          </div>
        </div>
      </footer>
      <p class="copyright"><small class="copyright__text">©︎ 2021 Engress</small></p>

<!--jQueryドキュメント-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://unpkg.com/scroll-hint@1.1.10/js/scroll-hint.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<?php wp_footer(); ?>
  </body>
</html>