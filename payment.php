<?php include "layouts/header.php"; ?>

<header class="header_fixed">
    <div class="header_content ">
        <div class="left">
            <a href="" class="dz_icon back_btn"><i class="fa-solid fa-chevron-left"></i></a>
        </div>
        <div class="middle">
            <h5>Payment</h5>
        </div>
    </div>
</header>

<main class="page_content wrap p-b80">
    <div class="container">
        <div class="payment_card_area">
            <div class="card_title">
                <h6>Credit/Debit Card</h6>
                <a href="add-card.php" class="add_card_btn"><i class="fa-solid fa-circle-plus"></i> Add Card</a>
            </div>
            <div class="payment_card">
                <div class="card_wrap master_card">
                    <div class="card_header">
                        <div class="card_logo">
                            <img src="./assets/images/card/logo.png">
                            <span>Master Card</span>
                        </div>
                        <div class="card_chip">
                            <img src="./assets/images/card/chip.png">
                        </div>
                    </div>
                    <div class="card_details">
                        <div class="name_number">
                            <span>Card Number</span>
                            <h5 class="number">8050 5040 2030 3020</h5>
                            <p class="name">Al Emran</p>
                        </div>
                        <div class="valid_date">
                            <h6>Valid Thru</h6>
                            <h5>05/15</h5>
                        </div>
                    </div>
                </div>
                <div class="card_wrap visa_card">
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
            </div>
        </div>
        <div class="payment_details_accordion">

            <div class="method_item">
                <div class="item_header" id="One">
                    <div class="accordion_title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <span class="icons"><i class="fa-solid fa-dollar-sign"></i></span>
                        <h6>Cash on Delivery(Cash/UPI)</h6>
                        <div class="checkmark"></div>
                    </div>
                </div>
                <div id="collapseOne" class="collapse show items_body" aria-labelledby="One" data-parent="#accordion">
                    <div class="item_content">
                        <span>Carry on your cash payment.. <br>Thanks!</span>
                    </div>
                </div>
            </div>

            <div class="method_item">
                <div class="item_header" id="two">
                    <div class="accordion_title" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                        <span class="icons"><i class="fa-solid fa-money-bill-wave"></i></span>
                        <h6>Google Pay/Phone Pay/BHIM UPI</h6>
                        <div class="checkmark"></div>
                    </div>
                </div>
                <div id="collapsetwo" class="collapse items_body" aria-labelledby="two" data-parent="#accordion">
                    <div class="item_content">
                        <form action="" method="post">
                            <div class="form_group">
                                <label>Link via UPI</label>
                                <input type="number" class="form-control input_style3" name="via_upl" placeholder="Enter your UPI ID">
                            </div>
                            <a href="" class="btn id_submit_btn">Continue</a>
                        </form>
                        <div class="content">
                            <i class="fa-regular fa-circle-check"></i>
                            <p>Your UPI ID Will be encrypted and is 100% safe with us.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="method_item">
                <div class="item_header" id="three">
                    <div class="accordion_title" data-toggle="collapse" data-target="#collapsethree" aria-expanded="true" aria-controls="collapsethree">
                        <span class="icons"><i class="fa-regular fa-folder-closed"></i></span>
                        <h6>Payments/Wallet</h6>
                        <div class="checkmark"></div>
                    </div>
                </div>
                <div id="collapsethree" class="collapse items_body" aria-labelledby="three" data-parent="#accordion">
                    <div class="item_content">
                        <form action="" method="post">
                            <div class="form_group">
                                <label>Link Your Wallet</label>
                                <input type="number" class="form-control input_style3" name="via_upl" placeholder="+91">
                            </div>
                            <a href="" class="btn id_submit_btn">Continue</a>
                        </form>
                    </div>
                </div>
            </div>

            <div class="method_item">
                <div class="item_header" id="four">
                    <div class="accordion_title" data-toggle="collapse" data-target="#collapsefour" aria-expanded="true" aria-controls="collapsefour">
                        <span class="icons"><i class="fa-solid fa-building-columns"></i></span>
                        <h6>Net banking</h6>
                        <div class="checkmark"></div>
                    </div>
                </div>
                <div id="collapsefour" class="collapse items_body" aria-labelledby="four" data-parent="#accordion">
                    <div class="item_content">
                        <button class="btn net_banking_btn" id="netbanking_btn">Netbanking</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
<div class="footer_fixed_submitBtn">
    <div class="submit_btn_area">
        <a href="checkout.php" class="btn review_btn">Continue</a>
    </div>
</div>

<?php include "important/offcanvas.php" ?>
<?php include "layouts/footer.php"; ?>