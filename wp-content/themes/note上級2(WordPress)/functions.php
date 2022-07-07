<?php 
register_nav_menus(
  array(
    'place_global'=>'グローバル',
    'place_footer'=>'フッターナビ',
  )
);

add_theme_support('post-thumbnails');//アイキャッチ画像を利用できるようにする。

//抜粋関係
add_post_type_support( 'page', 'excerpt' );//固定ページの編集でも「抜粋」を編集できるようにする。
function apply_excerpt_br($value){
  return nl2br($value);
}
add_filter('get_the_excerpt', 'apply_excerpt_br');
function new_excerpt_more($more) {
  return '...'; //変更後の内容
}
add_filter('excerpt_more', 'new_excerpt_more');
function custom_excerpt_length( $length ) {
  return 50;  //表示したい文字数
} 
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


function get_thumbnail(){
  global $post;
  $image = get_the_post_thumbnail($post->ID);
  if($image):
    return $image;
  else:
    return '<img src="'.get_template_directory_uri(). '/img/jpeg/グループ 510@2x.jpg" />'; //シングル・ダブルクォートが全角になっているので変更する。
  endif;
}
function get_remit_title(){
  global $post;
  if(mb_strlen($post->post_title, 'UTF-8')>30){
    $title= mb_substr($post->post_title, 0, 20, 'UTF-8');
    return $title.'……';
  }else{
    return $post->post_title;
  }
}

function the_pagination() {
  global $wp_query;
  $bignum = 999999999;
  if ( $wp_query->max_num_pages <= 1 )
    return;
  echo '<nav class="pagination">';
  echo paginate_links( array(
    'base'         => str_replace( $bignum, '%#%', esc_url( get_pagenum_link($bignum) ) ),
    'format'       => '',
    'current'      => max( 1, get_query_var('paged') ),
    'total'        => $wp_query->max_num_pages,
    'prev_text'    => '<',
    'next_text'    => '>',
    'type'         => 'list',
    'end_size'     => 3,
    'mid_size'     => 3
  ) );
  echo '</nav>';
}

?>