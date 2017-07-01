<?php
/**
 * chd_portfolio Theme Customizer
 *
 * @package chd_portfolio
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function chd_portfolio_customize_register( $wp_customize ) {
	$wp_customize->getchd_portfolioetting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->getchd_portfolioetting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->getchd_portfolioetting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'chd_portfolio_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'chd_portfolio_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'chd_portfolio_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function chd_portfolio_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function chd_portfolio_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function chd_portfolio_customize_preview_js() {
	wp_enqueue_script( 'chd_portfolio_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'chd_portfolio_customize_preview_js' );
