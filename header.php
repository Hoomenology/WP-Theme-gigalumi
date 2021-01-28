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
<link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.icon" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
    <?php do_action( 'storefront_before_header' ); ?>
    
    <?php if ( ! is_checkout() ) : ?>
    <div class="announcement-bar">
        <div class="container">
            <div class="announcement-bar-inner text-xs md:text-base">
                <a href="https://www.gigalumi.com/sales-launched.html" target="_blank"> Up to 50% OFF for New Website Launch | <span class="text-yellow-100">Shop Now →</span></a>
                <p>Email: service@gigalumi.com</p>
            </div>
        </div>
    </div>
    <?php endif; ?>

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
    global $no_breadcrumb;
    if ( ! is_checkout() && ! is_account_page() && empty($no_breadcrumb)) {
        do_action( 'storefront_before_content' );
    }
	?>

	<div id="content" class="site-content" tabindex="-1">

		<?php
		do_action( 'storefront_content_top' );
