<?php include "layouts/header.php"; ?>

    <header class="header_fixed">
        <div class="header_content ">
            <div class="left">
                <a href="" class="dz_icon back_btn"><i class="fa-solid fa-chevron-left"></i></a>
            </div>
            <div class="middle">
                <h5>Add delivery address</h5>
            </div>
        </div>
    </header>

    <main class="page_content wrap p-b100">
        <div class="container">
            <form action="" method="post">
                <div class="address_list_group">

                    <div class="group_list" for="radio">
                        <label class="itemlist_label">
                            <input type="radio" name="radio1" id="radio">
                            <div class="checkMark_are">
                                <div class="icons_fill">
                                    <i class="fas fa-home"></i>
                                </div>
                                <div class="list_content">
                                    <h6>Home Address</h6>
                                    <p>123 Main Street, Any town, USA 12345</p>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="group_list" for="radio">
                        <label class="itemlist_label">
                            <input type="radio" name="radio1" id="radio">
                            <div class="checkMark_are">
                                <div class="icons_fill">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="list_content">
                                    <h6>Office Address</h6>
                                    <p>456 Elm Avenue, Smalltime, CA 98765</p>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="group_list" for="radio">
                        <label class="itemlist_label">
                            <input type="radio" name="radio1" id="radio">
                            <div class="checkMark_are">
                                <div class="icons_fill">
                                    <i class="fas fa-home"></i>
                                </div>
                                <div class="list_content">
                                    <h6>Home Address</h6>
                                    <p>789 Maple Lane, Suburbia, NY 54321</p>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="group_list" for="radio">
                        <label class="itemlist_label">
                            <input type="radio" name="radio1" id="radio">
                            <div class="checkMark_are">
                                <div class="icons_fill">
                                    <i class="fa-solid fa-shop"></i>
                                </div>
                                <div class="list_content">
                                    <h6>Shop Address</h6>
                                    <p>654 Pine Road, Countryside, FL 34567</p>
                                </div>
                            </div>
                        </label>
                    </div>

                </div>
                <a href="add-delivery-address.php" class="add_address">
                    <span class="plus_icon"><i class="fas fa-plus"></i></span>
                    <span class="add">Add Address</span>
                    <i class="fas fa-chevron-right"></i>
                </a>
                <div class="footer_fixed_submitBtn">
                    <div class="submit_btn_area">
                        <a href="checkout.php" class="btn review_btn">Save Address</a>
                    </div>
                </div>
            </form>
        </div>
    </main>


<?php include "layouts/footer.php"; ?>