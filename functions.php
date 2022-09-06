<?php
// スタイルシート
function twpp_enqueue_styles()
{
  wp_enqueue_style('reset-sheet', get_template_directory_uri() . "/css/reset.css");
  wp_enqueue_style('main-style-sheet', get_template_directory_uri() . "/style.css");
}
add_action('wp_enqueue_scripts', 'twpp_enqueue_styles');

add_filter('show_admin_bar', '__return_false');

// スクリプト
function twpp_enqueue_scripts()
{
  wp_enqueue_script(
    'main-js-sheet',
    get_template_directory_uri() . '/js/main.js',
    array(),
    false,
    true
  );
}
add_action('wp_enqueue_scripts', 'twpp_enqueue_scripts');

// アイキャッチ
add_theme_support('post-thumbnails');

// ウィジェット
function my_theme_widgets_init()
{
  register_sidebar(array(
    'name' => 'Main Sidebar1',
    'id' => 'main-sidebar1',
  ));
  register_sidebar(array(
    'name' => 'Main Sidebar2',
    'id' => 'main-sidebar2',
  ));
  register_sidebar(array(
    'name' => 'Main Sidebar3',
    'id' => 'main-sidebar3',
  ));
}
add_action('widgets_init', 'my_theme_widgets_init');