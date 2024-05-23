<?php include "layouts/header.php" ?>

    <header class="header_fixed">
        <div class="header_content ">
            <div class="left">
                <a href="" class="dz_icon back_btn"><i class="fa-solid fa-chevron-left"></i></a>
            </div>
            <div class="middle">
                <h5>Category</h5>
            </div>
            <div class="right">
                <a href="search.php" class="dz_icon"><i class="fas fa-search"></i></a>
            </div>
        </div>
    </header>

    <main class="page_content wrap p-b100">
        <div class="container">
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

            <section class="latest_collectionProduct_area">
                <div class="title">
                    <h5>Discover Latest Collection</h5>
                </div>
                <div class="row items">
                    <div class="col-6">
                        <div class="latest_items_card">
                            <a href="" data-toggle="modal" data-target="#product_detailsModal">
                                <img src="./assets/images/product/p1.png">
                            </a>
                            <a href="" class="category_item_tag">
                                <b>Body Care</b>
                                <span class="total_items">(24 Items)</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="latest_items_card">
                            <a href="" data-toggle="modal" data-target="#product_detailsModal">
                                <img src="./assets/images/product/p2.png">
                            </a>
                            <a href="" class="category_item_tag">
                                <b>Skin Care</b>
                                <span class="total_items">(25 Items)</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="latest_items_card">
                            <a href="" data-toggle="modal" data-target="#product_detailsModal">
                                <img src="./assets/images/product/p3.png">
                            </a>
                            <a href="" class="category_item_tag">
                                <b>Accessories</b>
                                <span class="total_items">(14 Items)</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="latest_items_card">
                            <a href="" data-toggle="modal" data-target="#product_detailsModal">
                                <img src="./assets/images/product/p4.png">
                            </a>
                            <a href="" class="category_item_tag">
                                <b>Hair Care</b>
                                <span class="total_items">(20 Items)</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>      
    </main>


<?php include "layouts/product_modal.php"; ?>
<?php include "important/footer_fixed_bar.php"; ?>
<?php include "layouts/footer.php"; ?>