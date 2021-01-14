<?php

//开启WordPress预览webp缩略图预览
function mimvp_file_is_displayable_image($result, $path) {
    $info = @getimagesize( $path );
    if($info['mime'] == 'image/webp') {
        $result = true;
    }
    return $result;
}
add_filter( 'file_is_displayable_image', 'mimvp_file_is_displayable_image', 10, 2 );

function euhomy_enqueue_scripts() {
    wp_enqueue_script( 'euhomy-main', get_stylesheet_directory_uri() . '/assets/js/main.js' );
}

add_action( 'wp_enqueue_scripts', 'euhomy_enqueue_scripts' );

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */

// add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}

function gigalumi_product_add_to_cart_url($url, $product) {
    $type = $product->get_type();
    switch ( $type ) {
        case 'simple':
        default:
            return $url;
        case 'variable':
            if ( $product->is_purchasable() && $product->is_in_stock() ) {
                $is_in_stock_num = 0;
                $variations = $product->get_available_variations();
                foreach ( $variations as $k => $v ) {
                    if ( $v['is_in_stock'] === false ) {
                        unset($variations[$k]);
                    } else {
                        $is_in_stock_num += 1;
                        if ( $is_in_stock_num > 1 ) {
                            break;
                        }
                    }
                }
                if ( $is_in_stock_num === 1 ) {
                    return remove_query_arg(
                        'added-to-cart',
                        add_query_arg(
                            array(
                                'variation_id' => $variations[0]['variation_id'],
                                'add-to-cart'  => $product->get_id(),
                            ),
                            $product->get_permalink()
                        )
                    );
                } else {
                    return $url;
                }
            } else {
                return $url;
            }
    }
}

add_filter( 'woocommerce_product_add_to_cart_url', 'gigalumi_product_add_to_cart_url', 10, 2);


add_filter( 'woocommerce_product_add_to_cart_text', 'gigalumi_product_add_to_cart_text', 10, 2);

add_filter( 'woocommerce_loop_add_to_cart_link', 'gigalumi_product_add_to_cart_link', 10, 2);

function gigalumi_product_add_to_cart_text($text, $product) {
    return 'Add to Cart';
}

function gigalumi_product_add_to_cart_link($link, $product) {
    return str_replace( 'Add to Cart', '<svg class="h-6 w-6 mx-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" /></svg>', $link );
}

add_action( 'woocommerce_before_shop_loop', 'gigalumi_woo_filter' );

function gigalumi_woo_filter() {
    echo do_shortcode('[wpf-filters id=1]');
}

add_action( 'woocommerce_before_quantity_input_field', 'before_quantity_input_field' );
add_action( 'woocommerce_after_quantity_input_field', 'after_quantity_input_field' );

function before_quantity_input_field() {
    echo '<span class="quantity-desc">QTY</span><div class="quantity-selector"><button type="button" onclick="quantity_pick(this,-1);" class="quantity-selector-button" data-action="decrease-picker-quantity" aria-label="Decrease quantity by 1" title="Decrease quantity by 1" value="1"><svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
  </svg></button>';
}

function after_quantity_input_field() {
    echo '<button type="button" onclick="quantity_pick(this,1);" class="quantity-selector-button" data-action="increase-picker-quantity" aria-label="Increase quantity by 1" title="Increase quantity by 1" value="1"><svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
  </svg></button></div>';
}

add_action( 'woocommerce_register_form', 'the_gigalumi_register_notice' );

function the_gigalumi_register_notice() {
    echo '<p>After you create an account on gigalumi.com, you will be a member of 
    Gigalumi, and can enjoy different member benefits according to your 
    membership level. </p>';
}

/**
 * Change number of products that are displayed per page (shop page)
 */
add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 100 );

function new_loop_shop_per_page( $per_page ) {
    // $cols contains the current number of products per page based on the value stored on Options –> Reading
    // Return the number of products you wanna show per page.
    $per_page = 36;
    return $per_page;
}

add_filter( 'woocommerce_cart_totals_coupon_label', 'gigalumi_coupon_label', 10, 2);

function gigalumi_coupon_label( $lable, $coupon) {
    return $lable . '<br/>[ <span class="text-xs">' . $coupon->get_description() . '</span> ]';
}

add_filter( 'woocommerce_gallery_image_size', 'gigalumi_gallery_image_size' );

function gigalumi_gallery_image_size() {
    return '100%';
}

// add_action( 'rest_api_init', 'register_rest_routes' );

function register_rest_routes() {
    register_rest_route( 'gigalumi/v1', 'post_for_coupon', [ 'methods' => 'post', 'callback' => 'exec_coupon_post'] );
}

function exec_coupon_post( $request ) {
    $user_id = get_current_user_id();
    if( $user_id === 0  ) {
        return new WP_REST_Response(null, 403);
    }

    $data = $request->get_params();

    if (empty($data['platform'])) {
        return rest_ensure_response( ['code' => 500, 'msg' => 'platform required'] );
    }

    if (empty($data['order_number'])) {
        return rest_ensure_response( ['code' => 500, 'msg' => 'order_number required'] );
    }

    if (empty($data['q1'])) {
        return rest_ensure_response( ['code' => 500, 'msg' => 'Q1 answer required'] );
    }

    if (empty($data['q2'])) {
        return rest_ensure_response( ['code' => 500, 'msg' => 'Q2 answer required'] );
    }

    


    $data['post_type'] = 'acquire_coupon';
    $data['post_status'] = 'inherit';
    $data['post_author'] = $user_id;
   /*$id = wp_insert_post( $data, true );

   if ( is_wp_error( $id ) ) {
       return rest_ensure_response( ['code' => 500, 'message' => 'database server error'] );
   }

   // Set coupon meta
   update_post_meta( $id, 'plat', 2 );
    */
    return rest_ensure_response( ['code' => 200, 'data' => $data] );
}