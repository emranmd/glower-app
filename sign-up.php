<?php include "layouts/header.php"; ?>

<main class="page_content">
    <div class="container">
        <div class="authentication_area">
            <div class="dz_media_box">
                <h2 class="dz_title">Create Your Account</h2>
                <img src="./assets/images/signup_banner.png">
            </div>
            <div class="account_section">
                <div class="dz_inner_area">
                    <h5 class="title">Welcome Back! Please Enter Your Details</h5>
                    <form action="" method="post">

                        <div class="form_group">
                            <label>Name <span class="text-danger">*</span></label>
                            <input type="name" class="form-control input_style3" name="name" >
                        </div>

                        <div class="form_group">
                            <label>Email Address <span class="text-danger">*</span></label>
                            <input type="email" class="form-control input_style3" name="email" >
                        </div>

                        <div class="form_group">
                            <label>Password <span class="text-danger">*</span></label>
                            <input type="password" class="form-control input_style3" name="password" id="password">
                            <span class="eye_icon" id="open_eye"><i class="fa-regular fa-eye-slash hide_icon"></i></span>
                        </div>

                        <div class="form_check_box">
                            <input type="checkbox" class="form_check_input" id="checkbox1">
                            <label for="checkbox1" class="form_check_label">I agree to all Term, Privacy and Fees</label>
                        </div>
                        <a href="" class="btn submit_btn">
                            <i class="fas fa-arrow-right"></i>
                            <span>Sing Up</span>
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
                    <a href="sign-in.php">Sign In</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include "layouts/footer.php" ?>