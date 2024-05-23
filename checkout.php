<?php include "layouts/header.php"; ?>

<header class="header_fixed">
    <div class="header_content ">
        <div class="left">
            <a href="" class="dz_icon back_btn"><i class="fa-solid fa-chevron-left"></i></a>
        </div>
        <div class="middle">
            <h5>Checkout</h5>
        </div>
    </div>
</header>

<main class="page_content wrap p-b100">
    <div class="container">
        <div class="checkout_area">
            <div class="checkout_group_list">
                <div class="checkout_list">
                    <a href="delivery-address.php" class="list_link">
                        <div class="dz_icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="list_content">
                            <h6>Delivery address</h6>
                            <p>123 Main Street, Any town, USA 12345</p>
                        </div>
                        <span><i class="fa-solid fa-angle-right"></i></span>
                    </a>
                </div>
                <div class="checkout_list">
                    <a href="payment.php" class="list_link">
                        <div class="dz_icon">
                            <i class="fa-regular fa-credit-card"></i>
                        </div>
                        <div class="list_content">
                            <h6>Payment</h6>
                            <p>XXXX XXXX XXXX 3456</p>
                        </div>
                        <span><i class="fa-solid fa-angle-right"></i></span>
                    </a>
                </div>
            </div>
            <div class="notes_input_area">
                <form action="" method="post">
                    <div class="form_group">
                        <label>Additional Notes :</label>
                        <textarea name="notes_text" class="form-control textarea_style" rows="3" placeholder="Write Here"></textarea>
                    </div>
                    <div class="footer_fixed_submitBtn">
                        <div class="submit_btn_area">
                            <a href="my-order.php" class="btn review_btn">Submit Order</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="view_order_info">
                <div class="view_cart">
                    <span class="name">Skin Care Body Product</span>
                    <span class="about">2 x $2000.00</span>
                </div>
                <div class="view_cart">
                    <span class="name">Plum Green Tea</span>
                    <span class="about">2 x $1699.00</span>
                </div>
                <div class="view_cart">
                    <span class="name">Discount</span>
                    <span class="about">-$100.00</span>
                </div>
                <div class="view_cart">
                    <span class="name">Shipping</span>
                    <span class="status">FREE Delivery</span>
                </div>
                <div class="totalPrice">
                    <span class="name">My Order</span>
                    <h5 class="price">$3,599.00</h5>
                </div>
            </div>
        </div>
    </div>
</main>


<?php include "layouts/footer.php"; ?>