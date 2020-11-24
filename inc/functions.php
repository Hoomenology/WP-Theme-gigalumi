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

add_action( 'rest_api_init', 'register_rest_routes' );

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
//    $id = wp_insert_post( $data, true );
//
//    if ( is_wp_error( $id ) ) {
//        return rest_ensure_response( ['code' => 500, 'message' => 'database server error'] );
//    }
//
//    // Set coupon meta
//    update_post_meta( $id, 'plat', 2 );
    
    return rest_ensure_response( ['code' => 200, 'data' => $data] );
}