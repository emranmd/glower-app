<?php include "layouts/header.php"; ?>

<main class="page_content">
    <div class="container">
        <div class="authentication_area">
            <div class="dz_media_box">
                <h2 class="dz_title">Forgot Password</h2>
                <img src="./assets/images/forgot.png">
            </div>
            <div class="account_section">
                <div class="dz_inner_area">
                    <h5 class="title">Enter The Email Associated With Your Account And We’ll Send And Email To Reset Your Password</h5>
                    <form action="" method="post">
                        <div class="form_group">
                            <label>Email Address <span class="text-danger">*</span></label>
                            <input type="email" class="form-control input_style3" name="email" >
                        </div>
                        <a href="" class="btn submit_btn">
                            <i class="fas fa-arrow-right"></i>
                            <span>Send mail</span>
                        </a>
                    </form>
                </div>
                <div class="link m-t20">
                    Back
                    <a href="sign-in.php">Sing In</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include "layouts/footer.php" ?>