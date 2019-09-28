<?php

//スラッシュを追加
function add_slash_uri_end($uri, $type) {
	if ($type != 'single') {
		$uri = trailingslashit($uri);
	}
	return $uri;
}
add_filter('user_trailingslashit', 'add_slash_uri_end', 10, 2);

//テーマのセットアップ
// titleタグをhead内に生成する
add_theme_support( 'title-tag' );
// HTML5でマークアップさせる
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
// Feedのリンクを自動で生成する
add_theme_support( 'automatic-feed-links' );
//アイキャッチ画像を使用する設定
add_theme_support( 'post-thumbnails' );
//カスタムメニュー
register_nav_menu( 'l-nav',  ' ヘッダーナビゲーション ' );
register_nav_menu( 'l-side',  ' サイドナビゲーション ' );

//サイドバーにウィジェット追加
function widgetarea_init() {
	register_sidebar(array(
		'name'=>'サイドバー',
		'id' => 'l-aside',
		'before_widget'=>'<div class="blc-aside %1$s mt30">',
		'after_widget'=>'</div>',
		'before_title' => '<h2 class="ttl-hdg01"><span class="ttl-wrap">',
		'after_title' => '</span></h2>'
	));
}
add_action( 'widgets_init', 'widgetarea_init' );

//タグクラウドの出力変更
function wp_tag_cloud_custom_ex( $output ) {
	//style属性を取り除く
	$output = preg_replace( '/\s*?style="[^"]+?"/i', '',  $output);
	return $output;
}
add_filter( 'wp_tag_cloud', 'wp_tag_cloud_custom_ex');

function is_new_icon(){
	$days = 7; //newをつける日数
	$makeDate = get_the_date('Y-m-d');
	if((time() - strtotime($makeDate)) / 86400 <= $days){
			$newIcon = '<span class="blc-art_new"><span class="blc-art_icn">NEW</span></span>';
			echo $newIcon;
	}
}

function myguten_enqueue() {
  wp_enqueue_script(
      'myguten-script',
      get_template_directory_uri() . '/wp_blocks_original.js',
      array( 'wp-blocks')
  );
}
add_action( 'enqueue_block_editor_assets', 'myguten_enqueue' );

?>