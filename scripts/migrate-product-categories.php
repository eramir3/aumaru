<?php
/**
 * Run once per WordPress environment with:
 * wp eval-file wp-content/themes/aumaru/scripts/migrate-product-categories.php
 *
 * Safe to rerun; existing products stay attached to the renamed pulp term.
 */

if (!defined('ABSPATH') || !taxonomy_exists('product_cat')) {
  throw new RuntimeException('Load WordPress with WooCommerce active before running this migration.');
}

$old_pulp = get_term_by('slug', 'pulpe-de-fruit', 'product_cat');
$new_pulp = get_term_by('slug', 'fruit-pulp', 'product_cat');

if ($old_pulp && $new_pulp) {
  throw new RuntimeException('Both pulp category slugs exist; reconcile them before migrating.');
}

if ($old_pulp) {
  $result = wp_update_term($old_pulp->term_id, 'product_cat', array('slug' => 'fruit-pulp'));

  if (is_wp_error($result)) {
    throw new RuntimeException($result->get_error_message());
  }

  echo "Renamed pulpe-de-fruit to fruit-pulp.\n";
} elseif (!$new_pulp) {
  $result = wp_insert_term('Pulpe de Fruit', 'product_cat', array('slug' => 'fruit-pulp'));

  if (is_wp_error($result)) {
    throw new RuntimeException($result->get_error_message());
  }

  echo "Created fruit-pulp.\n";
}

if (!get_term_by('slug', 'dried-fruits', 'product_cat')) {
  $result = wp_insert_term('Fruits séchés', 'product_cat', array('slug' => 'dried-fruits'));

  if (is_wp_error($result)) {
    throw new RuntimeException($result->get_error_message());
  }

  echo "Created dried-fruits.\n";
}
