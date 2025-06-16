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
  add_theme_support('woocommerce', array(
    'thumbnail_image_width' => 255,
    'single_image_width' => 255,
    'product_grid' => array(
      'default_rows' => 10,
      'min_rows' => 5,
      'max_rows' => 10,
      'default_columns' => 1,
      'min_columns' => 1,
      'max_columns' => 1,
    )
  ));

  // Commented to remove zoom
  // add_theme_support( 'wc-product-gallery-zoom' );
  add_theme_support( 'wc-product-gallery-lightbox' );
  add_theme_support( 'wc-product-gallery-slider' );

  if(!isset($content_width)) {
    $content_width = 600;
  }
}

add_action('after_setup_theme', 'aumaru_features');


// update cart in shop section
add_filter( 'woocommerce_add_to_cart_fragments', 'cart_counter_add_to_cart_fragment' );
function cart_counter_add_to_cart_fragment( $fragments ) {
  $fragments[ '.cart-counter' ] = '<span class="cart-counter mt-2">'. WC()->cart->get_cart_contents_count() .'</span>';
 	return $fragments;

}

// update cart in cart section
function enqueue_wc_cart_fragments_script() {
  // Comenting condition to make it apply to all website sections
  // if(function_exists('is_cart') && is_cart()) {
  //   wp_enqueue_script('wc-cart-fragments');
  // }
  wp_enqueue_script('wc-cart-fragments');
}
add_action('wp_enqueue_scripts', 'enqueue_wc_cart_fragments_script');


add_filter( 'woocommerce_page_title', 'new_woocommerce_page_title');
  
function new_woocommerce_page_title( $page_title ) {
  if( $page_title == 'PRODUITS' ) return "";
  return $page_title;
}

add_action('wp_footer', 'enqueue_wc_cart_fragments_script');

// Events Post Type
function event_post_types() {
  register_post_type('event', array(
    'rewrite' => array('slug' => 'events'),
    'show_in_rest' => true,
    'has_archive' => true,
    'supports' => array('title', 'editor', 'excerpt'),
    'public' => true,
    'labels' => array(
      'name' => 'Events',
      'add_new_item' => 'Add New Event',
      'edit_item' => 'Edit Event',
      'all_items' => 'All Events',
      'singular_name' => 'Event'
    ),
    'menu_icon' => 'dashicons-calendar'
  ));
}
add_post_type_support( 'event', 'thumbnail' );
add_action('init', 'event_post_types');

function event_adjust_queries($query) {
  if(!is_admin() && is_post_type_archive('event') && $query->is_main_query()) {
    $today = date('Ymd');
    $query->set('meta_key', 'event_date');
    $query->set('orderby', 'meta_value_num');
    $query->set('order', 'ASC');
    $query->set('meta_query', array(
      array(
        'key' => 'event_date',
        'compare' => '>=',
        'value' => $today,
        'type' => 'numeric',
      )
    ));
  }
}

add_action('pre_get_posts', 'event_adjust_queries');


// Load icons
function load_dashicons_for_guests() {
    if (!is_admin()) {
        wp_enqueue_style('dashicons');
    }
}
add_action('wp_enqueue_scripts', 'load_dashicons_for_guests');
