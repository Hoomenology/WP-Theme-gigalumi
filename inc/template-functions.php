<?php

function gigalumi_header_container() {
    ?>

    <div class="container flex flex-row items-center">
        <div class="header-branding flex-1 flex items-center">
            <a href="/" rel="home"><img class="h-15" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logo.png" alt=""></a>
        </div>
        <div class="header-search flex-1 flex items-center">
            <form role="search" method="get" class="w-full m-0" action="/">
                <label for="search-field" class="flex flex-row items-center bg-gray-100 border rounded-5 border-gray-300 h-12 px-3">
                    <input type="search" id="search-field" class="flex-auto bg-gray-100 text-gray-700" placeholder="Search for gigalumi" value="" name="s">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </label>
                <button type="submit" value="Search" class="hidden">Search</button>
                <input type="hidden" name="post_type" value="product">
            </form>
        </div>
        <div class="header-action flex-1 divide-x flex flex-row items-center">
            <div class="help mx-7">
                <a href="/help" class="flex flex-row items-center mx-3">
                    <svg class="h-6 w-6 mx-3 text-blue-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                    </svg>
                    Help
                </a>
            </div>
            <div class="account flex flex-row items-center justify-end w-full">
                <a href="/my-account" class="flex flex-row items-center">
                    <svg class="h-9 w-9 mx-3 text-green-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div>
                        <p>MY ACCOUNT</p>
                        <p class="text-gray-700">Sign Up</p>
                    </div>
                </a>
                <a href="/cart" class="flex flex-row items-center">
                    <svg class="h-8 w-8 mx-3 text-green-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>CART ( 0 )
                </a>
            </div>
        </div>
    </div>
    <hr>
    <?php
}

