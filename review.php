<?php include "layouts/header.php"; ?>

<header class="header_fixed">
    <div class="header_content ">
        <div class="left">
            <a href="" class="dz_icon back_btn"><i class="fa-solid fa-chevron-left"></i></a>
        </div>
        <div class="middle">
            <h5>Write Review</h5>
        </div>
    </div>
</header>
<main class="page_content wrap p-b110">
    <div class="container">
        <div class="review_items_area">
            <div class="wishlist_item_box">
                <div class="dz_items">
                    <div class="images_box">
                        <img src="./assets/images/product/6.png" alt="">
                    </div>
                    <div class="dz_content">
                        <h5><a href="" data-toggle="modal" data-target="#product_detailsModal">Skin Care Body Product</a></h5>
                        <div class="dz_meta">
                            <div class="dz_price">
                                <p>$120 <del>$70</del></p>
                            </div>
                            <div class="review">
                                <i class="fas fa-star"></i>
                                <span>(2.1k Review)</span>
                            </div>
                        </div>
                        <span class="dz_status text-success d-inline-block">In Delivery</span>
                        <span class="dz_offer">50% Off</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="rating_area">
            <h5 class="rating_title">Overall Rating</h5>
            <span class="dz_text">Your Average Rating Is 4.0</span>
            <ul class="rating_star">
                <li class="active"><i class="fas fa-star"></i></li>
                <li class="active"><i class="fas fa-star"></i></li>
                <li class="active"><i class="fas fa-star"></i></li>
                <li class="active"><i class="fas fa-star"></i></li>
                <li class=""><i class="fas fa-star"></i></li>
            </ul>
        </div>
        <div class="review_form">
            <form action="" method="post">
                <div class="form_group">
                    <label>Review Title</label>
                    <input type="text" class="form-control input_style2" name="review_title">
                </div>
                <div class="form_group">
                    <label>Product Review</label>
                    <textarea type="text" name="notes" class="form-control textarea_style" rows="3"></textarea>
                </div>
                <p class="dz_title">Would you recommend this product to a friend?</p>
                <div class="radio_button">
                    <label class="radio_label">
                        <input type="radio" name="radio1"> Yes
                    </label>
                    <label class="radio_label">
                        <input type="radio" name="radio1"> No
                    </label>
                </div>
                <div class="footer_fixed_submitBtn">
                    <div class="submit_btn_area">
                        <a href="my-order.php" class="btn review_btn">Submit Review</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
    


<?php include "layouts/product_modal.php"; ?>
<?php include "layouts/footer.php"; ?>