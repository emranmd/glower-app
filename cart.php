<?php include "layouts/header.php"; ?>

<header class="header_fixed">
    <div class="header_content ">
        <div class="left">
            <a href="" class="dz_icon back_btn"><i class="fa-solid fa-chevron-left"></i></a>
        </div>
        <div class="middle">
            <h5>My Cart</h5>
        </div>
        <div class="right">
            <a href="search.php" class="dz_icon"><i class="fas fa-search"></i></a>
        </div>
    </div>
</header>

    <main class="page_content wrap p-b110">
        <div class="container">
            <div class="my_cart_wrapper">

                <div class="cart_items">
                    <div class="dz_images">
                        <img src="./assets/images/product/1.png" alt="">
                    </div>
                    <div class="dz_content">
                        <h5><a href=""  data-toggle="modal" data-target="#product_detailsModal">Skin Care Body Product</a></h5>
                        <div class="dz_meta">
                            <div class="price">
                                <p>$200 <del>$100</del></p>
                            </div>
                            <div class="review">
                                <i class="fas fa-star"></i>
                                <span>(2.4k Review)</span>
                            </div>
                        </div>
                        <div class="dz-stepper">
                            <div class="input_group">
                                <button class="btn input_btn minus_btn"><i class="fas fa-minus"></i></button>
                                <input readonly type="text" class="form-control input_style" value="1">
                                <button class="btn input_btn plus_btn"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="cart_items">
                    <div class="dz_images">
                        <img src="./assets/images/product/1.png" alt="">
                    </div>
                    <div class="dz_content">
                        <h5><a href=""  data-toggle="modal" data-target="#product_detailsModal">Skin Care Body Product</a></h5>
                        <div class="dz_meta">
                            <div class="price">
                                <p>$200 <del>$100</del></p>
                            </div>
                            <div class="review">
                                <i class="fas fa-star"></i>
                                <span>(2.4k Review)</span>
                            </div>
                        </div>
                        <div class="dz-stepper">
                            <div class="input_group">
                                <button class="btn input_btn minus_btn"><i class="fas fa-minus"></i></button>
                                <input readonly type="text" class="form-control input_style" value="1">
                                <button class="btn input_btn plus_btn"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="cart_items">
                    <div class="dz_images">
                        <img src="./assets/images/product/2.png" alt="">
                    </div>
                    <div class="dz_content">
                        <h5><a href=""  data-toggle="modal" data-target="#product_detailsModal">Illuminating Body Oil</a></h5>
                        <div class="dz_meta">
                            <div class="price">
                                <p>$250 <del>$100</del></p>
                            </div>
                            <div class="review">
                                <i class="fas fa-star"></i>
                                <span>(2k Review)</span>
                            </div>
                        </div>
                        <div class="dz-stepper">
                            <div class="input_group">
                                <button class="btn input_btn minus_btn"><i class="fas fa-minus"></i></button>
                                <input readonly type="text" class="form-control input_style" value="1">
                                <button class="btn input_btn plus_btn"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="cart_items">
                    <div class="dz_images">
                        <img src="./assets/images/product/3.png" alt="">
                    </div>
                    <div class="dz_content">
                        <h5><a href=""  data-toggle="modal" data-target="#product_detailsModal">Skin Care Body Product</a></h5>
                        <div class="dz_meta">
                            <div class="price">
                                <p>$230 <del>$100</del></p>
                            </div>
                            <div class="review">
                                <i class="fas fa-star"></i>
                                <span>(2.2k Review)</span>
                            </div>
                        </div>
                        <div class="dz-stepper">
                            <div class="input_group">
                                <button class="btn input_btn minus_btn"><i class="fas fa-minus"></i></button>
                                <input readonly type="text" class="form-control input_style" value="1">
                                <button class="btn input_btn plus_btn"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="cart_items">
                    <div class="dz_images">
                        <img src="./assets/images/product/2.png" alt="">
                    </div>
                    <div class="dz_content">
                        <h5><a href=""  data-toggle="modal" data-target="#product_detailsModal">Calming Body Lotion</a></h5>
                        <div class="dz_meta">
                            <div class="price">
                                <p>$210 <del>$100</del></p>
                            </div>
                            <div class="review">
                                <i class="fas fa-star"></i>
                                <span>(2.1k Review)</span>
                            </div>
                        </div>
                        <div class="dz-stepper">
                            <div class="input_group">
                                <button class="btn input_btn minus_btn"><i class="fas fa-minus"></i></button>
                                <input readonly type="text" class="form-control input_style" value="1">
                                <button class="btn input_btn plus_btn"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="cart_footer_fixed_btn">
            <div class="total_price">
                <h5>Subtotal</h5>
                <h6>$3,324</h6>
            </div>
            <a href="" class="btn product_buy_btn">Proceed to Buy <b> (8 items)</b></a>
        </div>
    </main>

<?php include "layouts/product_modal.php" ?>
<?php include "layouts/footer.php"; ?>