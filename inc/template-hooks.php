<?php
/**
 * Gigalumi hooks
 *
 * @package gigalumi
 */

/**
 * General
 */

/**
 * Header
 */
add_action( 'gigalumi_header', 'gigalumi_header_container', 0 );


/**
 * Nav
 */
add_action( 'gigalumi_nav', 'gigalumi_nav_container', 0 );

/**
 * Content
 */

add_action( 'gigalumi_customer_service', 'gigalumi_customer_service_container', 0 );
add_action( 'gigalumi_about', 'gigalumi_about_container', 0 );


/**
 * Footer
 */

add_action( 'gigalumi_footer', 'gigalumi_footer_container', 0 );