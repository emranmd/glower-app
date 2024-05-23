<?php include "layouts/header.php"; ?>

<main class="page_content">
    <div class="container">
        <div class="authentication_area">
            <div class="dz_media_box">
                <h2 class="dz_title">Sign in to your account</h2>
                <img src="./assets/images/login-banner.png">
            </div>
            <div class="account_section">
                <div class="dz_inner_area">
                    <h5 class="title">Welcome Back You've Been Missed!</h5>
                    <form action="" method="post">
                        <div class="form_group">
                            <label>Email Address <span class="text-danger">*</span></label>
                            <input type="email" class="form-control input_style3" name="email" >
                        </div>
                        <div class="form_group">
                            <label>Password <span class="text-danger">*</span></label>
                            <input type="password" class="form-control input_style3" name="password" id="password">
                            <span class="eye_icon" id="open_eye"><i class="fa-regular fa-eye-slash hide_icon"></i></span>
                        </div>
                        <a href="forgot-password.php" class="btn_link">Forgot password?</a>
                        <a href="" class="btn submit_btn">
                            <i class="fas fa-arrow-right"></i>
                            <span>Sing In</span>
                        </a>
                    </form>
                </div>
                <div class="dz_saprate">
                    <span>Or Continue With</span>
                </div>
                <a href="" class="btn thin_btn m-b15">
                    <img src="./assets/images/google-mail.png">
                    <span>Sign in with google</span>
                </a>
                <a href="" class="btn thin_btn">
                    <img src="./assets/images/apple-logo.png">
                    <span>Sign in with apple</span>
                </a>
                <div class="link">
                    Not a member?
                    <a href="sign-up.php">Create an account</a>
                </div>
            </div>
        </div>
    </div>
</main>


<?php include "layouts/footer.php" ?>