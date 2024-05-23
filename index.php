<?php include "layouts/header.php"; ?>

<header class="top_header">
    <div class="header_content">
        <div class="left_content" onclick="open_menu()">
            <img src="./assets/images/1.png" alt="">
            <div class="text">
                <h6>Hello</h6>
                <p>Elizabeth</p>
            </div>
        </div>
        <div class="right_bell">
            <a href="notification.php" class="bell_icon"><i class="fa-regular fa-bell"></i></a>
        </div>
    </div>
</header>
<main class="page_content wrap p-b70">
    <div class="container">
        
        <div class="search_box">
            <div class="form_group">
                <input type="text" class="form-control" placeholder="Search...">
                <span class="search_icons"><i class="fas fa-search"></i></span>
            </div>
        </div><!-- search_box -->

        <section class="banner_shape_section">
            <div class="product_aboute">
                <h3>A New Generation of Natural Cosmetic Ingredients</h3>
            </div>

            <div class="banner_swiper">

                <div class="banner_images_box">
                    <img src="./assets/images/pic1.png" alt="">
                </div>
                <div class="banner_images_box">
                    <img src="./assets/images/pic2.png" alt="">
                </div>
                <div class="banner_images_box">
                    <img src="./assets/images/pic3.png" alt="">
                </div>
                <div class="banner_images_box">
                    <img src="./assets/images/pic2.png" alt="">
                </div>

            </div><!-- banner_swiper -->

        </section><!-- banner_shape -->
        <section class="category_section">
            <div class="content">
                <h4>Because You Need Time For Yourself. Blend Beauty In You</h4>
            </div>
            <div class="category_swiper">

                <div class="category_items">
                    <a href="category.php" class="item_media">
                        <img src="./assets/images/pic(1).png" >
                    </a>
                    <h6 class="text">
                        <a href="category.php">Body Care</a>
                    </h6>
                </div>

                <div class="category_items">
                    <a href="category.php" class="item_media">
                        <img src="./assets/images/pic(2).png" >
                    </a>
                    <h6 class="text">
                        <a href="category.php">Accessories</a>
                    </h6>
                </div>

                <div class="category_items">
                    <a href="category.php" class="item_media">
                        <img src="./assets/images/pic4.png" >
                    </a>
                    <h6 class="text">
                        <a href="category.php">Hair Care</a>
                    </h6>
                </div>

                <div class="category_items">
                    <a href="category.php" class="item_media">
                        <img src="./assets/images/pic(3).png" >
                    </a>
                    <h6 class="text">
                        <a href="category.php">Skin Care</a>
                    </h6>
                </div>

                <div class="category_items">
                    <a href="category.php" class="item_media">
                        <img src="./assets/images/pic(1).png" >
                    </a>
                    <h6 class="text">
                        <a href="category.php">Body Care</a>
                    </h6>
                </div>

                <div class="category_items">
                    <a href="category.php" class="item_media">
                        <img src="./assets/images/pic(2).png" >
                    </a>
                    <h6 class="text">
                        <a href="category.php">Accessories</a>
                    </h6>
                </div>

                <div class="category_items">
                    <a href="category.php" class="item_media">
                        <img src="./assets/images/pic4.png" >
                    </a>
                    <h6 class="text">
                        <a href="category.php">Hair Care</a>
                    </h6>
                </div>

                <div class="category_items">
                    <a href="category.php" class="item_media">
                        <img src="./assets/images/pic(3).png" >
                    </a>
                    <h6 class="text">
                        <a href="category.php">Skin Care</a>
                    </h6>
                </div>
                
            </div>
        </section><!-- category_section -->

        <div class="media_banner_are">
            <img src="./assets/images/banners.png" alt="">
        </div><!-- media_banner_are -->

        <section class="product_section_are">
            <div class="product_title">
                <h4>Highly Recommended Beauty
                    <img src="./assets/images/1.png">
                    Essentials
                </h4>
            </div>
            <div class="swiper_product_items">

                <div class="product_card">
                    <a href="" data-toggle="modal" data-target="#product_detailsModal">
                        <div class="images">
                            <img src="./assets/images/product/pic1.png" alt="">
                        </div>
                    </a>
                    <a href="#" class="icons">
                        <i class="fas fa-heart"></i>
                    </a>
                    <div class="content">
                        <a href="" data-toggle="modal" data-target="#product_detailsModal">Repairing Body Serum</a>
                        <div class="star_icons">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="price">
                            <h6>$100 <del>$50</del></h6>
                        </div>
                    </div>
                </div>

                <div class="product_card">
                    <a href="" data-toggle="modal" data-target="#product_detailsModal">
                        <div class="images">
                            <img src="./assets/images/product/pic2.png" alt="">
                        </div>
                    </a>
                    <a href="#" class="icons">
                        <i class="fas fa-heart" onclick="bookMark()"></i>
                    </a>
                    <div class="content">
                        <a href="" data-toggle="modal" data-target="#product_detailsModal">Energizing Body Mist</a>
                        <div class="star_icons">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="price">
                            <h6>$90 <del>$40</del></h6>
                        </div>
                    </div>
                </div>

                <div class="product_card">
                    <a href="" data-toggle="modal" data-target="#product_detailsModal">
                        <div class="images">
                            <img src="./assets/images/product/pic3.png" alt="">
                        </div>
                    </a>
                    <a href="#" class="icons">
                        <i class="fas fa-heart"></i>
                    </a>
                    <div class="content">
                        <a href="" data-toggle="modal" data-target="#product_detailsModal">Exfoliating Body Scrub</a>
                        <div class="star_icons">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="price">
                            <h6>$70 <del>$30</del></h6>
                        </div>
                    </div>
                </div>

                <div class="product_card">
                    <a href="" data-toggle="modal" data-target="#product_detailsModal">
                        <div class="images">
                            <img src="./assets/images/product/pic1.png" alt="">
                        </div>
                    </a>
                    <a href="#" class="icons">
                        <i class="fas fa-heart"></i>
                    </a>
                    <div class="content">
                        <a href="" data-toggle="modal" data-target="#product_detailsModal">Moisturizing Body Lotion</a>
                        <div class="star_icons">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="price">
                            <h6>$80 <del>$90</del></h6>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- product_section_are -->

        <section class="recently_shortList_items">
            <div class="items_title">
                <h4>Recently Shortlisted By You</h4>
                <a href="product.php">See All <i class="fa-solid fa-caret-right"></i></a>
            </div>
            <div class="recent_product_items">

                <div class="items_box">
                    <div class="images">
                        <a href="" data-toggle="modal" data-target="#product_detailsModal">
                        <img src="./assets/images/product/1.png" alt="">
                        </a>
                    </div>
                    <div class="content">
                        <h6><a href="" data-toggle="modal" data-target="#product_detailsModal">
                            Infinite Charm Palet..
                        </a></h6>
                        <div class="price">
                            <h6>$200 <del>$100</del></h6>
                        </div>
                    </div>
                </div>

                <div class="items_box">
                    <div class="images">
                        <a href="" data-toggle="modal" data-target="#product_detailsModal">
                        <img src="./assets/images/product/2.png" alt="">
                        </a>
                    </div>
                    <div class="content">
                        <h6><a href="" data-toggle="modal" data-target="#product_detailsModal">
                            Crystal Clear Cleans..
                        </a></h6>
                        <div class="price">
                            <h6>$220 <del>$100</del></h6>
                        </div>
                    </div>
                </div>

                <div class="items_box">
                    <div class="images">
                        <a href="" data-toggle="modal" data-target="#product_detailsModal">
                        <img src="./assets/images/product/3.png" alt="">
                        </a>
                    </div>
                    <div class="content">
                        <h6><a href="" data-toggle="modal" data-target="#product_detailsModal">
                            Luxe Velvet Eyesh..
                        </a></h6>
                        <div class="price">
                            <h6>$300 <del>$100</del></h6>
                        </div>
                    </div>
                </div>

                <div class="items_box">
                    <div class="images">
                        <a href="" data-toggle="modal" data-target="#product_detailsModal">
                        <img src="./assets/images/product/1.png" alt="">
                        </a>
                    </div>
                    <div class="content">
                        <h6><a href="" data-toggle="modal" data-target="#product_detailsModal">
                            Infinite Charm Palet..
                        </a></h6>
                        <div class="price">
                            <h6>$400 <del>$150</del></h6>
                        </div>
                    </div>
                </div>

                <div class="items_box">
                    <div class="images">
                        <a href="" data-toggle="modal" data-target="#product_detailsModal">
                        <img src="./assets/images/product/2.png" alt="">
                        </a>
                    </div>
                    <div class="content">
                        <h6><a href="" data-toggle="modal" data-target="#product_detailsModal">
                            Luxe Velvet Eyesh..
                        </a></h6>
                        <div class="price">
                            <h6>$240 <del>$100</del></h6>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="sponsored_product">
            <div class="title">
                <h5>Sponsored</h5>
                <a href="product.php">See All <i class="fa-solid fa-caret-right"></i></a>
            </div>
            <div class="sponsored_items">

                <div class="items_card">
                    <div class="content">
                        <h6><a href="">Firming Body Gel</a></h6>
                        <div class="price">
                            <p>$120 <del>$70</del></p>
                        </div>
                        <span class="offer">Min. 30% Off</span>
                    </div>
                    <div class="images_box">
                        <a href="" data-toggle="modal" data-target="#product_detailsModal">
                            <img src="./assets/images/product/pic4.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="items_card">
                    <div class="content">
                        <h6><a href="" data-toggle="modal" data-target="#product_detailsModal">Hydrating Shower Gel</a></h6>
                        <div class="price">
                            <p>$125 <del>$80</del></p>
                        </div>
                        <span class="offer">Min. 40% Off</span>
                    </div>
                    <div class="images_box">
                        <a href="" data-toggle="modal" data-target="#product_detailsModal">
                            <img src="./assets/images/product/pic4.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="items_card">
                    <div class="content">
                        <h6><a href="" data-toggle="modal" data-target="#product_detailsModal">Detoxifying Body Mask</a></h6>
                        <div class="price">
                            <p>$130 <del>$50</del></p>
                        </div>
                        <span class="offer">Min. 20% Off</span>
                    </div>
                    <div class="images_box">
                        <a href="" data-toggle="modal" data-target="#product_detailsModal">
                            <img src="./assets/images/product/pic4.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="items_card">
                    <div class="content">
                        <h6><a href="" data-toggle="modal" data-target="#product_detailsModal">Hydrating Shower Gel</a></h6>
                        <div class="price">
                            <p>$125 <del>$80</del></p>
                        </div>
                        <span class="offer">Min. 40% Off</span>
                    </div>
                    <div class="images_box">
                        <a href="" data-toggle="modal" data-target="#product_detailsModal">
                            <img src="./assets/images/product/pic4.png" alt="">
                        </a>
                    </div>
                </div>

            </div>
        </section>

        <section class="people_viewed_product">
            <div class="title">
                <h5>People Also Viewed</h5>
                <a href="product.php">See All <i class="fa-solid fa-caret-right"></i></a>
            </div>
            <div class="row items_row_style">

                <div class="col-6">
                    <div class="dz_items_card">
                        <h5><a href="" data-toggle="modal" data-target="#product_detailsModal">Cleansing Body Wash</a></h5>
                        <div class="images_box">
                            <a href="" data-toggle="modal" data-target="#product_detailsModal">
                                <img src="./assets/images/product/4.png" alt="">
                            </a>
                        </div>
                        <div class="dz_meta">
                            <div class="price">
                                <p>$220 <del>$100</del></p>
                            </div>
                            <div class="status">
                                <h6>Free delivery</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="dz_items_card">
                        <h5><a href="" data-toggle="modal" data-target="#product_detailsModal">Calming Body Lotion</a></h5>
                        <div class="images_box">
                            <a href="" data-toggle="modal" data-target="#product_detailsModal">
                                <img src="./assets/images/product/5.png" alt="">
                            </a>
                        </div>
                        <div class="dz_meta">
                            <div class="price">
                                <p>$520 <del>$120</del></p>
                            </div>
                            <div class="status">
                                <h6>Free delivery</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="dz_items_card">
                        <h5><a href="" data-toggle="modal" data-target="#product_detailsModal">Skin Care Body Product</a></h5>
                        <div class="images_box">
                            <a href="" data-toggle="modal" data-target="#product_detailsModal">
                                <img src="./assets/images/product/6.png" alt="">
                            </a>
                        </div>
                        <div class="dz_meta">
                            <div class="price">
                                <p>$200 <del>$50</del></p>
                            </div>
                            <div class="status">
                                <h6>Free delivery</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="dz_items_card">
                        <h5><a href="" data-toggle="modal" data-target="#product_detailsModal">Illuminating Body Oil</a></h5>
                        <div class="images_box">
                            <a href="" data-toggle="modal" data-target="#product_detailsModal">
                                <img src="./assets/images/product/7.png" alt="">
                            </a>
                        </div>
                        <div class="dz_meta">
                            <div class="price">
                                <p>$120 <del>$60</del></p>
                            </div>
                            <div class="status">
                                <h6>Free delivery</h6>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="your_cart_items">
            <div class="title">
                <h5>Items In Your Cart</h5>
                <a href="cart.php">View Cart</a>
            </div>
            <div class="full_cart_wrapper">

                <div class="dz_items">
                    <div class="items_details">
                        <div class="images_box">
                            <img src="./assets/images/product/4.png" alt="">
                        </div>
                        <div class="dz_content">
                            <h6><a href="" data-toggle="modal" data-target="#product_detailsModal">Skin Care Body Product</a></h6>
                            <div class="dz_meta">
                                <div class="dz_price">
                                    <p>$100 <del>$60</del></p>
                                </div>
                                <div class="dz_review">
                                    <i class="fas fa-star"></i>
                                    <span>(2k Review)</span>
                                </div>
                            </div>
                            <div class="dz_quantity">
                                <h6>Quantity : <span class="quantity">1</span></h6>
                            </div>
                        </div>
                    </div>
                    <div class="delete_btn">
                        <span><i class="fa-solid fa-xmark"></i></span>
                    </div>
                </div>

                <div class="dz_items">
                    <div class="items_details">
                        <div class="images_box">
                            <img src="./assets/images/product/5.png" alt="">
                        </div>
                        <div class="dz_content">
                            <h6><a href="" data-toggle="modal" data-target="#product_detailsModal">Balancing Body Toner</a></h6>
                            <div class="dz_meta">
                                <div class="dz_price">
                                    <p>$110 <del>$60</del></p>
                                </div>
                                <div class="dz_review">
                                    <i class="fas fa-star"></i>
                                    <span>(2.1k Review)</span>
                                </div>
                            </div>
                            <div class="dz_quantity">
                                <h6>Quantity : <span class="quantity">1</span></h6>
                            </div>
                        </div>
                    </div>
                    <div class="delete_btn">
                        <span><i class="fa-solid fa-xmark"></i></span>
                    </div>
                </div>

                <div class="dz_items">
                    <div class="items_details">
                        <div class="images_box">
                            <img src="./assets/images/product/6.png" alt="">
                        </div>
                        <div class="dz_content">
                            <h6><a href="" data-toggle="modal" data-target="#product_detailsModal">Soothing Body Cream</a></h6>
                            <div class="dz_meta">
                                <div class="dz_price">
                                    <p>$130 <del>$50</del></p>
                                </div>
                                <div class="dz_review">
                                    <i class="fas fa-star"></i>
                                    <span>(2.0k Review)</span>
                                </div>
                            </div>
                            <div class="dz_quantity">
                                <h6>Quantity : <span class="quantity">1</span></h6>
                            </div>
                        </div>
                    </div>
                    <div class="delete_btn">
                        <span><i class="fa-solid fa-xmark"></i></span>
                    </div>
                </div>

            </div>
            <a href="" class="btn checkout_btn"><i class="fas fa-arrow-right"></i> Proceed To Checkout <span>(3)</span></a>
        </section>

        <section class="nearby_area">
            <div class="title">
                <div class="left">
                    <h5>Popular Nearby</h5>
                    <span>Up to 60% off + up to $107 cashback</span>
                </div>
                <a href="product.php" class="mt-auto">See All <i class="fa-solid fa-caret-right"></i></a>
            </div>
            <div class="map_area">
                <img src="./assets/images/map2.png">
            </div>
            <div class="product_slider_area">

                <div class="dz_items_card">
                    <h6><a href="" data-toggle="modal" data-target="#product_detailsModal">Skin Care Body Product</a></h6>
                    <div class="images_box">
                        <a href="" data-toggle="modal" data-target="#product_detailsModal">
                            <img src="./assets/images/product/4.png" alt="">
                        </a>
                    </div>
                    <div class="dz_meta">
                        <div class="price">
                            <p>$220 <del>$100</del></p>
                        </div>
                        <div class="status">
                            <h6>Free delivery</h6>
                        </div>
                    </div>
                </div>

                <div class="dz_items_card">
                    <h6><a href="">Skin Care Body Product</a></h6>
                    <div class="images_box">
                        <a href="" data-toggle="modal" data-target="#product_detailsModal">
                            <img src="./assets/images/product/5.png" alt="">
                        </a>
                    </div>
                    <div class="dz_meta">
                        <div class="price">
                            <p>$230 <del>$100</del></p>
                        </div>
                        <div class="status">
                            <h6>Free delivery</h6>
                        </div>
                    </div>
                </div>

                <div class="dz_items_card">
                    <h6><a href="" data-toggle="modal" data-target="#product_detailsModal">Cleansing Body Wash</a></h6>
                    <div class="images_box">
                        <a href="" data-toggle="modal" data-target="#product_detailsModal">
                            <img src="./assets/images/product/6.png" alt="">
                        </a>
                    </div>
                    <div class="dz_meta">
                        <div class="price">
                            <p>$220 <del>$100</del></p>
                        </div>
                        <div class="status">
                            <h6>Free delivery</h6>
                        </div>
                    </div>
                </div>

                <div class="dz_items_card">
                    <h6><a href="" data-toggle="modal" data-target="#product_detailsModal">Cleansing Body Wash</a></h6>
                    <div class="images_box">
                        <a href="" data-toggle="modal" data-target="#product_detailsModal">
                            <img src="./assets/images/product/7.png" alt="">
                        </a>
                    </div>
                    <div class="dz_meta">
                        <div class="price">
                            <p>$260 <del>$100</del></p>
                        </div>
                        <div class="status">
                            <h6>Free delivery</h6>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <div class="offer_banner_are">
            <div class="banner_box">
                <img src="./assets/images/banner1.png" alt="">
            </div>
            <div class="banner_box">
                <img src="./assets/images/banner2.png" alt="">
            </div>
            <div class="banner_box">
                <img src="./assets/images/banner3.png" alt="">
            </div>
            <div class="banner_box">
                <img src="./assets/images/banner2.png" alt="">
            </div>
        </div>
        <section class="deals_products_area">
            <div class="title">
                <h5>Blockbuster Deals</h5>
                <a href="product.php">See All Deals <i class="fa-solid fa-caret-right"></i></a>
            </div>
            <div class="deals_items_slider">

                <div class="product_card">
                    <a href="" data-toggle="modal" data-target="#product_detailsModal">
                        <div class="images">
                            <img src="./assets/images/product/pic1.png" alt="">
                        </div>
                    </a>
                    <a href="#" class="icons">
                        <i class="fas fa-heart"></i>
                    </a>
                    <div class="content">
                        <span class="text">
                            <h6 class="offer">up to 79% off</h6>
                            <a href="" data-toggle="modal" data-target="#product_detailsModal">Repairing Body Serum</a>
                        </span>
                        <div class="price">
                            <h6>$100 <del>$50</del></h6>
                        </div>
                    </div>
                </div>

                <div class="product_card">
                    <a href="" data-toggle="modal" data-target="#product_detailsModal">
                        <div class="images">
                            <img src="./assets/images/product/pic2.png" alt="">
                        </div>
                    </a>
                    <a href="#" class="icons">
                        <i class="fas fa-heart"></i>
                    </a>
                    <div class="content">
                        <span class="text">
                            <h6 class="offer">up to 79% off</h6>
                            <a href="" data-toggle="modal" data-target="#product_detailsModal">Repairing Body Serum</a>
                        </span>
                        <div class="price">
                            <h6>$100 <del>$50</del></h6>
                        </div>
                    </div>
                </div>

                <div class="product_card">
                    <a href="" data-toggle="modal" data-target="#product_detailsModal">
                        <div class="images">
                            <img src="./assets/images/product/pic3.png" alt="">
                        </div>
                    </a>
                    <a href="#" class="icons">
                        <i class="fas fa-heart"></i>
                    </a>
                    <div class="content">
                        <span class="text">
                            <h6 class="offer">up to 79% off</h6>
                            <a href="" data-toggle="modal" data-target="#product_detailsModal">Repairing Body Serum</a>
                        </span>
                        <div class="price">
                            <h6>$100 <del>$50</del></h6>
                        </div>
                    </div>
                </div>

                <div class="product_card">
                    <a href="" data-toggle="modal" data-target="#product_detailsModal">
                        <div class="images">
                            <img src="./assets/images/product/pic2.png" alt="">
                        </div>
                    </a>
                    <a href="#" class="icons">
                        <i class="fas fa-heart"></i>
                    </a>
                    <div class="content">
                        <span class="text">
                            <h6 class="offer">up to 79% off</h6>
                            <a href="" data-toggle="modal" data-target="#product_detailsModal">Repairing Body Serum</a>
                        </span>
                        <div class="price">
                            <h6>$100 <del>$50</del></h6>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="wishList_items_area">
            <div class="title">
                <h5>Add To Your Wishlist</h5>
                <a href="product.php">See All <i class="fa-solid fa-caret-right"></i></a>
            </div>
            <div class="wishList_slider">

                <div class="product_card">
                    <a href="" data-toggle="modal" data-target="#product_detailsModal">
                        <div class="images">
                            <img src="./assets/images/product/pic1.png" alt="">
                        </div>
                    </a>
                    <a href="#" class="icons">
                        <i class="fas fa-heart"></i>
                    </a>
                    <div class="content">
                        <a href="" data-toggle="modal" data-target="#product_detailsModal">Repairing Body Serum</a>
                        <div class="star_icons">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="price">
                            <h6>$100 <del>$50</del></h6>
                        </div>
                    </div>
                </div>

                <div class="product_card">
                    <a href="" data-toggle="modal" data-target="#product_detailsModal">
                        <div class="images">
                            <img src="./assets/images/product/pic2.png" alt="">
                        </div>
                    </a>
                    <a href="#" class="icons">
                        <i class="fas fa-heart"></i>
                    </a>
                    <div class="content">
                        <a href="" data-toggle="modal" data-target="#product_detailsModal">Energizing Body Mist</a>
                        <div class="star_icons">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="price">
                            <h6>$90 <del>$40</del></h6>
                        </div>
                    </div>
                </div>

                <div class="product_card">
                    <a href="" data-toggle="modal" data-target="#product_detailsModal">
                        <div class="images">
                            <img src="./assets/images/product/pic3.png" alt="">
                        </div>
                    </a>
                    <a href="#" class="icons">
                        <i class="fas fa-heart"></i>
                    </a>
                    <div class="content">
                        <a href="" data-toggle="modal" data-target="#product_detailsModal">Exfoliating Body Scrub</a>
                        <div class="star_icons">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="price">
                            <h6>$70 <del>$30</del></h6>
                        </div>
                    </div>
                </div>

                <div class="product_card">
                    <a href="" data-toggle="modal" data-target="#product_detailsModal">
                        <div class="images">
                            <img src="./assets/images/product/pic1.png" alt="">
                        </div>
                    </a>
                    <a href="#" class="icons">
                        <i class="fas fa-heart"></i>
                    </a>
                    <div class="content">
                        <a href="" data-toggle="modal" data-target="#product_detailsModal">Repairing Body Serum</a>
                        <div class="star_icons">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="price">
                            <h6>$100 <del>$50</del></h6>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="feature_items_section">
            <div class="title">
                <h5>Featured Now</h5>
                <a href="product.php">See All <i class="fa-solid fa-caret-right"></i></a>
            </div>
            <div class="feature_carousel">

                <div class="dz_items">
                    <a href="" data-toggle="modal" data-target="#product_detailsModal">
                    <div class="dz_images">
                        <img src="./assets/images/product/4.png">
                    </div>
                    <div class="dz_content">
                        <h6>Exfoliating Body Scrub</h6>
                        <div class="dz_meta">
                            <div class="price">
                                <p>$200 <del>$80</del></p>
                            </div>
                            <div class="review">
                                <i class="fas fa-star"></i>
                                <span>(2k Review)</span>
                            </div>
                        </div>
                        <h6 class="offer">40% off</h6>
                    </div>
                    </a>
                </div>

                <div class="dz_items">
                    <a href="" data-toggle="modal" data-target="#product_detailsModal">
                    <div class="dz_images">
                        <img src="./assets/images/product/5.png">
                    </div>
                    <div class="dz_content">
                        <h6>Exfoliating Body Scrub</h6>
                        <div class="dz_meta">
                            <div class="price">
                                <p>$200 <del>$80</del></p>
                            </div>
                            <div class="review">
                                <i class="fas fa-star"></i>
                                <span>(2k Review)</span>
                            </div>
                        </div>
                        <h6 class="offer">40% off</h6>
                    </div>
                    </a>
                </div>

                <div class="dz_items">
                    <a href="" data-toggle="modal" data-target="#product_detailsModal">
                    <div class="dz_images">
                        <img src="./assets/images/product/5.png">
                    </div>
                    <div class="dz_content">
                        <h6>Exfoliating Body Scrub</h6>
                        <div class="dz_meta">
                            <div class="price">
                                <p>$200 <del>$80</del></p>
                            </div>
                            <div class="review">
                                <i class="fas fa-star"></i>
                                <span>(2k Review)</span>
                            </div>
                        </div>
                        <h6 class="offer">40% off</h6>
                    </div>
                    </a>
                </div>
                
            </div>
        </section>

        <div class="featured_offer">
            <div class="title">
                <h5>Featured Offer For You</h5>
                <a href="product.php">See All <i class="fa-solid fa-caret-right"></i></a>
            </div>
            <div class="banner_carousel">
                
                <div class="banner_box">
                    <img src="./assets/images/banner1.png" alt="">
                </div>
                
                <div class="banner_box">
                    <img src="./assets/images/banner2.png" alt="">
                </div>
                
                <div class="banner_box">
                    <img src="./assets/images/banner3.png" alt="">
                </div>

            </div>
        </div>

        <section class="great_saving_items">
            <div class="title">
                <h5>Great Saving On Everyday Essentials</h5>
                <p>Up to 60% off + up to $107 cashback</p>
            </div>
            <div class="row items_row_style">

                <div class="col-6">
                    <div class="dz_items_card">
                        <a href="" data-toggle="modal" data-target="#product_detailsModal">
                        <h5>Cleansing Body Wash</h5>
                        <div class="images_box">
                            <img src="./assets/images/product/4.png" alt="">
                        </div>
                        <div class="dz_meta">
                            <div class="price">
                                <p>$220 <del>$100</del></p>
                            </div>
                            <div class="status">
                                <h6>Free delivery</h6>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="dz_items_card">
                        <a href="" data-toggle="modal" data-target="#product_detailsModal">
                        <h5>Calming Body Lotion</h5>
                        <div class="images_box">
                            <img src="./assets/images/product/5.png" alt="">
                        </div>
                        <div class="dz_meta">
                            <div class="price">
                                <p>$520 <del>$120</del></p>
                            </div>
                            <div class="status">
                                <h6>Free delivery</h6>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>

                <div class="col-6">
                    <div class="dz_items_card">
                        <a href="" data-toggle="modal" data-target="#product_detailsModal">
                        <h5>Skin Care Body Product</h5>
                        <div class="images_box">
                            <img src="./assets/images/product/6.png" alt="">
                        </div>
                        <div class="dz_meta">
                            <div class="price">
                                <p>$200 <del>$50</del></p>
                            </div>
                            <div class="status">
                                <h6>Free delivery</h6>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="dz_items_card">
                        <a href="" data-toggle="modal" data-target="#product_detailsModal">
                        <h5>Illuminating Body Oil</h5>
                        <div class="images_box">
                            <img src="./assets/images/product/7.png" alt="">
                        </div>
                        <div class="dz_meta">
                            <div class="price">
                                <p>$120 <del>$60</del></p>
                            </div>
                            <div class="status">
                                <h6>Free delivery</h6>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>

            </div>
        </section>

    </div>
</main><!-- page_full_wrapper -->


<?php include "important/navside_bar.php" ?>
<?php include "layouts/product_modal.php"; ?>
<?php include "important/footer_fixed_bar.php"; ?>
<?php include "layouts/footer.php"; ?>