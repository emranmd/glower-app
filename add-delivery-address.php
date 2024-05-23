<?php include "layouts/header.php"; ?>

    <header class="header_fixed">
        <div class="header_content ">
            <div class="left">
                <a href="" class="dz_icon back_btn"><i class="fa-solid fa-chevron-left"></i></a>
            </div>
            <div class="middle">
                <h5>Add delivery address</h5>
            </div>
        </div>
    </header>

    <main class="page_content wrap p-b100">
        <div class="container">
            <form action="" method="post">
                <div class="contact_details_form">
                    <div class="details_title">
                        <h5>Contact Details</h5>
                    </div>

                    <div class="form_group">
                        <label>Full Name</label>
                        <input type="text" class="form-control input_style2" name="name">
                    </div>

                    <div class="form_group">
                        <label>Mobile No.</label>
                        <input type="number" class="form-control input_style2" name="phone">
                    </div>

                    <div class="details_title">
                        <h5>Address</h5>
                    </div>

                    <div class="form_group">
                        <label>Pin Code</label>
                        <input type="text" class="form-control input_style2" name="pin_code">
                    </div>

                    <div class="form_group">
                        <label>Address</label>
                        <input type="text" class="form-control input_style2" name="address">
                    </div>

                    <div class="form_group">
                        <label>Locality/Town</label>
                        <input type="text" class="form-control input_style2" name="location">
                    </div>

                    <div class="form_group">
                        <label>City/District</label>
                        <input type="text" class="form-control input_style2" name="city">
                    </div>

                    <div class="form_group">
                        <label>State</label>
                        <input type="text" class="form-control input_style2" name="state">
                    </div>

                    <div class="details_title">
                        <h5>Save Address As</h5>
                    </div>

                    <div class="checkBox_form_group">
                        
                        <div class="checkbox_input">
                            <input type="radio" class="checkbox_form_input" name="radiofilter">
                            <label class="checkbox_form_label active">Home</label>
                        </div>
                        <div class="checkbox_input">
                            <input type="radio" class="checkbox_form_input" name="radiofilter">
                            <label class="checkbox_form_label">Shop</label>
                        </div>
                        <div class="checkbox_input">
                            <input type="radio" class="checkbox_form_input" name="radiofilter">
                            <label class="checkbox_form_label">Office</label>
                        </div>
                        
                    </div>

                </div>
                <div class="footer_fixed_submitBtn">
                    <div class="submit_btn_area">
                        <a href="delivery-address.php" class="btn review_btn">Save Address</a>
                    </div>
                </div>
            </form>
        </div>
    </main>


<?php include "layouts/footer.php"; ?>