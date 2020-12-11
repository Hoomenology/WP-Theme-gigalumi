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
                <a href="/shop"> Join and get 10% Off on Your first order <span class="text-yellow">Join Us >></span></a>
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
<!-- <div class="widget woocommerce widget_shopping_cart"><div class="widget_shopping_cart_content">

<ul class="woocommerce-mini-cart cart_list product_list_widget ">
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                <a href="http://local.gigalumi.com/cart/?remove_item=e780731c5fca87c038a24dfbd1e2299f&amp;_wpnonce=a217a85cd1" class="remove remove_from_cart_button" aria-label="Remove this item" data-product_id="37" data-cart_item_key="e780731c5fca87c038a24dfbd1e2299f" data-product_sku="">×</a>											<a href="http://local.gigalumi.com/shop/other-decoration/p-l-1c-copy-4/?attribute_pa_color=red">
                        <img width="324" height="324" src="http://local.gigalumi.com/wp-content/uploads/s3/gigalumi-test/uploads/2020/11/819IcJ5fXL._SL1200_-324x324.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" srcset="http://local.gigalumi.com/wp-content/uploads/s3/gigalumi-test/uploads/2020/11/819IcJ5fXL._SL1200_-324x324.jpg 324w, http://local.gigalumi.com/wp-content/uploads/s3/gigalumi-test/uploads/2020/11/819IcJ5fXL._SL1200_-300x300.jpg 300w, http://local.gigalumi.com/wp-content/uploads/s3/gigalumi-test/uploads/2020/11/819IcJ5fXL._SL1200_-1024x1024.jpg 1024w, http://local.gigalumi.com/wp-content/uploads/s3/gigalumi-test/uploads/2020/11/819IcJ5fXL._SL1200_-150x150.jpg 150w, http://local.gigalumi.com/wp-content/uploads/s3/gigalumi-test/uploads/2020/11/819IcJ5fXL._SL1200_-768x768.jpg 768w, http://local.gigalumi.com/wp-content/uploads/s3/gigalumi-test/uploads/2020/11/819IcJ5fXL._SL1200_-416x416.jpg 416w, http://local.gigalumi.com/wp-content/uploads/s3/gigalumi-test/uploads/2020/11/819IcJ5fXL._SL1200_-100x100.jpg 100w, http://local.gigalumi.com/wp-content/uploads/s3/gigalumi-test/uploads/2020/11/819IcJ5fXL._SL1200_.jpg 1200w" sizes="(max-width: 324px) 100vw, 324px">P-L-1C (Copy) - red						</a>
                                                        <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>1.00</bdi></span></span>				</li>
                            <li class="woocommerce-mini-cart-item mini_cart_item">
                <a href="http://local.gigalumi.com/cart/?remove_item=c2cd98f609228cdbd1dbc1be27eeced2&amp;_wpnonce=a217a85cd1" class="remove remove_from_cart_button" aria-label="Remove this item" data-product_id="31" data-cart_item_key="c2cd98f609228cdbd1dbc1be27eeced2" data-product_sku="">×</a>											<a href="http://local.gigalumi.com/shop/string-lights/p-l-1c-copy-2/?attribute_color=red">
                        <img width="324" height="324" src="http://local.gigalumi.com/wp-content/uploads/s3/gigalumi-test/uploads/2020/11/819IcJ5fXL._SL1200_-324x324.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" srcset="http://local.gigalumi.com/wp-content/uploads/s3/gigalumi-test/uploads/2020/11/819IcJ5fXL._SL1200_-324x324.jpg 324w, http://local.gigalumi.com/wp-content/uploads/s3/gigalumi-test/uploads/2020/11/819IcJ5fXL._SL1200_-300x300.jpg 300w, http://local.gigalumi.com/wp-content/uploads/s3/gigalumi-test/uploads/2020/11/819IcJ5fXL._SL1200_-1024x1024.jpg 1024w, http://local.gigalumi.com/wp-content/uploads/s3/gigalumi-test/uploads/2020/11/819IcJ5fXL._SL1200_-150x150.jpg 150w, http://local.gigalumi.com/wp-content/uploads/s3/gigalumi-test/uploads/2020/11/819IcJ5fXL._SL1200_-768x768.jpg 768w, http://local.gigalumi.com/wp-content/uploads/s3/gigalumi-test/uploads/2020/11/819IcJ5fXL._SL1200_-416x416.jpg 416w, http://local.gigalumi.com/wp-content/uploads/s3/gigalumi-test/uploads/2020/11/819IcJ5fXL._SL1200_-100x100.jpg 100w, http://local.gigalumi.com/wp-content/uploads/s3/gigalumi-test/uploads/2020/11/819IcJ5fXL._SL1200_.jpg 1200w" sizes="(max-width: 324px) 100vw, 324px">P-L-1C (Copy) - red						</a>
                                                        <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>1.00</bdi></span></span>				</li>
                </ul>

<p class="woocommerce-mini-cart__total total">
    <strong>Subtotal:</strong> <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>2.00</bdi></span>	</p>


<p class="woocommerce-mini-cart__buttons buttons"><a href="http://local.gigalumi.com/cart/" class="button wc-forward">View cart</a><a href="http://local.gigalumi.com/checkout/" class="button checkout wc-forward">Checkout</a></p>



</div></div> -->
	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
    if ( ! is_checkout()) {
        do_action( 'storefront_before_content' );
    }
	?>

	<div id="content" class="site-content" tabindex="-1">

		<?php
		do_action( 'storefront_content_top' );
