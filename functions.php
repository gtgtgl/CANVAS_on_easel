<?php //子テーマで利用する関数を書く

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/library/css/style.css' );
}

//子テーマのスタイルシートを有効にする
add_action( 'wp_enqueue_scripts', 'canvas_scripts_and_styles' );
function canvas_scripts_and_styles() {
  global $wp_styles;
  if (!is_admin()) {
		wp_register_style( 'bones-stylesheet', get_stylesheet_directory_uri() . '/style.css', array(), '', 'all' );
	}
}

?>
