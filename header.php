<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
    <?php do_action( 'storefront_before_header' ); ?>
    
    <?php if ( ! is_checkout() ) { ?>
    <div class="announcement-bar">
        <div class="container">
            <div class="announcement-bar-inner">
                <a href="/shop"> Join and get 10% Off on Your first order <span class="text-yellow-100">Join Us >></span></a>
            </div>
        </div>
    </div>
    <?php } ?>

	<header id="masthead" class="site-header flex items-center" role="banner" style="<?php storefront_header_styles(); ?>">

		<?php

        // do_action( 'storefront_header' );
        do_action( 'gigalumi_header' );
		?>

    </header><!-- #masthead -->
    
    <?php
        if ( ! is_checkout() ) {
            do_action( 'gigalumi_nav' );
        }
    ?>

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
    if ( ! is_checkout() && ! is_account_page()) {
        do_action( 'storefront_before_content' );
    }
	?>

	<div id="content" class="site-content" tabindex="-1">

		<?php
		do_action( 'storefront_content_top' );
