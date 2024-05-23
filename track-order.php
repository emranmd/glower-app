<?php include "layouts/header.php"; ?>

    <header class="header_fixed">
        <div class="header_content ">
            <div class="left">
                <a href="" class="dz_icon back_btn"><i class="fa-solid fa-chevron-left"></i></a>
            </div>
            <div class="middle">
                <h5>Track Order</h5>
            </div>
        </div>
    </header>
    <main class="page_content wrap p-b65">
        <div class="container">
            <div class="order_items">
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
            <div class="delivery_process">
                <h5 class="dz_title">Track order</h5>
                <ul class="delivery_timeline">
                    <li class="timeline_items active">
                        <div class="active_box">
                            <div class="timeline_title">
                                <span class="title">order placed</span>
                                <span class="timeline_date">27 Dec 2024</span>
                            </div>
                            <p class="timeline_text">We have received your order</p>
                        </div>
                    </li>
                    <li class="timeline_items active">
                        <div class="active_box">
                            <div class="timeline_title">
                                <span class="title">Order Confirm</span>
                                <span class="timeline_date">27 Dec 2024</span>
                            </div>
                            <p class="timeline_text">We has been confirmed</p>
                        </div>
                    </li>
                    <li class="timeline_items ">
                        <div class="active_box">
                            <div class="timeline_title">
                                <span class="title">Ready To Ship</span>
                                <span class="timeline_date">28 Dec 2024</span>
                            </div>
                            <p class="timeline_text">We are preparing your order</p>
                        </div>
                    </li>
                    <li class="timeline_items ">
                        <div class="active_box">
                            <div class="timeline_title">
                                <span class="title">Order Placed</span>
                                <span class="timeline_date">29 Dec 2024</span>
                            </div>
                            <p class="timeline_text">Your order is ready for shipping</p>
                        </div>
                    </li>
                    <li class="timeline_items">
                        <div class="active_box">
                            <div class="timeline_title">
                                <span class="title">Out For Delivery</span>
                                <span class="timeline_date">30 Dec 2024</span>
                            </div>
                            <p class="timeline_text">Your order is out for delivery</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </main>


<?php include "layouts/product_modal.php"; ?>
<?php include "layouts/footer.php"; ?>