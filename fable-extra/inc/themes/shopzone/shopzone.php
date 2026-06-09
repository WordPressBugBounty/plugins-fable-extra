<?php

/**
 * @package   ShopZone
 */

require WPFE_PATH . 'inc/themes/shopire/customizer-repeater-default.php';
require WPFE_PATH . 'inc/themes/shopire/custom-style.php';
require WPFE_PATH . 'inc/themes/shopire/customizer/shopire-footer-section.php';
require WPFE_PATH . '/inc/themes/shopire/customizer/shopire-slider-section.php';
require WPFE_PATH . '/inc/themes/shopire/customizer/shopire-information-section.php';
require WPFE_PATH . '/inc/themes/shopire/customizer/shopire-cat-section.php';
require WPFE_PATH . '/inc/themes/shopire/customizer/shopire-popular-product-section.php';
require WPFE_PATH . '/inc/themes/shopire/customizer/shopire-cta-section.php';
require WPFE_PATH . '/inc/themes/shopire/customizer/shopire-blog-section.php';
require WPFE_PATH . 'inc/themes/shopire/customizer/shopire-selective-refresh.php';
require WPFE_PATH . 'inc/themes/shopire/customizer/shopire-selective-partial.php';

if (! function_exists('fable_extra_shopire_frontpage_sections')) :
	function fable_extra_shopire_frontpage_sections()
	{
		require WPFE_PATH . 'inc/themes/shopzone/front/section-product-cat.php';
		require WPFE_PATH . 'inc/themes/shopzone/front/section-slider.php';
		require WPFE_PATH . 'inc/themes/shopway/front/section-information.php';
		require WPFE_PATH . 'inc/themes/shopire/front/section-popular-product.php';
		require WPFE_PATH . 'inc/themes/shopire/front/section-cta.php';
		require WPFE_PATH . 'inc/themes/shopire/front/section-blog.php';
	}
	add_action('Fable_Extra_Shopire_frontpage', 'fable_extra_shopire_frontpage_sections');
endif;


function fable_extra_shopzone_customize_setting( $wp_customize ) {
	$wp_customize->add_section(
		'product_cat_options', array(
			'title' => esc_html__( 'Product Category Section', 'fable-extra' ),
			'priority' => 0,
			'panel' => 'shopire_frontpage_options',
		)
	);
	$wp_customize->remove_control('shopire_product_cat_header_options');
	$wp_customize->remove_control('shopire_product_cat_ttl');
	$wp_customize->remove_control('shopire_product_cat_btn_lbl');
	$wp_customize->remove_control('shopire_product_cat_btn_url');
}
add_action( 'customize_register', 'fable_extra_shopzone_customize_setting',99 );