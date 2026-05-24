<?php 

function aumaru_asset_version($relative_path) {
  $file_path = get_theme_file_path($relative_path);

  if (file_exists($file_path)) {
    return (string) filemtime($file_path);
  }

  return wp_get_theme()->get('Version');
}

function aumaru_files() {
  wp_enqueue_script('font-awesome','//kit.fontawesome.com/2be1bd9f3a.js', NULL, '1.0', true);
  wp_enqueue_script('bootstrap-js','//maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js', array('jquery'), '1.0', true);
  wp_enqueue_script('aumaru_carousel-js', get_theme_file_uri('/src/assets/js/responsive-menu.js'), NULL, '1.0', true);
  wp_enqueue_style('tailwind_output_styles', get_theme_file_uri('/src/output.css'), array(), aumaru_asset_version('/src/output.css'));
  wp_enqueue_style('aumaru_main_styles', get_theme_file_uri('/src/assets/styles/main.css'), array('tailwind_output_styles'), aumaru_asset_version('/src/assets/styles/main.css'));
  wp_enqueue_style('aumaru_carousel_styles', get_theme_file_uri('/src/assets/styles/carousel.css'), array('aumaru_main_styles'), aumaru_asset_version('/src/assets/styles/carousel.css'));
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


//--------- START OF MIN MAX QUANTITY PLUGIN ----------/
/**
 * Quantity limits grouped by shipping ZIP codes.
 *
 * Each group owns its own ZIP list and min/max quantity range.
 */
function aumaru_zip_quantity_rules() {
  return array(
    'group_1' => array(
      'label' => 'région lyonnaise',
      'zips'  => array('690*', '691*', '695*'),
      // 'zips'  => array('69100', '69500'), // Saved as reference
      'min'   => 3,
      'max'   => 25,
    ),
    // Saved as reference
    // 'group_2' => array(
    //   'label' => 'Group 2',
    //   'zips'  => array('75001', '75002'),
    //   'min'   => 4,
    //   'max'   => 25,
    // ),
    'default_group' => array(
      'label'   => 'hors région lyonnaise',
      'default' => true,
      'min'     => 6,
      'max'     => 25,
    ),
  );
}

function aumaru_normalize_zip_code($zip_code) {
  $zip_code = strtoupper(trim((string) $zip_code));

  if (preg_match('/^\d{5}/', $zip_code, $matches)) {
    return $matches[0];
  }

  return preg_replace('/[^A-Z0-9]/', '', $zip_code);
}

function aumaru_normalize_zip_pattern($zip_pattern) {
  return preg_replace('/[^A-Z0-9\*]/', '', strtoupper(trim((string) $zip_pattern)));
}

function aumaru_zip_code_matches_pattern($zip_code, $zip_pattern) {
  $zip_code    = aumaru_normalize_zip_code($zip_code);
  $zip_pattern = aumaru_normalize_zip_pattern($zip_pattern);

  if ('' === $zip_code || '' === $zip_pattern) {
    return false;
  }

  if (false === strpos($zip_pattern, '*')) {
    return $zip_code === $zip_pattern;
  }

  $regex = '/^' . str_replace('\*', '.*', preg_quote($zip_pattern, '/')) . '$/';

  return 1 === preg_match($regex, $zip_code);
}

function aumaru_get_validation_zip_code($posted_data = array()) {
  $zip_code = '';

  if (!empty($posted_data['shipping_postcode'])) {
    $zip_code = $posted_data['shipping_postcode'];
  } elseif (!empty($posted_data['billing_postcode'])) {
    $zip_code = $posted_data['billing_postcode'];
  } elseif (WC()->customer) {
    $zip_code = WC()->customer->get_shipping_postcode();

    if ('' === $zip_code) {
      $zip_code = WC()->customer->get_billing_postcode();
    }
  }

  return aumaru_normalize_zip_code($zip_code);
}

function aumaru_get_zip_quantity_rule($zip_code) {
  if ('' === $zip_code) {
    return null;
  }

  $default_rule = null;

  foreach (aumaru_zip_quantity_rules() as $group_key => $rule) {
    if (!isset($rule['min'], $rule['max'])) {
      continue;
    }

    if (!empty($rule['default'])) {
      $default_rule          = $rule;
      $default_rule['key']   = $group_key;
      $default_rule['label'] = isset($rule['label']) ? $rule['label'] : $group_key;
      continue;
    }

    if (empty($rule['zips'])) {
      continue;
    }

    foreach ($rule['zips'] as $group_zip) {
      if (!aumaru_zip_code_matches_pattern($zip_code, $group_zip)) {
        continue;
      }

      $rule['key']   = $group_key;
      $rule['label'] = isset($rule['label']) ? $rule['label'] : $group_key;

      return $rule;
    }
  }

  return $default_rule;
}

function aumaru_get_zip_quantity_violation($zip_code) {
  if (!WC()->cart) {
    return null;
  }

  $rule = aumaru_get_zip_quantity_rule($zip_code);

  if (!$rule) {
    return null;
  }

  $quantity = (int) WC()->cart->get_cart_contents_count();
  $min      = max(0, (int) $rule['min']);
  $max      = max($min, (int) $rule['max']);

  if ($quantity >= $min && $quantity <= $max) {
    return null;
  }

  return array(
    'zip_code'    => $zip_code,
    'group_label' => $rule['label'],
    'quantity'    => $quantity,
    'min'         => $min,
    'max'         => $max,
  );
}

function aumaru_get_zip_quantity_error_message($violation) {
  $group_suffix = '';

  if (!empty($violation['group_label'])) {
    $group_suffix = sprintf(' (%s)', $violation['group_label']);
  }

  return sprintf(
    __('Les commandes à destination du code postal %1$s%2$s doivent contenir entre %3$d et %4$d articles.<br />Votre panier en contient actuellement %5$d.', 'aumaru'),
    $violation['zip_code'],
    $group_suffix,
    $violation['min'],
    $violation['max'],
    $violation['quantity']
  );
}

function aumaru_is_checkout_submission() {
  if (!empty($_REQUEST['wc-ajax'])) {
    return 'checkout' === wc_clean(wp_unslash($_REQUEST['wc-ajax']));
  }

  return !empty($_POST['woocommerce-process-checkout-nonce']);
}

function aumaru_validate_zip_quantity_on_cart() {
  if (aumaru_is_checkout_submission()) {
    return;
  }

  $violation = aumaru_get_zip_quantity_violation(aumaru_get_validation_zip_code());

  if (!$violation) {
    return;
  }

  wc_add_notice(aumaru_get_zip_quantity_error_message($violation), 'error');
}
add_action('woocommerce_check_cart_items', 'aumaru_validate_zip_quantity_on_cart');

function aumaru_validate_zip_quantity_on_checkout($posted_data, $errors) {
  $violation = aumaru_get_zip_quantity_violation(aumaru_get_validation_zip_code($posted_data));

  if (!$violation) {
    return;
  }

  $errors->add('aumaru_zip_quantity_limit', aumaru_get_zip_quantity_error_message($violation));
}
add_action('woocommerce_after_checkout_validation', 'aumaru_validate_zip_quantity_on_checkout', 10, 2);

//--------- END OF MIN MAX QUANTITY PLUGIN ----------/
