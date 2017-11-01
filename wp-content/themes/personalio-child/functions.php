<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles');
add_action('wp_enqueue_scripts', 'append_highlight_js');

function theme_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
}
function append_highlight_js() {
    // スクリプトの追加
    wp_enqueue_script('highlightjs', '//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.2/highlight.min.js');
    wp_enqueue_script('highlightjsload', get_stylesheet_directory_uri() . '/highlightjs_call.js');

    // スタイルの追加
    wp_enqueue_style('highlightjs', '//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.2/styles/solarized_dark.min.css');
}

?>
