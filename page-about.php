<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package storefront
 */
global $no_breadcrumb;
$no_breadcrumb = true;

get_header(); ?>

	<div id="primary" class="content-area">

        <div class="about-banner bg-black w-screen">
            <div class="container">
                <div class="banner-inner relative">
                    <img  src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/about-banner.webp" alt="">
                    <div class="banner-content absolute top-0 flex h-full items-center justify-center w-full">
                        <h1 class="about-banner-content-title text-white font-bold text-xl text-center  md:text-left ">WE ILLUMINATE THE NIGHT WITH SUNLIGHT</h1>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="about-why">
            <div class="container">
                <div class="why-inner flex flex-col justify-center md:h-115 md:p-30 ">
                    <h1 class=" font-bold mb-4 md:mb-10 relative">WHY SHOULD WE<br/> CHOOSE SOLAR ENERGY?</h1>
                    <p class="mb-4 md:mb-10">That’s the question we keep asking ourselves. One of the most obvious reason is helping the environment.</p>
                    <p>For us, beyond that, we would like to create a more convenient life-style for our users: easy installation, lower cost, long lifespan, and most important, reduced carbon footprint. And that’s how we design our products. </p>
                </div>
            </div>
        </div>

        <div class="about-families">
            <div class="container">
                <div class="families-inner" >
                    <div class="families-content text-white flex flex-col items-center justify-center text-center  h-full md:mx-64">
                        <p>As a part of Gigalumi, I’m glad to see that we brought over <span class="text-yellow-200"> 500,000+ </span> families a more convenient and environment friendly life. </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-how">
            <div class="container">
                <div class="how-inner flex justify-between flex-col md:flex-row md:p-30 ">
                    <div class="how-content flex flex-col justify-center md:pr-24">
                        <h2 class="uppercase font-bold mb-4 md:mb-10 relative">How important is<br/> outdoor lighting to a family? </h2>
                        <p class="text-sm">I’m not sure about the answer. But when I see my daughter’s smile under the string light we hang together in the garden, I feel contented. When I walk through my garden in the night, the light from path lights make me feel safe. I think outdoor lighting is not just a decoration, but also an emotional company.</p>
                    </div>
                    <img class="rounded-full  " src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/about-baby.webp" alt="">
                </div>
            </div>
        </div>

        <div class="about-aim">
            <div class="container">
                <div class="aim-inner bg-yellow-300 text-black text-center text-base md:text-2xl font-semibold py-10">
                    We aim to help you to create a better life.
                </div>
            </div>
        </div>
	</div><!-- #primary -->

<?php
do_action( 'storefront_sidebar' );
get_footer();
