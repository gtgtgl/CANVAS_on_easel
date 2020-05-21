<?php
// 子テーマのスタイルシートを有効にする
function canvas_scripts_and_styles() {
	wp_register_style( 'canvas-stylesheet', get_stylesheet_directory_uri() . '/style.css', array(), '', 'all' );
  wp_enqueue_style( 'canvas-stylesheet' );
}
add_action( 'wp_enqueue_scripts', 'canvas_scripts_and_styles', 1000 );

// PHPを追記する場合はここより下に書いてください。


?>
