<?php include "layouts/header.php"; ?>

<main class="page_content p-b35">
    <div class="container">
        <div class="authentication_area">
            <div class="dz_media_box">
                <h2 class="dz_title">Enter New Password</h2>
                <img src="./assets/images/login-banner.png">
            </div>
            <div class="account_section">
                <div class="dz_inner_area">
                    <h5 class="title">Your New Password Must Be Different From Previously Used Password.</h5>
                    <form action="" method="post">
                        <div class="form_group">
                            <label>Password <span class="text-danger">*</span></label>
                            <input type="password" class="form-control input_style3" name="password" id="password">
                            <span class="eye_icon" id="open_eye"><i class="fa-regular fa-eye hide_icon"></i></span>
                        </div>
                        <div class="form_group">
                            <label>Confirm Password <span class="text-danger">*</span></label>
                            <input type="password" class="form-control input_style3" name="confirm_password" id="password">
                            <span class="eye_icon" id="open_eye"><i class="fa-regular fa-eye hide_icon"></i></span>
                        </div>
                        <a href="" class="btn submit_btn">
                            <i class="fas fa-arrow-right"></i>
                            <span>Continue</span>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include "layouts/footer.php" ?>