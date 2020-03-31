<?php
// 親テーマのCSSを読み込む
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/library/css/style.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/library/css/ie.css' );
}

function parent_editor_style() {
    add_editor_style( get_template_directory_uri() . '/library/css/editor-style.css' );
}
add_action( 'after_setup_theme', 'parent_editor_style' );

//子テーマのスタイルシートを有効にする
add_action( 'wp_enqueue_scripts', 'canvas_scripts_and_styles' );
function canvas_scripts_and_styles() {
  global $wp_styles;
  if (!is_admin()) {
		wp_register_style( 'bones-stylesheet', get_stylesheet_directory_uri() . '/style.css', array(), '', 'all' );
	}
}

// PHPを追記する場合はここより下に書いてください。


?>
