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
        <div class="header-action flex-1 divide-x flex flex-row items-center text-xs">
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
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div>
                        <p>MY ACCOUNT</p>
                        <p class="text-gray-700">Sign Up</p>
                    </div>
                </a>
                <a href="/cart" class="flex flex-row items-center ml-5">
                    <svg class="h-8 w-8 mx-3 text-green-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
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
        <nav id="site-navigation" class="border-t border-b border-gray-300 relative" role="navigation" aria-label="Primary Navigation">
            <div class="container">
                <ul id="mega-menu-primary" class="nav-bar flex flex-row items-center justify-between h-15 ">
                    <li class="nav-bar-item" id="mega-menu-item-252" onmouseover="menu_link_over(this);">
                        <a class="nav-bar-link inline-block h-15 leading-15 text-sm font-medium" href="http://local.gigalumi.com/shop/" aria-haspopup="true" aria-expanded="false" tabindex="0">Shop<span class="mega-indicator"></span></a>
                        <div class="sub-menu z-50 absolute hidden w-full border-t border-gray-800"  onmouseleave="menu_link_leave(this);">
                            <div class="container">
                                <div class="shop-navigation flex flex-row bg-white p-10">
                                    <ul class="nav-grid flex-grow grid grid-cols-3 gap-10 justify-items-center">
                                        <li class="nav-grid-item w-full">
                                            <a class="nav-grid-link text-lg font-bold flex mb-3 hover:text-green-200" href="#">
                                                PATH&nbsp; LIGHTS<svg class="w-7 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                                </svg>
                                            </a>
                                            <ul class="nav-dropdown ">
                                                <li class="nav-dropdown-item mb-3">
                                                    <a class="nav-dropdown-link hover:underline hover:text-green-200" href="#">Garden landscape lights</a>
                                                </li>
                                                <li class="nav-dropdown-item mb-3">
                                                    <a class="nav-dropdown-link hover:underline hover:text-green-200" href="#">Ground plug</a>
                                                </li>
                                                <li class="nav-dropdown-item mb-3">
                                                    <a class="nav-dropdown-link hover:underline hover:text-green-200" href="#">Style lamp</a>
                                                </li>
                                                <li class="nav-dropdown-item mb-3">
                                                    <a class="nav-dropdown-link hover:underline hover:text-green-200" href="#">Multicolor</a>
                                                </li>
                                                <li class="nav-dropdown-item mb-3">
                                                    <a class="nav-dropdown-link hover:underline hover:text-green-200" href="#">Color-changing</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-grid-item w-full">
                                            <a class="nav-grid-link text-lg font-bold flex mb-3 hover:text-green-200" href="#">
                                                STRING&nbsp; LIGHTS<svg class="w-7 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                                </svg>
                                            </a>
                                            <ul class="nav-dropdown ">
                                                <li class="nav-dropdown-item mb-3">
                                                    <a class="nav-dropdown-link hover:underline hover:text-green-200" href="#">Garden landscape lights</a>
                                                </li>
                                                <li class="nav-dropdown-item mb-3">
                                                    <a class="nav-dropdown-link hover:underline hover:text-green-200" href="#">Ground plug</a>
                                                </li>
                                                <li class="nav-dropdown-item mb-3">
                                                    <a class="nav-dropdown-link hover:underline hover:text-green-200" href="#">Style lamp</a>
                                                </li>
                                                <li class="nav-dropdown-item mb-3">
                                                    <a class="nav-dropdown-link hover:underline hover:text-green-200" href="#">Multicolor</a>
                                                </li>
                                                <li class="nav-dropdown-item mb-3">
                                                    <a class="nav-dropdown-link hover:underline hover:text-green-200" href="#">Color-changing</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-grid-item w-full">
                                            <a class="nav-grid-link text-lg font-bold flex mb-3 hover:text-green-200" href="#">
                                            GARDEN&nbsp; STATUS&nbsp; &&nbsp; TOOLS<svg class="w-7 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                                </svg>
                                            </a>
                                            <ul class="nav-dropdown ">
                                                <li class="nav-dropdown-item mb-3">
                                                    <a class="nav-dropdown-link hover:underline hover:text-green-200" href="#">Garden landscape lights</a>
                                                </li>
                                                <li class="nav-dropdown-item mb-3">
                                                    <a class="nav-dropdown-link hover:underline hover:text-green-200" href="#">Ground plug</a>
                                                </li>
                                                <li class="nav-dropdown-item mb-3">
                                                    <a class="nav-dropdown-link hover:underline hover:text-green-200" href="#">Style lamp</a>
                                                </li>
                                                <li class="nav-dropdown-item mb-3">
                                                    <a class="nav-dropdown-link hover:underline hover:text-green-200" href="#">Multicolor</a>
                                                </li>
                                                <li class="nav-dropdown-item mb-3">
                                                    <a class="nav-dropdown-link hover:underline hover:text-green-200" href="#">Color-changing</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-grid-item w-full">
                                            <a class="nav-grid-link text-lg font-bold flex mb-3 hover:text-green-200" href="#">
                                            DECK&nbsp; LIGHTS<svg class="w-7 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                                </svg>
                                            </a>
                                            <ul class="nav-dropdown ">
                                                <li class="nav-dropdown-item mb-3">
                                                    <a class="nav-dropdown-link hover:underline hover:text-green-200" href="#">Garden landscape lights</a>
                                                </li>
                                                <li class="nav-dropdown-item mb-3">
                                                    <a class="nav-dropdown-link hover:underline hover:text-green-200" href="#">Ground plug</a>
                                                </li>
                                                <li class="nav-dropdown-item mb-3">
                                                    <a class="nav-dropdown-link hover:underline hover:text-green-200" href="#">Style lamp</a>
                                                </li>
                                                <li class="nav-dropdown-item mb-3">
                                                    <a class="nav-dropdown-link hover:underline hover:text-green-200" href="#">Multicolor</a>
                                                </li>
                                                <li class="nav-dropdown-item mb-3">
                                                    <a class="nav-dropdown-link hover:underline hover:text-green-200" href="#">Color-changing</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-grid-item w-full">
                                            <a class="nav-grid-link text-lg font-bold flex mb-3 hover:text-green-200" href="#">
                                            HANGING&nbsp; LIGHTS<svg class="w-7 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                                </svg>
                                            </a>
                                            <ul class="nav-dropdown ">
                                                <li class="nav-dropdown-item mb-3">
                                                    <a class="nav-dropdown-link hover:underline hover:text-green-200" href="#">Garden landscape lights</a>
                                                </li>
                                                <li class="nav-dropdown-item mb-3">
                                                    <a class="nav-dropdown-link hover:underline hover:text-green-200" href="#">Ground plug</a>
                                                </li>
                                                <li class="nav-dropdown-item mb-3">
                                                    <a class="nav-dropdown-link hover:underline hover:text-green-200" href="#">Style lamp</a>
                                                </li>
                                                <li class="nav-dropdown-item mb-3">
                                                    <a class="nav-dropdown-link hover:underline hover:text-green-200" href="#">Multicolor</a>
                                                </li>
                                                <li class="nav-dropdown-item mb-3">
                                                    <a class="nav-dropdown-link hover:underline hover:text-green-200" href="#">Color-changing</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-grid-item w-full">
                                            <a class="nav-grid-link text-lg font-bold flex mb-3 hover:text-green-200" href="#">
                                            OTHER &nbsp;DECORATION<svg class="w-7 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                                </svg>
                                            </a>
                                            <ul class="nav-dropdown ">
                                                <li class="nav-dropdown-item mb-3">
                                                    <a class="nav-dropdown-link hover:underline hover:text-green-200" href="#">Garden landscape lights</a>
                                                </li>
                                                <li class="nav-dropdown-item mb-3">
                                                    <a class="nav-dropdown-link hover:underline hover:text-green-200" href="#">Ground plug</a>
                                                </li>
                                                <li class="nav-dropdown-item mb-3">
                                                    <a class="nav-dropdown-link hover:underline hover:text-green-200" href="#">Style lamp</a>
                                                </li>
                                                <li class="nav-dropdown-item mb-3">
                                                    <a class="nav-dropdown-link hover:underline hover:text-green-200" href="#">Multicolor</a>
                                                </li>
                                                <li class="nav-dropdown-item mb-3">
                                                    <a class="nav-dropdown-link hover:underline hover:text-green-200" href="#">Color-changing</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <div class="flex flex-col items-center ml-9">
                                        <img class="max-w-none w-75" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/shop-nav-img.png" alt="">
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
                        <a class="nav-bar-link inline-block h-15 leading-15 text-sm font-medium" href="/" tabindex="0">Solar Path Lights</a>
                    </li>
                    <li class="nav-bar-item" id="mega-menu-item-251">
                        <a class="nav-bar-link inline-block h-15 leading-15 text-sm font-medium" href="/" tabindex="0">Solar String Lights</a>
                    </li>
                    <li class="nav-bar-item" id="mega-menu-item-251">
                        <a class="nav-bar-link inline-block h-15 leading-15 text-sm font-medium" href="/" tabindex="0">Festival Lights</a>
                    </li>
                    <li class="nav-bar-item" id="mega-menu-item-251">
                        <a class="nav-bar-link inline-block h-15 leading-15 text-sm font-medium" href="/" tabindex="0">Deck Lights & Others</a>
                    </li>
                    <li class="text-red-200 nav-bar-item " id="mega-menu-item-251">
                        <a class="nav-bar-link inline-block h-15 leading-15 text-sm font-medium" href="/" tabindex="0">SALE</a>
                    </li>
                    <li class="nav-bar-item" id="mega-menu-item-251">
                        <a class="nav-bar-link inline-block h-15 leading-15 text-sm font-medium" href="/" tabindex="0">Get Inspired</a>
                    </li>
                    <li class="nav-bar-item" id="mega-menu-item-251">
                        <a class="nav-bar-link inline-block h-15 leading-15 text-sm font-medium" href="/" tabindex="0">Some Lighting Knowledge</a>
                    </li>
                </ul>
            </div>
        </nav>
    <?php
}

