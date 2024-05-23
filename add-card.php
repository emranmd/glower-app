<?php include "layouts/header.php"; ?>

<header class="header_fixed">
    <div class="header_content ">
        <div class="left">
            <a href="" class="dz_icon back_btn"><i class="fa-solid fa-chevron-left"></i></a>
        </div>
        <div class="middle">
            <h5>Add Card</h5>
        </div>
    </div>
</header>

<main class="page_content wrap p-b100">
    <div class="container">
        <div class="card_wrap visa_card card_box">
            <div class="card_header">
                <div class="card_chip">
                    <img src="./assets/images/card/chip.png">
                </div>
                <div class="card_chip">
                    <img src="./assets/images/card/visacard.jpg">
                </div>
            </div>
            <div class="card_details">
                <div class="name_number">
                    <span>Card Number</span>
                    <h5 class="number">6070 2040 2030 3020</h5>
                    <p class="name">Al Emran</p>
                </div>
                <div class="valid_date">
                    <h6>Valid Thru</h6>
                    <h5>05/15</h5>
                </div>
            </div>
        </div>
        <div class="payment_details_input">
            <form action="" method="post">

                <div class="form_group">
                    <label>Card Name :</label>
                    <input type="text" name="card_name" class="form-control input_style2">
                </div>

                <div class="form_group">
                    <label>Card Number :</label>
                    <input type="number" name="card_number" class="form-control input_style2">
                </div>

                <div class="input_fill_group">
                    <div class="form_group">
                        <label>Expiry Date :</label>
                        <input type="date" name="expiry_date" class="form-control input_style2">
                    </div>
                    <div class="form_group">
                        <label>CVV :</label>
                        <input type="number" name="cvv_number" class="form-control input_style2">
                    </div>
                </div>

                <div class="footer_fixed_submitBtn">
                    <div class="submit_btn_area">
                        <a href="payment.php" class="btn review_btn">Add Card</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>

<?php include "layouts/footer.php"; ?>