function gigalumi_nav_container() {
    ?>
        <nav id="site-navigation" class=" text-black" role="navigation" aria-label="Primary Navigation">
            <div class="mega-menu-toggle hidden">
                <div class="mega-toggle-blocks-left"></div>
                <div class="mega-toggle-blocks-center"></div>
                <div class="mega-toggle-blocks-right">
                    <div class="mega-toggle-block mega-menu-toggle-animated-block mega-toggle-block-0" id="mega-toggle-block-0">
                        <button aria-label="Toggle Menu" class="mega-toggle-animated mega-toggle-animated-slider" type="button" aria-expanded="false">
                            <span class="mega-toggle-animated-box">
                                <span class="mega-toggle-animated-inner">
                                </span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <ul id="mega-menu-primary" class="">
                <li class="menu-item float-left mx-4 h-full " id="mega-menu-item-252" onmouseover="menu_link_over(this);">
                    <a class="menu-link" href="http://local.gigalumi.com/shop/" aria-haspopup="true" aria-expanded="false" tabindex="0">Shop<span class="mega-indicator"></span></a>
                    <div class="sub-menu hidden z-50 absolute bg-black text-black w-full">
                        <div class="container">
                            <ul class="flex flex-row justify-around my-6">
                                <li class="menu-item float-left mx-2">
                                    <a class="menu-link uppercase font-bold" href="http://local.gigalumi.com/product-category/ice-maker/">
                                        <img class="w-8 mx-2 inline-block" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/index_navigation_ice_maker.svg" alt="">
                                        Ice Maker
                                    </a>
                                    <ul class="sub-menu ml-12">
                                        <li class="mb-3">
                                            <a class="menu-link" href="http://local.gigalumi.com/product-category/ice-maker/commercial-ice-maker-machine/">Commercial Ice Maker Machine</a>
                                        </li>
                                        <li class="mb-3">
                                            <a class="menu-link" href="http://local.gigalumi.com/product-category/ice-maker/squareice_maker_machine/">SquareIce Maker Machine</a>
                                        </li>
                                        <li class="mb-3">
                                            <a class="menu-link" href="http://local.gigalumi.com/product-category/ice-maker/mini_ice_maker_machine/">Mini Ice Maker Machine</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item float-left mx-2">
                                    <a class="menu-link uppercase font-bold" href="http://local.gigalumi.com/product-category/upright-freezer/"><img class="w-8 mx-2 inline-block" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/index_navigation_upright_freezer.svg" alt="">Upright Freezer</a>
                                    <ul class="sub-menu ml-12">
                                        <li class="mb-3">
                                            <a class="menu-link" href="http://local.gigalumi.com/product-category/ice-maker/commercial-ice-maker-machine/">Commercial Ice Maker Machine</a>
                                        </li>
                                        <li class="mb-3">
                                            <a class="menu-link" href="http://local.gigalumi.com/product-category/ice-maker/squareice_maker_machine/">SquareIce Maker Machine</a>
                                        </li>
                                        <li class="mb-3">
                                            <a class="menu-link" href="http://local.gigalumi.com/product-category/ice-maker/mini_ice_maker_machine/">Mini Ice Maker Machine</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item float-left mx-2">
                                    <a class="menu-link uppercase font-bold" href="http://local.gigalumi.com/product-category/compact-refigerator/"><img class="w-8 mx-2 inline-block" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/index_navigation_mini_fridge.svg" alt="">Compact Refigerator</a>
                                        <ul class="sub-menu ml-12">
                                        <li class="mb-3" id="mega-menu-item-262">
                                            <a class="menu-link" href="http://local.gigalumi.com/product-category/ice-maker/commercial-ice-maker-machine/">Commercial Ice Maker Machine</a>
                                        </li>
                                        <li class="mb-3" id="mega-menu-item-262">
                                            <a class="menu-link" href="http://local.gigalumi.com/product-category/ice-maker/squareice_maker_machine/">SquareIce Maker Machine</a>
                                        </li>
                                        <li class="mb-3" id="mega-menu-item-262">
                                            <a class="menu-link" href="http://local.gigalumi.com/product-category/ice-maker/mini_ice_maker_machine/">Mini Ice Maker Machine</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item float-left mx-2">
                                    <a class="menu-link uppercase font-bold" href="http://local.gigalumi.com/product-category/accessories/"><img class="w-8 mx-2 inline-block" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/index_navigation_part.svg" alt="">Accessories</a>
                                        <ul class="sub-menu ml-12">
                                        <li class="mb-3" id="mega-menu-item-262">
                                            <a class="menu-link" href="http://local.gigalumi.com/product-category/ice-maker/commercial-ice-maker-machine/">Commercial Ice Maker Machine</a>
                                        </li>
                                        <li class="mb-3" id="mega-menu-item-262">
                                            <a class="menu-link" href="http://local.gigalumi.com/product-category/ice-maker/squareice_maker_machine/">SquareIce Maker Machine</a>
                                        </li>
                                        <li class="mb-3" id="mega-menu-item-262">
                                            <a class="menu-link" href="http://local.gigalumi.com/product-category/ice-maker/mini_ice_maker_machine/">Mini Ice Maker Machine</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="menu-item float-left mx-4 h-full" id="mega-menu-item-251">
                    <a class="menu-link" href="http://local.gigalumi.com/" tabindex="0">Why gigalumi</a>
                </li>
                <li class="menu-item float-left mx-4 h-full" id="mega-menu-item-250">
                    <a class="menu-link" href="http://local.gigalumi.com/" tabindex="0">Product Support</a>
                </li>
                <li class="menu-item float-left mx-4 h-full" id="mega-menu-item-253">
                    <a class="menu-link" href="http://local.gigalumi.com/" tabindex="0">Inspiration</a>
                </li>
            </ul>
        </nav>
    <?php
}