function gigalumi_footer_container() {
    ?>
    <div class="footer-block border-t border-green-200">
        <div class="container">
            <div class="footer-block-inner flex flex-row justify-between my-12 ">
                <div class="footer-map text-xm">
                    <ul class="grid grid-cols-4 gap-x-32">
                        <li class="map-item row-span-2">
                            <p class="font-bold my-3 text-base">Shop Gigalumi</p>
                            <ul class="map-item-child ">
                                <li class="my-4">
                                    <a class="map-link hover:text-green-200" href="#">New Arrival</a>
                                </li>
                                <li class="my-4">
                                    <a class="map-link hover:text-green-200" href="#">Path lights</a>
                                </li>
                                <li class="my-4">
                                    <a class="map-link hover:text-green-200" href="#">Deck lights</a>
                                </li>
                                <li class="my-4">
                                    <a class="map-link hover:text-green-200" href="#">String lights</a>
                                </li>
                                <li class="my-4">
                                    <a class="map-link hover:text-green-200" href="#">Festival lights</a>
                                </li>
                                <li class="my-4">
                                    <a class="map-link hover:text-green-200" href="#">Weekly Best Sellers</a>
                                </li>
                                <li class="my-4">
                                    <a class="map-link hover:text-green-200" href="#">Top Rated Products</a>
                                </li>
                            </ul>
                        </li>
                        <li class="map-item row-span-2">
                            <p class="font-bold my-3 text-base">My Account</p>
                            <ul class="map-item-child ">
                                <li class="my-4">
                                    <a class="map-link hover:text-green-200 relative" href="#"><svg class="absolute w-5 h-5 text-yellow-200 -left-8 top-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" fill="currentColor"><path d="M4.069 13h-4.069v-2h4.069c-.041.328-.069.661-.069 1s.028.672.069 1zm3.034-7.312l-2.881-2.881-1.414 1.414 2.881 2.881c.411-.529.885-1.003 1.414-1.414zm11.209 1.414l2.881-2.881-1.414-1.414-2.881 2.881c.528.411 1.002.886 1.414 1.414zm-6.312-3.102c.339 0 .672.028 1 .069v-4.069h-2v4.069c.328-.041.661-.069 1-.069zm0 16c-.339 0-.672-.028-1-.069v4.069h2v-4.069c-.328.041-.661.069-1 .069zm7.931-9c.041.328.069.661.069 1s-.028.672-.069 1h4.069v-2h-4.069zm-3.033 7.312l2.88 2.88 1.415-1.414-2.88-2.88c-.412.528-.886 1.002-1.415 1.414zm-11.21-1.415l-2.88 2.88 1.414 1.414 2.88-2.88c-.528-.411-1.003-.885-1.414-1.414zm6.312-10.897c-3.314 0-6 2.686-6 6s2.686 6 6 6 6-2.686 6-6-2.686-6-6-6z"/></svg> Member Benefits</a>
                                </li>
                                <li class="my-4">
                                    <a class="map-link hover:text-green-200 relative" href="#"><svg class="absolute w-5 h-5 text-yellow-200 -left-8" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" fill="currentColor"><path d="M12 .288l2.833 8.718h9.167l-7.417 5.389 2.833 8.718-7.416-5.388-7.417 5.388 2.833-8.718-7.416-5.389h9.167z"/></svg> Free Product’s Trail</a>
                                </li>
                                <li class="my-4">
                                    <a class="map-link hover:text-green-200" href="#">Billing/Payments</a>
                                </li>
                                <li class="my-4">
                                    <a class="map-link hover:text-green-200" href="#">Profile Updated</a>
                                </li>
                                <li class="my-4">
                                    <a class="map-link hover:text-green-200" href="#">Edit Address</a>
                                </li>
                                <li class="my-4">
                                    <a class="map-link hover:text-green-200" href="#">My Orders</a>
                                </li>
                                <li class="my-4">
                                    <a class="map-link hover:text-green-200" href="#">My Coupons</a>
                                </li>
                            </ul>
                        </li>
                        <li class="map-item row-span-2">
                            <p class="font-bold my-3 text-base">HELP</p>
                            <ul class="map-item-child ">
                                <li class="my-4">
                                    <a class="map-link hover:text-green-200" href="#faq/">FAQ</a>
                                </li>
                                <li class="my-4">
                                    <a class="map-link hover:text-green-200" href="#">Delivery Times</a>
                                </li>
                                <li class="my-4">
                                    <a class="map-link hover:text-green-200" href="#">Return & Exchange Policy</a>
                                </li>
                                <li class="my-4">
                                    <a class="map-link hover:text-green-200" href="#">Warranty Conditions</a>
                                </li>
                                <li class="my-4">
                                    <a class="map-link hover:text-green-200" href="#">Contact Us</a>
                                </li>
                                <li class="my-4">
                                    <a class="map-link hover:text-green-200" href="#">Extend Warranty</a>
                                </li>
                            </ul>
                        </li>
                        <li class="map-item ">
                            <p class="font-bold my-3 text-base">BLOG</p>
                            <ul class="map-item-child ">
                                <li class="my-4">
                                    <a class="map-link hover:text-green-200" href="#faq/">Get Inspired!</a>
                                </li>
                                <li class="my-4">
                                    <a class="map-link hover:text-green-200" href="#">Knowledge</a>
                                </li>
                            </ul>
                        </li>
                        <li class="map-item ">
                            <p class="font-bold my-3 text-base">ABBOUT GIGALUMI</p>
                            <ul class="map-item-child ">
                                <li class="my-4">
                                    <a class="map-link hover:text-green-200" href="#faq/">About</a>
                                </li>
                                <li class="my-4">
                                    <a class="map-link hover:text-green-200" href="#">Privacy Policy</a>
                                </li>
                                <li class="my-4">
                                    <a class="map-link hover:text-green-200" href="#">Terms & Conditions</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="footer-contact flex flex-col text-base">
                    <div class="subscribe my-3">
                        <form action="">
                            <p class="font-semibold">BE THE FIRST TO KNOW ABOUT OUR SALES!</p>
                            <label class="my-6 flex h-14 text-center border border-gray-800 rounded-5" for="email"><input class="flex-1 mx-3" type="email" name="email" id="email" placeholder="Email Address"><input class="bg-black text-white font-bold h-full px-2" type="submit" value="SUBSCRIBE"></label>
                        </form>
                    </div>
                    <div class="call-us">
                        <p class="font-semibold">QUESTIONS? FEEDBACK? CALL US AT</p>
                        <p class="text-xl italic text-green-200 my-3 font-semibold">1-866-471-9811</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-social flex justify-center">
        <div class="social-icon-list flex flex-row">
            <a href=""><svg class="m-4 w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3 8h-1.35c-.538 0-.65.221-.65.778v1.222h2l-.209 2h-1.791v7h-3v-7h-2v-2h2v-2.308c0-1.769.931-2.692 3.029-2.692h1.971v3z"/>
            </svg></a>
            <a href=""><svg class="m-4 w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M11.984 16.815c2.596 0 4.706-2.111 4.706-4.707 0-1.409-.623-2.674-1.606-3.538-.346-.303-.735-.556-1.158-.748-.593-.27-1.249-.421-1.941-.421s-1.349.151-1.941.421c-.424.194-.814.447-1.158.749-.985.864-1.608 2.129-1.608 3.538 0 2.595 2.112 4.706 4.706 4.706zm.016-8.184c1.921 0 3.479 1.557 3.479 3.478 0 1.921-1.558 3.479-3.479 3.479s-3.479-1.557-3.479-3.479c0-1.921 1.558-3.478 3.479-3.478zm5.223.369h6.777v10.278c0 2.608-2.114 4.722-4.722 4.722h-14.493c-2.608 0-4.785-2.114-4.785-4.722v-10.278h6.747c-.544.913-.872 1.969-.872 3.109 0 3.374 2.735 6.109 6.109 6.109s6.109-2.735 6.109-6.109c.001-1.14-.327-2.196-.87-3.109zm2.055-9h-12.278v5h-1v-5h-1v5h-1v-4.923c-.346.057-.682.143-1 .27v4.653h-1v-4.102c-1.202.857-2 2.246-2 3.824v3.278h7.473c1.167-1.282 2.798-2 4.511-2 1.722 0 3.351.725 4.511 2h7.505v-3.278c0-2.608-2.114-4.722-4.722-4.722zm2.722 5.265c0 .406-.333.735-.745.735h-2.511c-.411 0-.744-.329-.744-.735v-2.53c0-.406.333-.735.744-.735h2.511c.412 0 .745.329.745.735v2.53z"/>
            </svg></a>
            <a href=""><svg class="m-4 w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
            </svg></a>
            <a href=""><svg class="m-4 w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
            </svg></a>
            <a href=""><svg class="m-4 w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M12 0c-6.627 0-12 5.372-12 12 0 5.084 3.163 9.426 7.627 11.174-.105-.949-.2-2.405.042-3.441.218-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.655 2.568-.994 3.995-.283 1.194.599 2.169 1.777 2.169 2.133 0 3.772-2.249 3.772-5.495 0-2.873-2.064-4.882-5.012-4.882-3.414 0-5.418 2.561-5.418 5.207 0 1.031.397 2.138.893 2.738.098.119.112.224.083.345l-.333 1.36c-.053.22-.174.267-.402.161-1.499-.698-2.436-2.889-2.436-4.649 0-3.785 2.75-7.262 7.929-7.262 4.163 0 7.398 2.967 7.398 6.931 0 4.136-2.607 7.464-6.227 7.464-1.216 0-2.359-.631-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146 1.124.347 2.317.535 3.554.535 6.627 0 12-5.373 12-12 0-6.628-5.373-12-12-12z" fill-rule="evenodd" clip-rule="evenodd"/>
            </svg></a>
        </div>
    </div>
    <div class="footer-aside text-gray-700 w-full border-t border-gray-300 pt-3 pb-2">
        <div class="container">
            <div class="footer-aside-inner flex flex-row justify-between items-center py-2">
                <div class="footer-info flex flex-col">
                    <div class="footer-info-content flex flex-row text-green-200 mb-2">
                        <a class=" underline" href="">Cookie Useage</a>
                        &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                        <a class=" underline" href="">Do Not Sell My Personal Information</a>
                        &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
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