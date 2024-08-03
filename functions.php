<?php 

function aumaru_files() {
  wp_enqueue_script('font-awesome','//kit.fontawesome.com/2be1bd9f3a.js', NULL, '1.0', true);
  wp_enqueue_script('bootstrap-js','//maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js', array('jquery'), '1.0', true);
  wp_enqueue_script('aumaru_carousel-js', get_theme_file_uri('/src/assets/js/responsive-menu.js'), NULL, '1.0', true);
  wp_enqueue_style('tailwind_output_styles', get_theme_file_uri('/src/output.css'));
  wp_enqueue_style('aumaru_main_styles', get_theme_file_uri('/src/assets/styles/main.css'));
  wp_enqueue_style('aumaru_carousel_styles', get_theme_file_uri('/src/assets/styles/carousel.css'));
  //wp_enqueue_style('aumaru_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'aumaru_files');


function aumaru_features() {
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'aumaru_features');
