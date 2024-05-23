<?php include "layouts/header.php"; ?>
<main class="page_content p-b20">
    <div class="container">
        <div class="welcome_area">
            <div class="onboarding_area">
                <div class="image_box box1">
                    <img src="./assets/images/pic3.png" alt="">
                </div>
                <div class="image box2">
                    <img src="./assets/images/product/pic2.png" alt="">
                </div>
                <div class="image_box box3">
                    <img src="./assets/images/pic1.png" alt="">
                </div>
                <div class="image box4">
                    <img src="./assets/images/product/pic1.png" alt="">
                </div>
            </div>
            <div class="content_carousel_area">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="item_content">
                                <h1>A New Generation of Natural Cosmetic Ingredients</h1>
                                <p>Because You Need Time for Yourself Blend Beauty in You.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                        <div class="item_content">
                                <h1>A New Generation of Natural Cosmetic Ingredients</h1>
                                <p>Because You Need Time for Yourself Blend Beauty in You.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="item_content">
                                <h1>A New Generation of Natural Cosmetic Ingredients</h1>
                                <p>Because You Need Time for Yourself Blend Beauty in You.</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="footer_btn d-flex align-items-center justify-content-between">
                <a href="sign-in.php" class="skip_btn">Skip</a>
                <a href="sign-in.php" class="next_btn">Next <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</main>

<?php include "layouts/footer.php"; ?>