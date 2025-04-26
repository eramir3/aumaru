<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.6.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
?>
<div class="flex flex-col h-screen">
<div class="max-w-screen-xxl m-auto py-16 flex-grow text-white">
<h1
	style="font-family: abril-fatface"
	class="text-center text-white text-5xl font-semibold"
>
NOS PRODUITS
</h1>
<div
	style="font-family: nexa"
	class="text-white p-6 mx-2 mt-12 bg-[#131313]/50"
>
	<h2 class="text-[#EFC897] font-extrabold text-3xl">PULPE DE FRUIT</h2>
	<p class="pt-8 text-xl" style="font-family: nexa-light">
		La pulpe de fruit congelée est un produit non fermenté, ni concentré ni dilué, obtenu à 
    partir de la partie interne et comestible qui recouvre, dans la plupart des cas, les graines des fruits. 
    Nos fruits sont choisis avec les plus hauts standards de qualité pour garantir un produit 100% frais, 
  	naturel et sain. Cliquez sur les images pour en savoir plus sur nos produits.
	</p>
	<br/>
	<p class="text-[#EFC897] font-extrabold">La commande minimum est de 2 produits.</p>
	<p class="text-[#EFC897] font-extrabold">La commande maximum est de 25 produits.</p>
	<p class="mt-6 text-xl" style="font-family: nexa-light">
		Pour toute commande, contactez-nous via notre page Instagram, Facebook ou Whatsapp. 
		Livraison gratuite autour de Lyon et Villeurbanne les mardis et les vendredis. 
		Pour toute commande vers d’autres villes en France, veuillez nous contacter via notre 
		page Instagram, Facebook ou Whatsapp.
	</p>
</div>
<?php

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );
?>

<?php
/**
 * Hook: woocommerce_shop_loop_header.
 *
 * @since 8.6.0
 *
 * @hooked woocommerce_product_taxonomy_archive_header - 10
 */
do_action( 'woocommerce_shop_loop_header' );

if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );


?>
</div>
<?php get_footer( 'shop' ); ?>
</div>
<?php
