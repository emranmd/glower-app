<?php include "layouts/header.php"; ?>

<main class="page_content p-b65">
    <div class="container">
        <div class="authentication_area">
            <div class="dz_media_box">
                <h2 class="dz_title">Enter One Time Password (OTP)</h2>
                <img src="./assets/images/otp-banner.png">
            </div>
            <div class="account_section">
                <div class="dz_inner_area">
                    <h5 class="title m-b0">An Authentication Code Has Sent To</h5>
                    <span class="gmail">testing@gmail.com</span>
                    <form action="" method="post">
                        <div class="otp_form_group form_group">
                            <label>OTP <span class="text-danger">*</span></label>
                            <div class="digit_group" id="otp">
                                <input type="text" class="input_style3" name="digit_2" id="digit_2" placeholder="" data-next="digit_3" data-previous="digit_1" maxlength="1">

                                <input type="text" class="input_style3" name="digit_3" id="digit_3" placeholder="" data-next="digit_4" data-previous="digit_2" maxlength="1">

                                <input type="text" class="input_style3" name="digit_4" id="digit_4" placeholder="" data-next="digit_5" data-previous="digit_3" maxlength="1">
                                
                                <input type="text" class="input_style3" name="digit_5" id="digit_5" placeholder="" data-next="digit_6" data-previous="digit_4" maxlength="1">
                            </div>
                        </div>
                        <p class="receive_code">If you don’t receive code!  <a href="">Resend</a></p>
                        <a href="" class="btn submit_btn">
                            <i class="fas fa-arrow-right"></i>
                            <span>Send mail</span>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include "layouts/footer.php" ?>