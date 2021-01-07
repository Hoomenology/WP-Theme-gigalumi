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

$featured_categories = [
    [
        'title' => 'Home Party',
        'url' => '/product-tag/home-party',
        'img' => 'home-categories-home-party.webp',
    ],
    [
        'title' => 'Multicolor',
        'url' => '/product-tag/multi-color',
        'img' => 'home-categories-2.webp',
    ],
    [
        'title' => 'For Patio',
        'url' => '/product-tag/patio-decor',
        'img' => 'home-categories-3.webp',
    ],
    [
        'title' => 'Hanging Lights',
        'url' => '/product-category/hanging-lights',
        'img' => 'home-categories-4.webp',
    ],
    [
        'title' => 'Color-changing',
        'url' => '/product-tag/color-changing',
        'img' => 'home-categories-5.webp',
    ],
    [
        'title' => 'For DIY',
        'url' => '/product-tag/for-diy',
        'img' => 'home-categories-6.webp',
    ],
];

$sales_info = [
    [
        'title' => '<span class="text-3xl">CELEBRATE WITH US!</span><br/>20% OFF <span class="text-xl">ON</span> EVERYTHING!',
        'url' => '/shop',
        'img' => 'home-sales-1.webp',
        'go-title' => 'SHOP ALL PRODUCTS NOW'
    ],
    [
        'title' => "COUPON<br/> FOR NEW SIGN UP",
        'url' => '/my-account',
        'img' => 'home-sales-2.webp',
        'go-title' => 'SIGN UP NOW'
    ]
];

get_header(); ?>

	<div id="primary" class="content-area">

        <div class="home-banner">
            <div class="container banner-inner h-full relative">
                <div class="banner-off absolute -top-1 -left-1 text-white font-bold  text-lg flex flex-col items-center pt-2 px-9 pb-15 "><p>UP TO</p><p class=" text-5xl leading-10">50%</p><p>OFF</p>
                </div>
                <img class="absolute bottom-0 right-0" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/home-banner-product.webp" alt="">
                <div class="banner-content flex flex-col h-full justify-center items-left text-white">
                    <p class="text-5xl font-bold pt-28">WE NOW LAUNCHED!</p>
                    <p class="pb-4 text-3xl leading-10">Our new website is online now, <br/>Come and celebrate with us!</p>
                    <p class="pb-4 text-xl">+ Free delivery over $59</p>
                    <p class="pb-4 text-blue-300">Special Offer Duration: 8 Jan 2021 to 31 Jan 2021</p>
                    <a class="go-shop inline-block border-2 border-white rounded-5 w-40 text-center font-semibold my-3 p-3" href="/shop">SHOP ALL SALES</a>
                </div>
            </div>
        </div>

        <div class="shop-info container flex justify-around items-center h-24 text-base text-black ">
            <div class="shop-info-item flex items-center">
                <svg class="w-10 h-10 mx-5 text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 22 22" stroke="currentColor"><path fill="#fff" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" /></svg>
            <p>Free Shipping on Orders Over $99</p>
            </div>
            <div class="shop-info-item flex items-center">
                <svg class="w-10 h-10 mx-5 text-blue-400" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M864 483.2V384a352 352 0 0 0-704 0v99.2A160 160 0 0 0 192 800h96a64 64 0 0 0 64-64v-192a64 64 0 0 0-64-64H224v-96a288 288 0 0 1 576 0v96h-64a64 64 0 0 0-64 64v192a64 64 0 0 0 64 64h58.24A96 96 0 0 1 704 864h-101.76a96 96 0 1 0 0 64H704a160 160 0 0 0 157.12-130.88A160 160 0 0 0 864 483.2zM160 730.56a96 96 0 0 1 0-181.12zM288 544v192H224v-192z m224 384a32 32 0 1 1 32-32 32 32 0 0 1-32 32z m288-192h-64v-192h64z m64-5.44v-181.12a96 96 0 0 1 0 181.12z" fill="currentColor"></path></svg>
                <p>Reply Within 24 hours</p>
            </div>
            <div class="shop-info-item flex items-center">
                <svg class="w-10 h-10 mx-5 text-blue-400" viewBox="0 0 26 26" role="presentation">
                    <g transform="translate(1 1)" stroke-width="1.5" fill="none" fill-rule="evenodd">
                        <path stroke="currentColor" d="M8 4h8v7"></path>
                        <path stroke="currentColor" stroke-linecap="square" d="M11 7L8 4l3-3"></path>
                        <circle stroke="currentColor" stroke-linecap="square" cx="6" cy="20" r="2"></circle>
                        <circle stroke="currentColor" stroke-linecap="square" cx="18" cy="20" r="2"></circle>
                        <path stroke="currentColor" stroke-linecap="square" d="M21 5l-2 10H5L3 0H0"></path>
                    </g>
                </svg>
                <p>Returns & Exchange within 30 days</p>
            </div>
        </div>

        <div class="featured-products bg-gray-100">
            <div class="container">
                <?php storefront_featured_products(['title' => 'FEATURED PRODUCTS']);?>
            </div>
        </div>

        <div class="sales-info">
            <div class="container">
                <section class="storefront-product-section">
                    <ul class="grid grid-cols-2 gap-7 ">
                        <?php foreach ($sales_info as $v) :?>
                        <li class="relative">
                            <img class="w-full" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/<?php echo $v['img']; ?>" alt="">
                            <div class="absolute top-0 w-full h-full flex justify-center">
                                <div class=" h-full flex flex-col items-center justify-end">
                                    <h2 class="section-title text-white font-semibold"><?php echo $v['title']; ?></h2>
                                    <hr class="w-full border-solid border-white opacity-25 mb-2">
                                    <hr class="w-full border-solid border-white opacity-25">
                                    <a href="<?php echo $v['url']; ?>" class="text-white font-semibold my-5"><?php echo $v['go-title']; ?> >></a>
                                </div>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </section>
            </div>
        </div>
        
        <div class="featured-categories bg-blue-200">
            <div class="container">
                <section class="storefront-product-section storefront-product-categories">
                    <h2 class="section-title">FEATURED CATEGORIES</h2>
                    <div>
                        <ul class="grid grid-cols-3 md:grid-cols-6 gap-8">
                            <?php foreach($featured_categories as $v) : ?>
                            <li>
                                <a href="<?php echo $v['url']; ?>" class="flex flex-col items-center">
                                    <img class="my-7" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/<?php echo $v['img']?>" alt="">
                                    <p><?php echo $v['title']; ?></p>
                                </a>
                            </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </section>
            </div>
        </div>

        <div class="sale-products">
            <div class="container">
                <?php storefront_on_sale_products(['title' => 'SALES']);?>
            </div>
        </div>

        <div class="home-slogan container py-12 pl-24">
            <h3 class="font-semibold">WE ILLUMINATE THE NIGHT WITH SUNLIGHT. </h3>
        </div>
	</div><!-- #primary -->

<?php
do_action( 'storefront_sidebar' );
get_footer();
