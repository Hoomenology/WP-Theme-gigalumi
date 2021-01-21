<?php

function gigalumi_header_container() {
    ?>
    <?php if ( ! is_checkout() ) {?>
    <div class="container grid gap-2 grid-cols-3 md:grid-cols-0 md:flex md:flex-row items-center text-black my-4">
        <div class="header-mini-menu flex-1 md:hidden"  >
            <div id="header-svg-nav"  onclick="shownav()">
                <svg  class="w-6 h-6 md:w-8 md:h-8 text-green-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" ><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>
                <svg class="w-6 hidden h-6 md:w-8 md:h-8 text-green-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" ><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
            </div>
        </div>
        <div class="header-branding md:order-first flex-1 flex items-center justify-center md:justify-start">
            <a href="/" rel="home">
                <picture>
                    <source srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logo.webp" media="(min-width: 750px)">
                    <img class="h-8 md:h-15" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logo-mini.webp" alt="">
                </picture>
            </a>
        </div>
        <div class="header-action md:order-last flex-1 md:divide-x flex flex-row items-center text-xs">
            <div class="help hidden md:block mx-7">
                <a href="/customer-service/" class="flex flex-row items-center mx-3">
                    <svg class="h-6 w-6 mx-3 text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                    </svg>
                    Help
                </a>
            </div>
            <div class="account flex flex-row items-center justify-end w-full">
                <a href="/my-account" class="flex flex-row items-center">
                    <svg class="h-6 w-6 md:h-9 md:w-9 md:mx-3 text-green-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="hidden md:block">
                        <?php if ( is_user_logged_in() ) { ?>
                        <p>MY ACCOUNT</p>
                        <?php } else { ?>
                        <p class="text-gray-700">Sign In</p>
                        <?php } ?>
                    </div>
                </a>
                <div class="cart relative">
                    <a href="/cart" class="flex flex-row items-center ml-5 " 
                    <?php if ( ! ( is_cart() || is_checkout() ) ) {?>
                    onmouseover="header_cart_over(this);" 
                    <?php }?>
                    >
                        <svg class="h-6 w-6 md:h-8 md:w-8 md:mx-3 text-green-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg><span class="hidden md:block">CART ( <?php echo WC()->cart->get_cart_contents_count(); ?> )</span>
                    </a>
                    <?php if ( ! ( is_cart() || is_checkout() ) ) {?>
                    <svg class="nav-triangle-borderless hidden" viewBox="0 0 20 9" role="presentation"><path d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z" fill="#ffffff"></path></svg>
                    <div class="header-cart-list hidden" onmouseleave="header_cart_leave(this);">
                        <?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
        <div class="header-search col-span-3 md:order-1 flex-1 flex items-center">
            <form role="search" method="get" class="w-full m-0" action="/">
                <label for="search-field" class="flex flex-row items-center bg-gray-100 border rounded-5 border-gray-300 h-10 md:h-12 px-3">
                    <input type="search" id="search-field" class="flex-auto bg-gray-100 text-gray-700" placeholder="Search for gigalumi" required value="" name="s">
                    <button type="submit" value="Search" class=""><svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg></button>
                </label>
                <input type="hidden" name="post_type" value="product">
            </form>
        </div>
    
    <?php } else {?>
    <div class="container flex flex-row items-center text-black my-4">
        <div class="header-branding flex md:justify-start">
            <picture>
                <source srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logo.webp" media="(min-width: 750px)">
                <img class="h-8 md:h-15" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logo-mini.webp" alt="">
            </picture>
        </div>
        <div class="header-action flex-1 md:divide-x flex flex-row items-center text-xs font-semibold ">
            <div class="account flex flex-row items-center justify-between md:justify-end w-full">
                <div class="flex flex-row items-center pl-2 md:pl-0 text-sm md:text-xs">
                    <svg class="h-9 w-9 mx-3 text-green-200 hidden md:block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg><span class="hidden md:block">SECURE &nbsp;</span> CHECKOUT
                </div>
                <div class="cart relative">
                    <a href="/cart" class="flex flex-row items-center ml-5 ">
                        <svg class="h-8 w-8 mx-3 text-green-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>BACK TO CART
                    </a>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
    <hr>
    <?php
}

function gigalumi_nav_container() {
    $shop_nav = [
        [
            'title' => 'Pathway Lights',
            'url' => '/shop/?filter_cat_list_0=20',
            'children' => [
                [
                    'title' => 'Set of 4',
                    'url' => '/shop/?filter_cat_list_0=20&product_tag_2=set-of-4'
                ],
                [
                    'title' => 'Set of 6',
                    'url' => '/shop/?filter_cat_list_0=20&product_tag_2=set-of-6'
                ],
                [
                    'title' => 'Multi-color',
                    'url' => '/shop/?filter_cat_list_0=20&product_tag_2=multi-color'
                ],
                [
                    'title' => 'Color-Changing',
                    'url' => '/shop/?filter_cat_list_0=20&product_tag_2=color-changing'
                ],
                [
                    'title' => 'For DIY',
                    'url' => '/shop/?filter_cat_list_0=20&product_tag_2=for-diy'
                ],
            ]
        ],
        [
            'title' => 'String Lights',
            'url' => '/shop/?filter_cat_list_0=19',
            'children' => [
                [
                    'title' => 'Festival Décor',
                    'url' => '/shop/?filter_cat_list_0=19&product_tag_2=festival-decor'
                ],
                [
                    'title' => 'Battery Powered',
                    'url' => '/shop/?filter_cat_list_0=19&product_tag_2=battery-powered'
                ],
                [
                    'title' => 'Solar Powered',
                    'url' => '/shop/?filter_cat_list_0=19&product_tag_2=solar-powered'
                ],
            ]
        ],
        [
            'title' => 'Deck & Wall Lights',
            'url' => '/shop/?filter_cat_list_0=23',
            'children' => [
                [
                    'title' => 'Cool White Light',
                    'url' => '/shop/?filter_cat_list_0=23&filter_bulb-color=cool_white'
                ],
                [
                    'title' => 'Warm White Light',
                    'url' => '/shop/?filter_cat_list_0=23&filter_bulb-color=warm_white'
                ],
                [
                    'title' => 'Stairs / Fence Lights',
                    'url' => '/shop/?filter_cat_list_0=23&filter_bulb-color=stairs-fence-lights'
                ],
            ]
        ],
        [
            'title' => 'Hanging Lights',
            'url' => '/shop/?filter_cat_list_0=21',
            'children' => [
                [
                    'title' => 'Festival Décor',
                    'url' => '/shop/?filter_cat_list_0=21&product_tag_2=festival-decor'
                ],
                [
                    'title' => 'For DIY',
                    'url' => '/shop/?filter_cat_list_0=21&product_tag_2=for-diy'
                ],
                [
                    'title' => 'Christmas Décor',
                    'url' => '/shop/?filter_cat_list_0=21&product_tag_2=christmas-decor'
                ],
            ]
        ],
        [
            'title' => 'Others',
            'url' => '/shop/?filter_cat_list_0=24',
            'children' => [
                [
                    'title' => 'Home Party',
                    'url' => '/shop/?filter_cat_list_0=24&product_tag_2=home-party'
                ],
                [
                    'title' => 'Garden Décor ',
                    'url' => '/shop/?filter_cat_list_0=24&product_tag_2=garden-decor'
                ],
                [
                    'title' => 'Patio Décor',
                    'url' => '/shop/?filter_cat_list_0=24&product_tag_2=patio-decor'
                ],
                [
                    'title' => 'Multi-Color',
                    'url' => '/shop/?filter_cat_list_0=24&product_tag_2=multi-color'
                ],
                [
                    'title' => 'Color-Changing',
                    'url' => '/shop/?filter_cat_list_0=24&product_tag_2=color-changing'
                ],
            ]
        ],
    ];
    ?>
        <nav id="site-navigation" class=" hidden  md:block border-t border-b border-gray-300 md:relative bg-white" role="navigation" aria-label="Primary Navigation">

            <div class="container">
                <ul id="mega-menu-primary" class="nav-bar flex flex-col md:flex-row md:items-center justify-between md:h-15">
                    <li class="nav-bar-item" id="mega-menu-item-252" onmouseover="menu_link_over(this);">
                        <a class="nav-bar-link block h-15 leading-15 text-sm font-bold" href="/shop" aria-haspopup="true" aria-expanded="false" tabindex="0">
                            Shop<span class="mega-indicator"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="md:hidden"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg></a>
                        <div class="sub-menu z-100 absolute hidden w-full"  onmouseleave="menu_link_leave(this);">
                            <div class="container">
                                <div class="shop-navigation flex flex-row bg-white p-10 border-t  border-gray-800">
                                    <ul class="nav-grid flex-grow grid grid-cols-3 gap-10 justify-items-center">
                                        <?php foreach($shop_nav as $nav) :?>
                                        <li class="nav-grid-item w-full">
                                            <a class="nav-grid-link text-lg font-bold flex mb-3 hover:text-green-200" href="<?php echo $nav['url'];?>">
                                                <?php echo $nav['title']; ?><svg class="w-7 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                                </svg>
                                            </a>
                                            <?php if ($nav['children']) :?>
                                            <ul class="nav-dropdown ">
                                                <?php foreach($nav['children'] as $nav_child) :?> 
                                                <li class="nav-dropdown-item mb-3">
                                                    <a class="nav-dropdown-link hover:underline hover:text-green-200" href="<?php echo $nav_child['url']; ?>"><?php echo $nav_child['title']; ?></a>
                                                </li>
                                                <?php endforeach;?> 
                                            </ul>
                                            <?php endif;?>
                                        </li>
                                        <?php endforeach;?>
                                    </ul>
                                    <div class="flex flex-col items-center ml-9">
                                        <img class="max-w-none w-75" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/shop-nav-img.webp" alt="">
                                        <a class="my-10 text-xl text-green-200 flex" href="">NEW ARRIVALS<svg class="w-8 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-bar-item" id="mega-menu-item-251">
                        <a class="nav-bar-link block h-15 leading-15 text-sm font-bold" href="/product-category/pathway-lights/" tabindex="0">
                            Solar Path Lights
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="md:hidden"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                        </a>
                    </li>
                    <li class="nav-bar-item" id="mega-menu-item-251">
                        <a class="nav-bar-link block h-15 leading-15 text-sm font-bold" href="/product-category/string-lights/" tabindex="0">
                            Solar String Lights
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="md:hidden"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                        </a>
                    </li>
                    <li class="nav-bar-item" id="mega-menu-item-251">
                        <a class="nav-bar-link block h-15 leading-15 text-sm font-bold" href="/product-category/deck-wall-lights/" tabindex="0">
                            Deck Lights & Others
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="md:hidden"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                        </a>
                    </li>
                    <li class=" nav-bar-item " id="mega-menu-item-251">
                        <a class="nav-bar-link text-red-200 block h-15 leading-15 text-sm font-bold" href="/shop/?pr_onsale=1" tabindex="0">
                            SALE
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="md:hidden"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    <?php
}

function gigalumi_customer_service_container() {
    $service = [
        [
            'title' => 'Payment Methods',
            'id' => 'service-payment',
            'content' => 'You are safe with us. We use high end encrypted technology partnering with Stripe to securely save your payments information for you to easily buy for next time. 
            
            
            '
        ],
        [
            'title' => 'Deliver Time',
            'id' => 'service-deliver',
            'content' => 'It normally takes 7-15 days for shipping.'
        ],
        [
            'title' => 'Warranty',
            'id' => 'service-warranty',
            'content' => 'Every Gigalumi product has 180 days of warranty after your purchase.<br> 

            Help us to answer 3 questions and you can extend warranty to 270 days!'
        ],
        [
            'title' => 'Return & Exchange',
            'id' => 'service-exchange',
            'content' => 'You can return and exchange within 30 days after your purchasing. Please contact us for return or exchanges.'
        ],
        [
            'title' => 'Contact Us',
            'id' => 'service-contact',
            'content' => 'Looking for get in touch? Email us at <span class="active font-bold">service@gigalumi.com</span>, and we will get back to you within 24 hours. <br>
            You can also call us at <span class="active font-bold">1-888-829-9252</span>. We will be happy to hear your voice!'
        ],
    ];
    $service_count = count($service);
    ?>
    <div class="container">
        <h1 class="my-6 font-bold">CUSTOMER SERVICE</h1>
        <div class="contomer-service flex my-10 divide-x">
            <div class="menu w-64 mr-8 mb-10">
                <ul>
                    <?php for($i = 0; $i < $service_count; $i++): ?>
                    <li>
                        <a class="flex items-center justify-between hover:text-green-200 <?php echo $i == 0 ? 'active' : '';?> w-64 mb-9 font-semibold " href="#<?php echo $service[$i]['id'];?>" onclick="click_show_content(this);return false;" data-target="#<?php echo $service[$i]['id'];?>">
                            <p><?php echo $service[$i]['title'];?></p>
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                        </a>
                    </li>
                    <?php endfor; ?>
                </ul>
            </div>
            <div class="content pl-8">
                <ul>
                    <?php for($i = 0; $i < $service_count; $i++): ?> 
                    <li id="<?php echo $service[$i]['id'];?>" class="click-item <?php echo $i == 0 ? '' : 'hidden'; ?>">
                        <h5 class="mb-3 font-semibold"><?php echo $service[$i]['title'];?></h5>
                        <div class="leading-12 w-full">
                            <?php echo $service[$i]['content'];?>
                            <?php if ($i == 0) : ?>
                            <div class="bg-gray-100 rounded-10 w-1/2 p-10 flex my-8 items-center justify-between">
                                <span class="font-semibold">1.Credit Card (Stripe)</span>
                                <?php gigalumi_payment_list_icon();?> 
                            </div>
                            <div class="bg-gray-100 rounded-10 w-1/2 p-10 flex my-8 items-center justify-between" >
                                <span class="font-semibold">2.PayPal  <a class="active border-b border-green-200 mx-1" href="https://www.paypal.com/us/webapps/mpp/paypal-popup" onclick="javascript:window.open('https://www.paypal.com/us/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;">What is PayPal?</a></span>
                                <span>
                                    <img class="h-7" src="https://www.paypalobjects.com/digitalassets/c/website/logo/full-text/pp_fc_hl.svg" alt="">
                                </span>
                            </div>
                            <?php endif;?>
                        </div>
                    </li>
                    <?php endfor; ?>
                </ul>
            </div>
        </div>
    </div>
    <?php
}

function gigalumi_footer_container() {

    if ( ! is_checkout()) {

    ?>

    <?php if ( !is_home() ) : ?>

    <div class="shop-info container flex justify-around items-center h-24 text-base text-black ">

        <div class="shop-info-item flex items-center">

            <svg class="w-10 h-10 mx-5 text-green-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 22 22" stroke="currentColor"><path fill="#fff" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" /></svg>

           <p>Free Shipping on Orders Over $99</p>

        </div>

        <div class="shop-info-item flex items-center">

            <svg class="w-10 h-10 mx-5 text-green-200" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M864 483.2V384a352 352 0 0 0-704 0v99.2A160 160 0 0 0 192 800h96a64 64 0 0 0 64-64v-192a64 64 0 0 0-64-64H224v-96a288 288 0 0 1 576 0v96h-64a64 64 0 0 0-64 64v192a64 64 0 0 0 64 64h58.24A96 96 0 0 1 704 864h-101.76a96 96 0 1 0 0 64H704a160 160 0 0 0 157.12-130.88A160 160 0 0 0 864 483.2zM160 730.56a96 96 0 0 1 0-181.12zM288 544v192H224v-192z m224 384a32 32 0 1 1 32-32 32 32 0 0 1-32 32z m288-192h-64v-192h64z m64-5.44v-181.12a96 96 0 0 1 0 181.12z" fill="currentColor"></path></svg>

            <p>Reply Within 24 hours</p>

        </div>

        <div class="shop-info-item flex items-center">

            <svg class="w-10 h-10 mx-5 text-green-200" viewBox="0 0 26 26" role="presentation">

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

    <?php endif;?>

    <div class="footer-block border-t border-green-200">

        <div class="container">
            <div class="footer-block-inner flex flex-col lg:flex-row justify-between md:my-12 ">
                <div class="footer-map text-xm">
                    <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-32">
                        <li class="map-item row-span-2" >
                            <p class="font-bold my-3 text-base" onclick="toggle_content(this);return false;" data-status="1">Shop Gigalumi<i class="fa fa-minus float-right"></i></p>
                            <ul class="map-item-child content ">
                                <li class="my-4">

                                    <a class="map-link hover:text-green-200" href="/shop/?orderby=date">New Arrival</a>

                                </li>

                                <li class="my-4">

                                    <a class="map-link hover:text-green-200" href="/product-category/pathway-lights/">Path lights</a>

                                </li>

                                <li class="my-4">

                                    <a class="map-link hover:text-green-200" href="/product-category/deck-wall-lights/">Deck lights</a>

                                </li>

                                <li class="my-4">

                                    <a class="map-link hover:text-green-200" href="/product-category/string-lights/">String lights</a>

                                </li>

                                <li class="my-4">

                                    <a class="map-link hover:text-green-200" href="/product-tag/festival-lights/">Festival lights</a>

                                </li>

                            </ul>

                        </li>
                        <li class="map-item row-span-2" >
                            <p class="font-bold my-3 text-base" onclick="toggle_content(this);return false;" data-status="0">My Account<i class="md:hidden fa fa-plus float-right"></i></p>
                            <ul class="map-item-child content hidden">
                                <!-- <li class="my-4">

                                    <a class="map-link hover:text-green-200 relative" href="#"><svg class="absolute w-5 h-5 text-yellow-200 -left-8 top-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" fill="currentColor"><path d="M4.069 13h-4.069v-2h4.069c-.041.328-.069.661-.069 1s.028.672.069 1zm3.034-7.312l-2.881-2.881-1.414 1.414 2.881 2.881c.411-.529.885-1.003 1.414-1.414zm11.209 1.414l2.881-2.881-1.414-1.414-2.881 2.881c.528.411 1.002.886 1.414 1.414zm-6.312-3.102c.339 0 .672.028 1 .069v-4.069h-2v4.069c.328-.041.661-.069 1-.069zm0 16c-.339 0-.672-.028-1-.069v4.069h2v-4.069c-.328.041-.661.069-1 .069zm7.931-9c.041.328.069.661.069 1s-.028.672-.069 1h4.069v-2h-4.069zm-3.033 7.312l2.88 2.88 1.415-1.414-2.88-2.88c-.412.528-.886 1.002-1.415 1.414zm-11.21-1.415l-2.88 2.88 1.414 1.414 2.88-2.88c-.528-.411-1.003-.885-1.414-1.414zm6.312-10.897c-3.314 0-6 2.686-6 6s2.686 6 6 6 6-2.686 6-6-2.686-6-6-6z"/></svg> Member Benefits</a>

                                </li>

                                <li class="my-4">

                                    <a class="map-link hover:text-green-200 relative" href="#"><svg class="absolute w-5 h-5 text-yellow-200 -left-8" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" fill="currentColor"><path d="M12 .288l2.833 8.718h9.167l-7.417 5.389 2.833 8.718-7.416-5.388-7.417 5.388 2.833-8.718-7.416-5.389h9.167z"/></svg> Free Product’s Trail</a>

                                </li> -->

                                <li class="my-4">

                                    <a class="map-link hover:text-green-200" href="/my-account/payment-methods/">Billing/Payments</a>

                                </li>

                                <li class="my-4">

                                    <a class="map-link hover:text-green-200" href="/my-account/edit-account/">Profile Updated</a>

                                </li>

                                <li class="my-4">

                                    <a class="map-link hover:text-green-200" href="/my-account/edit-address/">Edit Address</a>

                                </li>

                                <li class="my-4">

                                    <a class="map-link hover:text-green-200" href="/my-account/orders/">My Orders</a>

                                </li>

                            </ul>

                        </li>

                        <li class="map-item row-span-2">
                            <p class="font-bold my-3 text-base" onclick="toggle_content(this);return false;" data-status="0">NEED HELP?<i class="md:hidden fa fa-plus float-right"></i></p>

                            <ul class="map-item-child content hidden">

                                <li class="my-4">

                                    <a class="map-link hover:text-green-200" href="/faq/">FAQ</a>

                                </li>

                                <li class="my-4">

                                    <a class="map-link hover:text-green-200" href="/customer-service/">Delivery Times</a>

                                </li>

                                <li class="my-4">

                                    <a class="map-link hover:text-green-200" href="/return-exchange-policy/">Return & Exchange Policy</a>

                                </li>

                                <li class="my-4">

                                    <a class="map-link hover:text-green-200" href="/customer-service/">Warranty Conditions</a>

                                </li>

                                <li class="my-4">

                                    <a class="map-link hover:text-green-200" href="/customer-service/">Contact Us</a>

                                </li>

                            </ul>

                        </li>

                        <!-- <li class="map-item ">
                            <p class="font-bold my-3 text-base" onclick="toggle_content(this);return false;" data-status="0">BLOG<i class="md:hidden fa fa-plus float-right"></i></p>

                            <ul class="map-item-child content hidden">

                                <li class="my-4">

                                    <a class="map-link hover:text-green-200" href="#faq/">Get Inspired!</a>

                                </li>

                                <li class="my-4">

                                    <a class="map-link hover:text-green-200" href="#">Knowledge</a>

                                </li>

                            </ul>

                        </li> -->
                        <li class="map-item ">
                            <p class="font-bold my-3 text-base" onclick="toggle_content(this);return false;" data-status="0">ABOUT GIGALUMI<i class="md:hidden fa fa-plus float-right"></i></p>
                            <ul class="map-item-child content hidden">
                                <li class="my-4">

                                    <a class="map-link hover:text-green-200" href="/about/">About</a>

                                </li>

                                <li class="my-4">

                                    <a class="map-link hover:text-green-200" href="/privacy-policy/">Privacy Policy</a>

                                </li>

                                <li class="my-4">

                                    <a class="map-link hover:text-green-200" href="/terms-conditions">Terms & Conditions</a>

                                </li>

                            </ul>

                        </li>

                    </ul>

                </div>

                <div class="footer-contact flex flex-col text-base">

                    <div class="subscribe my-3">

                        <!-- Begin Mailchimp Signup Form -->
                        <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
                        <style type="text/css">
                            #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
                            /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
                            We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                        </style>
                        <div id="mc_embed_signup">
                            <form action="https://gigalumi.us4.list-manage.com/subscribe/post?u=f41749479b267496272fda01c&amp;id=a466065527" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll">
                                    <p class="font-semibold">BE THE FIRST TO KNOW ABOUT OUR SALES!</p> 
                                    <div class="mc-field-group">
                                        <label for="mce-EMAIL"></label>
                                        <input type="email" placeholder="Email Address" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                                    </div>
                                    <div id="mce-responses" class="clear">
                                        <div class="response" id="mce-error-response" style="display:none"></div>
                                        <div class="response" id="mce-success-response" style="display:none"></div>
                                    </div>
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_f41749479b267496272fda01c_a466065527" tabindex="-1" value=""></div>
                                    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                                </div>
                            </form>
                        </div>
                        <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email'; }(jQuery));var $mcj = jQuery.noConflict(true);</script>
                        <!--End mc_embed_signup-->


                    </div>

                    <div class="call-us">

                        <p class="font-semibold">QUESTIONS? FEEDBACK? CALL US AT</p>

                        <p class="text-xl italic text-green-200 my-3 font-semibold">1-888-829-9252</p>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="footer-social flex justify-center">

        <div class="social-icon-list flex flex-row">

            <a href="https://www.facebook.com/Gigalumi.Official"><svg class="m-4 w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">

                <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3 8h-1.35c-.538 0-.65.221-.65.778v1.222h2l-.209 2h-1.791v7h-3v-7h-2v-2h2v-2.308c0-1.769.931-2.692 3.029-2.692h1.971v3z"/>

            </svg></a>

            <a href="https://www.instagram.com/gigalumi_/"><svg class="m-4 w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">

                <path d="M11.984 16.815c2.596 0 4.706-2.111 4.706-4.707 0-1.409-.623-2.674-1.606-3.538-.346-.303-.735-.556-1.158-.748-.593-.27-1.249-.421-1.941-.421s-1.349.151-1.941.421c-.424.194-.814.447-1.158.749-.985.864-1.608 2.129-1.608 3.538 0 2.595 2.112 4.706 4.706 4.706zm.016-8.184c1.921 0 3.479 1.557 3.479 3.478 0 1.921-1.558 3.479-3.479 3.479s-3.479-1.557-3.479-3.479c0-1.921 1.558-3.478 3.479-3.478zm5.223.369h6.777v10.278c0 2.608-2.114 4.722-4.722 4.722h-14.493c-2.608 0-4.785-2.114-4.785-4.722v-10.278h6.747c-.544.913-.872 1.969-.872 3.109 0 3.374 2.735 6.109 6.109 6.109s6.109-2.735 6.109-6.109c.001-1.14-.327-2.196-.87-3.109zm2.055-9h-12.278v5h-1v-5h-1v5h-1v-4.923c-.346.057-.682.143-1 .27v4.653h-1v-4.102c-1.202.857-2 2.246-2 3.824v3.278h7.473c1.167-1.282 2.798-2 4.511-2 1.722 0 3.351.725 4.511 2h7.505v-3.278c0-2.608-2.114-4.722-4.722-4.722zm2.722 5.265c0 .406-.333.735-.745.735h-2.511c-.411 0-.744-.329-.744-.735v-2.53c0-.406.333-.735.744-.735h2.511c.412 0 .745.329.745.735v2.53z"/>

            </svg></a>

            <a href="https://twitter.com/Gigalumi_"><svg class="m-4 w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">

                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>

            </svg></a>

            <!-- <a href=""><svg class="m-4 w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">

                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>

            </svg></a> -->

            <a href="https://www.pinterest.com/gigalumi/"><svg class="m-4 w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">

                <path d="M12 0c-6.627 0-12 5.372-12 12 0 5.084 3.163 9.426 7.627 11.174-.105-.949-.2-2.405.042-3.441.218-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.655 2.568-.994 3.995-.283 1.194.599 2.169 1.777 2.169 2.133 0 3.772-2.249 3.772-5.495 0-2.873-2.064-4.882-5.012-4.882-3.414 0-5.418 2.561-5.418 5.207 0 1.031.397 2.138.893 2.738.098.119.112.224.083.345l-.333 1.36c-.053.22-.174.267-.402.161-1.499-.698-2.436-2.889-2.436-4.649 0-3.785 2.75-7.262 7.929-7.262 4.163 0 7.398 2.967 7.398 6.931 0 4.136-2.607 7.464-6.227 7.464-1.216 0-2.359-.631-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146 1.124.347 2.317.535 3.554.535 6.627 0 12-5.373 12-12 0-6.628-5.373-12-12-12z" fill-rule="evenodd" clip-rule="evenodd"/>

            </svg></a>

        </div>

    </div>

    <?php }?>

    <div class="footer-aside text-gray-700 w-full border-t border-gray-300 pt-3 pb-2">

        <div class="container">

            <div class="footer-aside-inner flex  justify-between  py-2">

                <div class="footer-info flex flex-col">

                    <div class="footer-info-content flex flex-row text-green-200 mb-2">

                        <a class=" underline" href="/privacy-policy/#">Cookie Usage</a>

                        &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;

                        <!-- <a class=" underline" href="">Do Not Sell My Personal Information</a>

                        &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; -->

                        <a class=" underline" href="">Site Map</a>

                    </div>

                    <p>Copyright © 2020 Gigalumi. All rights reserved.</p>

                </div>

                <div class="payment flex flex-row">

                    <span>Secure Online Payment:&nbsp; </span>

                    <div class="payment-list flex flex-row">

                        <svg class="payment-list-item mx-1" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-visa">

                            <title id="pi-visa">Visa</title>

                            <path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"></path><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"></path><path d="M28.3 10.1H28c-.4 1-.7 1.5-1 3h1.9c-.3-1.5-.3-2.2-.6-3zm2.9 5.9h-1.7c-.1 0-.1 0-.2-.1l-.2-.9-.1-.2h-2.4c-.1 0-.2 0-.2.2l-.3.9c0 .1-.1.1-.1.1h-2.1l.2-.5L27 8.7c0-.5.3-.7.8-.7h1.5c.1 0 .2 0 .2.2l1.4 6.5c.1.4.2.7.2 1.1.1.1.1.1.1.2zm-13.4-.3l.4-1.8c.1 0 .2.1.2.1.7.3 1.4.5 2.1.4.2 0 .5-.1.7-.2.5-.2.5-.7.1-1.1-.2-.2-.5-.3-.8-.5-.4-.2-.8-.4-1.1-.7-1.2-1-.8-2.4-.1-3.1.6-.4.9-.8 1.7-.8 1.2 0 2.5 0 3.1.2h.1c-.1.6-.2 1.1-.4 1.7-.5-.2-1-.4-1.5-.4-.3 0-.6 0-.9.1-.2 0-.3.1-.4.2-.2.2-.2.5 0 .7l.5.4c.4.2.8.4 1.1.6.5.3 1 .8 1.1 1.4.2.9-.1 1.7-.9 2.3-.5.4-.7.6-1.4.6-1.4 0-2.5.1-3.4-.2-.1.2-.1.2-.2.1zm-3.5.3c.1-.7.1-.7.2-1 .5-2.2 1-4.5 1.4-6.7.1-.2.1-.3.3-.3H18c-.2 1.2-.4 2.1-.7 3.2-.3 1.5-.6 3-1 4.5 0 .2-.1.2-.3.2M5 8.2c0-.1.2-.2.3-.2h3.4c.5 0 .9.3 1 .8l.9 4.4c0 .1 0 .1.1.2 0-.1.1-.1.1-.1l2.1-5.1c-.1-.1 0-.2.1-.2h2.1c0 .1 0 .1-.1.2l-3.1 7.3c-.1.2-.1.3-.2.4-.1.1-.3 0-.5 0H9.7c-.1 0-.2 0-.2-.2L7.9 9.5c-.2-.2-.5-.5-.9-.6-.6-.3-1.7-.5-1.9-.5L5 8.2z" fill="#142688"></path>

                        </svg>

                        <svg class="payment-list-item mx-1" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="38" height="24" aria-labelledby="pi-american_express">

                            <title id="pi-american_express">American Express</title>

                            <g fill="none"><path fill="#000" d="M35,0 L3,0 C1.3,0 0,1.3 0,3 L0,21 C0,22.7 1.4,24 3,24 L35,24 C36.7,24 38,22.7 38,21 L38,3 C38,1.3 36.6,0 35,0 Z" opacity=".07"></path><path fill="#006FCF" d="M35,1 C36.1,1 37,1.9 37,3 L37,21 C37,22.1 36.1,23 35,23 L3,23 C1.9,23 1,22.1 1,21 L1,3 C1,1.9 1.9,1 3,1 L35,1"></path><path fill="#FFF" d="M8.971,10.268 L9.745,12.144 L8.203,12.144 L8.971,10.268 Z M25.046,10.346 L22.069,10.346 L22.069,11.173 L24.998,11.173 L24.998,12.412 L22.075,12.412 L22.075,13.334 L25.052,13.334 L25.052,14.073 L27.129,11.828 L25.052,9.488 L25.046,10.346 L25.046,10.346 Z M10.983,8.006 L14.978,8.006 L15.865,9.941 L16.687,8 L27.057,8 L28.135,9.19 L29.25,8 L34.013,8 L30.494,11.852 L33.977,15.68 L29.143,15.68 L28.065,14.49 L26.94,15.68 L10.03,15.68 L9.536,14.49 L8.406,14.49 L7.911,15.68 L4,15.68 L7.286,8 L10.716,8 L10.983,8.006 Z M19.646,9.084 L17.407,9.084 L15.907,12.62 L14.282,9.084 L12.06,9.084 L12.06,13.894 L10,9.084 L8.007,9.084 L5.625,14.596 L7.18,14.596 L7.674,13.406 L10.27,13.406 L10.764,14.596 L13.484,14.596 L13.484,10.661 L15.235,14.602 L16.425,14.602 L18.165,10.673 L18.165,14.603 L19.623,14.603 L19.647,9.083 L19.646,9.084 Z M28.986,11.852 L31.517,9.084 L29.695,9.084 L28.094,10.81 L26.546,9.084 L20.652,9.084 L20.652,14.602 L26.462,14.602 L28.076,12.864 L29.624,14.602 L31.499,14.602 L28.987,11.852 L28.986,11.852 Z"></path></g>

                        </svg>

                        <svg class="payment-list-item mx-1" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-master">

                            <title id="pi-master">Mastercard</title>

                            <path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"></path><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"></path><circle fill="#EB001B" cx="15" cy="12" r="7"></circle><circle fill="#F79E1B" cx="23" cy="12" r="7"></circle><path fill="#FF5F00" d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z"></path>

                        </svg>

                        <svg class="payment-list-item mx-1" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="38" height="24" aria-labelledby="pi-discover">

                            <title id="pi-discover">Discover</title>

                            <path d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z" fill="#000" opacity=".07"></path><path d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32" fill="#FFF"></path><path d="M37 16.95V21c0 1.1-.9 2-2 2H23.228c7.896-1.815 12.043-4.601 13.772-6.05z" fill="#EDA024"></path><path fill="#494949" d="M9 11h20v2H9z"></path><path d="M22 12c0 1.7-1.3 3-3 3s-3-1.4-3-3 1.4-3 3-3c1.7 0 3 1.3 3 3z" fill="#EDA024"></path>

                        </svg>

                        <svg class="payment-list-item mx-1" width="38" height="24" role="img" aria-labelledby="pi-jcb" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg">

                            <title id="pi-jcb">JCB</title>

                            <g fill="none" fill-rule="evenodd"><g fill-rule="nonzero"><path d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z" fill="#000" opacity=".07"></path><path d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32" fill="#FFF"></path></g><path d="M11.5 5H15v11.5a2.5 2.5 0 0 1-2.5 2.5H9V7.5A2.5 2.5 0 0 1 11.5 5z" fill="#006EBC"></path><path d="M18.5 5H22v11.5a2.5 2.5 0 0 1-2.5 2.5H16V7.5A2.5 2.5 0 0 1 18.5 5z" fill="#F00036"></path><path d="M25.5 5H29v11.5a2.5 2.5 0 0 1-2.5 2.5H23V7.5A2.5 2.5 0 0 1 25.5 5z" fill="#2AB419"></path><path d="M10.755 14.5c-1.06 0-2.122-.304-2.656-.987l.78-.676c.068 1.133 3.545 1.24 3.545-.19V9.5h1.802v3.147c0 .728-.574 1.322-1.573 1.632-.466.144-1.365.221-1.898.221zm8.116 0c-.674 0-1.388-.107-1.965-.366-.948-.425-1.312-1.206-1.3-2.199.012-1.014.436-1.782 1.468-2.165 1.319-.49 3.343-.261 3.926.27v.972c-.572-.521-1.958-.898-2.919-.46-.494.226-.737.917-.744 1.448-.006.56.245 1.252.744 1.497.953.467 2.39.04 2.919-.441v1.01c-.358.255-1.253.434-2.129.434zm8.679-2.587c.37-.235.582-.567.582-1.005 0-.438-.116-.687-.348-.939-.206-.207-.58-.469-1.238-.469H23v5h3.546c.696 0 1.097-.23 1.315-.415.283-.25.426-.53.426-.96 0-.431-.155-.908-.737-1.212zm-1.906-.281h-1.428v-1.444h1.495c.956 0 .944 1.444-.067 1.444zm.288 2.157h-1.716v-1.513h1.716c.986 0 1.083 1.513 0 1.513z" fill="#FFF" fill-rule="nonzero"></path></g>

                        </svg>

                        <svg class="payment-list-item mx-1" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" width="38" height="24" role="img" aria-labelledby="pi-paypal">

                            <title id="pi-paypal">PayPal</title>

                            <path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"></path><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"></path><path fill="#003087" d="M23.9 8.3c.2-1 0-1.7-.6-2.3-.6-.7-1.7-1-3.1-1h-4.1c-.3 0-.5.2-.6.5L14 15.6c0 .2.1.4.3.4H17l.4-3.4 1.8-2.2 4.7-2.1z"></path><path fill="#3086C8" d="M23.9 8.3l-.2.2c-.5 2.8-2.2 3.8-4.6 3.8H18c-.3 0-.5.2-.6.5l-.6 3.9-.2 1c0 .2.1.4.3.4H19c.3 0 .5-.2.5-.4v-.1l.4-2.4v-.1c0-.2.3-.4.5-.4h.3c2.1 0 3.7-.8 4.1-3.2.2-1 .1-1.8-.4-2.4-.1-.5-.3-.7-.5-.8z"></path><path fill="#012169" d="M23.3 8.1c-.1-.1-.2-.1-.3-.1-.1 0-.2 0-.3-.1-.3-.1-.7-.1-1.1-.1h-3c-.1 0-.2 0-.2.1-.2.1-.3.2-.3.4l-.7 4.4v.1c0-.3.3-.5.6-.5h1.3c2.5 0 4.1-1 4.6-3.8v-.2c-.1-.1-.3-.2-.5-.2h-.1z"></path>

                        </svg>

                    </div>

                </div>

            </div>

        </div>

    </div>



    <?php

}

function gigalumi_payment_list_icon($is_clude_paypal = false) {
    ?>
    <div class="payment-list flex flex-row">
        <svg class="payment-list-item mx-1" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-visa">
            <title id="pi-visa">Visa</title>
            <path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"></path><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"></path><path d="M28.3 10.1H28c-.4 1-.7 1.5-1 3h1.9c-.3-1.5-.3-2.2-.6-3zm2.9 5.9h-1.7c-.1 0-.1 0-.2-.1l-.2-.9-.1-.2h-2.4c-.1 0-.2 0-.2.2l-.3.9c0 .1-.1.1-.1.1h-2.1l.2-.5L27 8.7c0-.5.3-.7.8-.7h1.5c.1 0 .2 0 .2.2l1.4 6.5c.1.4.2.7.2 1.1.1.1.1.1.1.2zm-13.4-.3l.4-1.8c.1 0 .2.1.2.1.7.3 1.4.5 2.1.4.2 0 .5-.1.7-.2.5-.2.5-.7.1-1.1-.2-.2-.5-.3-.8-.5-.4-.2-.8-.4-1.1-.7-1.2-1-.8-2.4-.1-3.1.6-.4.9-.8 1.7-.8 1.2 0 2.5 0 3.1.2h.1c-.1.6-.2 1.1-.4 1.7-.5-.2-1-.4-1.5-.4-.3 0-.6 0-.9.1-.2 0-.3.1-.4.2-.2.2-.2.5 0 .7l.5.4c.4.2.8.4 1.1.6.5.3 1 .8 1.1 1.4.2.9-.1 1.7-.9 2.3-.5.4-.7.6-1.4.6-1.4 0-2.5.1-3.4-.2-.1.2-.1.2-.2.1zm-3.5.3c.1-.7.1-.7.2-1 .5-2.2 1-4.5 1.4-6.7.1-.2.1-.3.3-.3H18c-.2 1.2-.4 2.1-.7 3.2-.3 1.5-.6 3-1 4.5 0 .2-.1.2-.3.2M5 8.2c0-.1.2-.2.3-.2h3.4c.5 0 .9.3 1 .8l.9 4.4c0 .1 0 .1.1.2 0-.1.1-.1.1-.1l2.1-5.1c-.1-.1 0-.2.1-.2h2.1c0 .1 0 .1-.1.2l-3.1 7.3c-.1.2-.1.3-.2.4-.1.1-.3 0-.5 0H9.7c-.1 0-.2 0-.2-.2L7.9 9.5c-.2-.2-.5-.5-.9-.6-.6-.3-1.7-.5-1.9-.5L5 8.2z" fill="#142688"></path>
        </svg>
        <svg class="payment-list-item mx-1" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="38" height="24" aria-labelledby="pi-american_express">
            <title id="pi-american_express">American Express</title>
            <g fill="none"><path fill="#000" d="M35,0 L3,0 C1.3,0 0,1.3 0,3 L0,21 C0,22.7 1.4,24 3,24 L35,24 C36.7,24 38,22.7 38,21 L38,3 C38,1.3 36.6,0 35,0 Z" opacity=".07"></path><path fill="#006FCF" d="M35,1 C36.1,1 37,1.9 37,3 L37,21 C37,22.1 36.1,23 35,23 L3,23 C1.9,23 1,22.1 1,21 L1,3 C1,1.9 1.9,1 3,1 L35,1"></path><path fill="#FFF" d="M8.971,10.268 L9.745,12.144 L8.203,12.144 L8.971,10.268 Z M25.046,10.346 L22.069,10.346 L22.069,11.173 L24.998,11.173 L24.998,12.412 L22.075,12.412 L22.075,13.334 L25.052,13.334 L25.052,14.073 L27.129,11.828 L25.052,9.488 L25.046,10.346 L25.046,10.346 Z M10.983,8.006 L14.978,8.006 L15.865,9.941 L16.687,8 L27.057,8 L28.135,9.19 L29.25,8 L34.013,8 L30.494,11.852 L33.977,15.68 L29.143,15.68 L28.065,14.49 L26.94,15.68 L10.03,15.68 L9.536,14.49 L8.406,14.49 L7.911,15.68 L4,15.68 L7.286,8 L10.716,8 L10.983,8.006 Z M19.646,9.084 L17.407,9.084 L15.907,12.62 L14.282,9.084 L12.06,9.084 L12.06,13.894 L10,9.084 L8.007,9.084 L5.625,14.596 L7.18,14.596 L7.674,13.406 L10.27,13.406 L10.764,14.596 L13.484,14.596 L13.484,10.661 L15.235,14.602 L16.425,14.602 L18.165,10.673 L18.165,14.603 L19.623,14.603 L19.647,9.083 L19.646,9.084 Z M28.986,11.852 L31.517,9.084 L29.695,9.084 L28.094,10.81 L26.546,9.084 L20.652,9.084 L20.652,14.602 L26.462,14.602 L28.076,12.864 L29.624,14.602 L31.499,14.602 L28.987,11.852 L28.986,11.852 Z"></path></g>
        </svg>
        <svg class="payment-list-item mx-1" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-master">
            <title id="pi-master">Mastercard</title>
            <path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"></path><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"></path><circle fill="#EB001B" cx="15" cy="12" r="7"></circle><circle fill="#F79E1B" cx="23" cy="12" r="7"></circle><path fill="#FF5F00" d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z"></path>
        </svg>
        <svg class="payment-list-item mx-1" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="38" height="24" aria-labelledby="pi-discover">
            <title id="pi-discover">Discover</title>
            <path d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z" fill="#000" opacity=".07"></path><path d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32" fill="#FFF"></path><path d="M37 16.95V21c0 1.1-.9 2-2 2H23.228c7.896-1.815 12.043-4.601 13.772-6.05z" fill="#EDA024"></path><path fill="#494949" d="M9 11h20v2H9z"></path><path d="M22 12c0 1.7-1.3 3-3 3s-3-1.4-3-3 1.4-3 3-3c1.7 0 3 1.3 3 3z" fill="#EDA024"></path>
        </svg>
        <svg class="payment-list-item mx-1" width="38" height="24" role="img" aria-labelledby="pi-jcb" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg">
            <title id="pi-jcb">JCB</title>
            <g fill="none" fill-rule="evenodd"><g fill-rule="nonzero"><path d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z" fill="#000" opacity=".07"></path><path d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32" fill="#FFF"></path></g><path d="M11.5 5H15v11.5a2.5 2.5 0 0 1-2.5 2.5H9V7.5A2.5 2.5 0 0 1 11.5 5z" fill="#006EBC"></path><path d="M18.5 5H22v11.5a2.5 2.5 0 0 1-2.5 2.5H16V7.5A2.5 2.5 0 0 1 18.5 5z" fill="#F00036"></path><path d="M25.5 5H29v11.5a2.5 2.5 0 0 1-2.5 2.5H23V7.5A2.5 2.5 0 0 1 25.5 5z" fill="#2AB419"></path><path d="M10.755 14.5c-1.06 0-2.122-.304-2.656-.987l.78-.676c.068 1.133 3.545 1.24 3.545-.19V9.5h1.802v3.147c0 .728-.574 1.322-1.573 1.632-.466.144-1.365.221-1.898.221zm8.116 0c-.674 0-1.388-.107-1.965-.366-.948-.425-1.312-1.206-1.3-2.199.012-1.014.436-1.782 1.468-2.165 1.319-.49 3.343-.261 3.926.27v.972c-.572-.521-1.958-.898-2.919-.46-.494.226-.737.917-.744 1.448-.006.56.245 1.252.744 1.497.953.467 2.39.04 2.919-.441v1.01c-.358.255-1.253.434-2.129.434zm8.679-2.587c.37-.235.582-.567.582-1.005 0-.438-.116-.687-.348-.939-.206-.207-.58-.469-1.238-.469H23v5h3.546c.696 0 1.097-.23 1.315-.415.283-.25.426-.53.426-.96 0-.431-.155-.908-.737-1.212zm-1.906-.281h-1.428v-1.444h1.495c.956 0 .944 1.444-.067 1.444zm.288 2.157h-1.716v-1.513h1.716c.986 0 1.083 1.513 0 1.513z" fill="#FFF" fill-rule="nonzero"></path></g>
        </svg>
        <?php if ($is_clude_paypal == true) : ?>
        <svg class="payment-list-item mx-1" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" width="38" height="24" role="img" aria-labelledby="pi-paypal">
            <title id="pi-paypal">PayPal</title>
            <path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"></path><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"></path><path fill="#003087" d="M23.9 8.3c.2-1 0-1.7-.6-2.3-.6-.7-1.7-1-3.1-1h-4.1c-.3 0-.5.2-.6.5L14 15.6c0 .2.1.4.3.4H17l.4-3.4 1.8-2.2 4.7-2.1z"></path><path fill="#3086C8" d="M23.9 8.3l-.2.2c-.5 2.8-2.2 3.8-4.6 3.8H18c-.3 0-.5.2-.6.5l-.6 3.9-.2 1c0 .2.1.4.3.4H19c.3 0 .5-.2.5-.4v-.1l.4-2.4v-.1c0-.2.3-.4.5-.4h.3c2.1 0 3.7-.8 4.1-3.2.2-1 .1-1.8-.4-2.4-.1-.5-.3-.7-.5-.8z"></path><path fill="#012169" d="M23.3 8.1c-.1-.1-.2-.1-.3-.1-.1 0-.2 0-.3-.1-.3-.1-.7-.1-1.1-.1h-3c-.1 0-.2 0-.2.1-.2.1-.3.2-.3.4l-.7 4.4v.1c0-.3.3-.5.6-.5h1.3c2.5 0 4.1-1 4.6-3.8v-.2c-.1-.1-.3-.2-.5-.2h-.1z"></path>
        </svg>
        <?php endif;?>
    </div>
    <?php
}

