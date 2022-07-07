$(function(){ 
  $(".accordion__answer").css("display", "none");
  // 質問の答えをあらかじめ非表示
  //質問をクリック
  $(".accordion__question").click(function () {
    $(".accordion__question").not(this).removeClass("open");
    //クリックしたquestion以外の全てのopenを取る
    $(".accordion__question").not(this).next().slideUp(300);
    //クリックされたquestion以外のanswerを閉じる
    $(this).toggleClass("open");
    //thisにopenクラスを付与
    $(this).next().slideToggle(300);
    //thisのcontentを展開、開いていれば閉じる
  });

  // ハンバーガーメニュー（画面右上にボタン）
  var $nav   = $('#navArea');
  var $btn   = $('.toggle_btn');
  var $mask  = $('#mask');
  var open   = 'open'; // class

  // menu open close
  $btn.on( 'click', function() {
    if ( ! $nav.hasClass( open ) ) {//navAreaクラスにopenクラスが付いてなければ
      $nav.addClass( open );//navAreaクラスにopenクラスをつける。
    } else {
      $nav.removeClass( open );//そうでなければ、openクラスをとる。
    }
  });

  // mask close
  $mask.on('click', function() {
    $nav.removeClass( open );
  });
});
window.addEventListener('DOMContentLoaded', function(){
  new ScrollHint('.js-scrollable');
});