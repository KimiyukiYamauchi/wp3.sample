<?php

// カスタムメニュー
register_nav_menus(array(
	'navigation' => 'ナビゲーションバー'
));

// カスタムヘッダー
add_custom_image_header('', 'admin_header_style');
function admin_header_style(){}

define('NO_HEADER_TEXT', true);
define('HEADER_IMAGE', '%s/header_red.jpg');
define('HEADER_IMAGE_WIDTH', 900);
define('HEADER_IMAGE_HEIGHT', 228);

// ウィジェット
register_sidebar();

// jQueryの設定を出力
add_action('wp_head', 'myScript', 1);
function myScript(){
	wp_enqueue_script('jquery');

	wp_enqueue_script('jquery.cross-slide.js', get_bloginfo('template_url') . '/jquery.cross-slide.js');


}

// アイキャッチ画像
add_theme_support('post-thumbnails');
set_post_thumbnail_size(550, 400, true);

