<?php include "layouts/header.php"; ?>

    <header class="top_header">
        <div class="header_content">
            <div class="logo_box ">
                <a href="index.php">
                    <img src="./assets/images/logo.png" alt="">
                </a>
            </div>
            <div class="log_out">
                <a href=""><i class="fa-solid fa-arrow-right-from-bracket"></i> Log Out</a>
            </div>
        </div>
    </header>
    <main class="page_content wrap p-b65">
        <div class="container">
            <div class="dz_profile_area">
                <div class="user_images">
                    <img src="./assets/images/1.png">
                </div>
                <div class="text">
                    <h5><span>Hello, </span>Samira</h5>
                </div>
            </div>
            <div class="content_btn_box">
                <div class="btn_style">
                    <a href="my-order.php">Your Order</a>
                    <a href="wishlist.php">Wishlist</a>
                </div>
                <div class="btn_style">
                    <a href="coupons.php">Coupons</a>
                    <a href="track-order.php">Track Order</a>
                </div>
            </div>
            <div class="title_bars">
                <h5>Account Settings</h5>
            </div>
            <div class="service_list list_style">
                <ul>
                    <li><a href="edit-profile.php" class="item_link">
                        <div class="link">
                            <div class="list_icon">
                                <i class="fa-regular fa-user"></i>
                            </div>
                            <div class="dz_inner">
                                <span>Edit Profile</span>
                            </div>
                        </div>
                        <span class="icons"><i class="fa-solid fa-chevron-right"></i></span>
                    </a></li>
                    <li><a href="payment.php" class="item_link">
                        <div class="link">
                            <div class="list_icon">
                                <i class="fas fa-credit-card"></i>
                            </div>
                            <div class="dz_inner">
                                <span>Saved Cards & Wallet</span>
                            </div>
                        </div>
                        <span class="icons"><i class="fa-solid fa-chevron-right"></i></span>
                    </a></li>
                    <li><a href="add-delivery-address.php" class="item_link">
                        <div class="link">
                            <div class="list_icon">
                                <i class="fa-solid fa-map-location-dot"></i>
                            </div>
                            <div class="dz_inner">
                                <span>Saved Addresses</span>
                            </div>
                        </div>
                        <span class="icons"><i class="fa-solid fa-chevron-right"></i></span>
                    </a></li>
                    <li><a class="item_link" onclick="add_language()" id="language_btn">
                        <div class="link">
                            <div class="list_icon">
                                <i class="fa-solid fa-language"></i>
                            </div>
                            <div class="dz_inner">
                                <span>Select Language</span>
                            </div>
                        </div>
                        <span class="icons"><i class="fa-solid fa-chevron-right"></i></span>
                    </a></li>
                    <li><a href="notification.php" class="item_link">
                        <div class="link">
                            <div class="list_icon">
                                <i class="fa-regular fa-bell"></i>
                            </div>
                            <div class="dz_inner">
                                <span>Notifications Settings</span>
                            </div>
                        </div>
                        <span class="icons"><i class="fa-solid fa-chevron-right"></i></span>
                    </a></li>
                </ul>
            </div>
            <div class="title_bars">
                <h5>My Activity</h5>
            </div>
            <div class="service_list list_style">
                <ul>
                    <li><a href="review.php" class="item_link">
                        <div class="link">
                            <div class="list_icon">
                                <i class="far fa-star"></i>
                            </div>
                            <div class="dz_inner">
                                <span>Reviews</span>
                            </div>
                        </div>
                        <span class="icons"><i class="fa-solid fa-chevron-right"></i></span>
                    </a></li>
                    <li><a href="faq.php" class="item_link">
                        <div class="link">
                            <div class="list_icon">
                                <i class="fa-regular fa-comment"></i>
                            </div>
                            <div class="dz_inner">
                                <span>Questions & Answers</span>
                            </div>
                        </div>
                        <span class="icons"><i class="fa-solid fa-chevron-right"></i></span>
                    </a></li>
                </ul>
            </div>
        </div>
    </main>

    <div class="main_language_area" id="language">
        <div class="title">
            <h4>Language</h4>
            <span class="icon" id="close_lang"><i class="fa-solid fa-xmark"></i></span>
        </div>
        <div class="language_list_area">
            <ul class="list_items">
                <li>
                    <a href="" class="language_link">
                        <div class="flag_image">
                            <img src="./assets/images/flag/india.svg" >
                        </div>
                        <div class="country_name">
                            <span>India</span>
                        </div>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </li>
                <li>
                    <a href="" class="language_link">
                        <div class="flag_image">
                            <img src="./assets/images/flag/germany.svg" >
                        </div>
                        <div class="country_name">
                            <span>Germany</span>
                        </div>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </li>
                <li>
                    <a href="" class="language_link">
                        <div class="flag_image">
                            <img src="./assets/images/flag/italy.svg" >
                        </div>
                        <div class="country_name">
                            <span>Italy</span>
                        </div>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </li>
                <li>
                    <a href="" class="language_link">
                        <div class="flag_image">
                            <img src="./assets/images/flag/spain.svg" >
                        </div>
                        <div class="country_name">
                            <span>Spain</span>
                        </div>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </li>
                <li>
                    <a href="" class="language_link">
                        <div class="flag_image">
                            <img src="./assets/images/flag/united-states.svg" >
                        </div>
                        <div class="country_name">
                            <span>English</span>
                        </div>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
 <script>
    var language_btn = document.getElementById('language_btn');
    var language_list = document.getElementById('language');
    var close_lang = document.getElementById('close_lang');
    // console.log(language_list);
    function add_language(){
        language_list.classList.toggle('active');
    }
    window.addEventListener('click', function (s){
        if(!language_btn.contains(s.target)) language_list.classList.remove('active');
    })
    close_lang.addEventListener('click', function (){
        language_list.classList.remove('active');
    })
 </script>
<?php include "important/footer_fixed_bar.php"; ?>
<?php include "layouts/footer.php"; ?>