function gigalumi_footer_container() {
    ?>
    <div>
        <div class="site-map">
            <ul class="flex flex-row justify-around my-6">
                <li class="map-item w-full">
                    <p class="font-bold my-4">SUPPORT</p>
                    <ul class="sub-menu ">
                        <li class="my-2">
                            <a class="map-link" href="http://local.gigalumi.com/product-category/ice-maker/faq/">FAQ</a>
                        </li>
                        <li class="my-2">
                            <a class="map-link" href="http://local.gigalumi.com/product-category/ice-maker/commercial-ice-maker-machine/">Product Warranty Activation</a>
                        </li>
                        <li class="my-2">
                            <a class="map-link" href="http://local.gigalumi.com/product-category/ice-maker/commercial-ice-maker-machine/">Payment Options</a>
                        </li>
                        <li class="my-2">
                            <a class="map-link" href="http://local.gigalumi.com/product-category/ice-maker/commercial-ice-maker-machine/">Shipping & Delivery</a>
                        </li>
                        <li class="my-2">
                            <a class="map-link" href="http://local.gigalumi.com/product-category/ice-maker/commercial-ice-maker-machine/">Return & Refunds</a>
                        </li>
                        <li class="my-2">
                            <a class="map-link" href="http://local.gigalumi.com/product-category/ice-maker/commercial-ice-maker-machine/">Contact Us</a>
                        </li>
                    </ul>
                </li>
                <li class="map-item w-full">
                    <p class="font-bold my-4">ACCOUNT</p>
                    <ul class="sub-menu ">
                        <li class="my-2">
                            <a class="map-link" href="http://local.gigalumi.com/product-category/ice-maker/faq/">Sign In</a>
                        </li>
                        <li class="my-2">
                            <a class="map-link" href="http://local.gigalumi.com/product-category/ice-maker/commercial-ice-maker-machine/">Update Password</a>
                        </li>
                        <li class="my-2">
                            <a class="map-link" href="http://local.gigalumi.com/product-category/ice-maker/commercial-ice-maker-machine/">Order Status</a>
                        </li>
                        <li class="my-2">
                            <a class="map-link" href="http://local.gigalumi.com/product-category/ice-maker/commercial-ice-maker-machine/">Terms & Conditions</a>
                        </li>
                        <li class="my-2">
                            <a class="map-link" href="http://local.gigalumi.com/product-category/ice-maker/commercial-ice-maker-machine/">Privacy Policy</a>
                        </li>
                    </ul>
                </li>
                <li class="map-item w-full">
                    <p class="font-bold my-4">gigalumi</p>
                    <ul class="sub-menu ">
                        <li class="my-2">
                            <a class="map-link" href="http://local.gigalumi.com/product-category/ice-maker/faq/">About Us</a>
                        </li>
                        <li class="my-2">
                            <a class="map-link" href="http://local.gigalumi.com/product-category/ice-maker/commercial-ice-maker-machine/">Our Responsibility</a>
                        </li>
                        <li class="my-2">
                            <a class="map-link" href="http://local.gigalumi.com/product-category/ice-maker/commercial-ice-maker-machine/">Product Certification</a>
                        </li>
                        <li class="my-2">
                            <a class="map-link" href="http://local.gigalumi.com/product-category/ice-maker/commercial-ice-maker-machine/">Business Partnership</a>
                        </li>
                    </ul>
                </li>
                <li class="map-item w-full">
                    <p class="font-bold my-4">RESOURCE</p>
                    <ul class="sub-menu ">
                        <li class="my-2">
                            <a class="map-link" href="http://local.gigalumi.com/product-category/ice-maker/faq/">Coupons</a>
                        </li>
                        <li class="my-2">
                            <a class="map-link" href="http://local.gigalumi.com/product-category/ice-maker/commercial-ice-maker-machine/">News and Blog</a>
                        </li>
                        <li class="my-2">
                            <a class="map-link" href="http://local.gigalumi.com/product-category/ice-maker/commercial-ice-maker-machine/">gigalumi Video</a>
                        </li>
                        <li class="my-2">
                            <a class="map-link" href="http://local.gigalumi.com/product-category/ice-maker/commercial-ice-maker-machine/">Manuals </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="">

        </div>
        <div class="site-info text-center text-gray-700 w-full border-t border-gray-300 pt-3 pb-2">
            © 2020 gigalumi. All rights reserved.
        </div>
    </div>

    <?php
}