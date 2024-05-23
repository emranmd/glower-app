<?php include "layouts/header.php"; ?>

<header class="header_fixed">
    <div class="header_content ">
        <div class="left">
            <a href="" class="dz_icon back_btn"><i class="fa-solid fa-chevron-left"></i></a>
        </div>
        <div class="middle">
            <h5>Edit Profile</h5>
        </div>
    </div>
</header>
<main class="page_content wrap p-b100">
    <div class="container">
        <div class="profile_edit">
            <form action="" method="post" enctype="multipart/form-data">

                <div class="profile_images">
                    <div class="avatar_upload">
                        <img src="./assets/images/pic(3).png" id="photo">
                        <div class="image_upload">
                            <input type="file" id="file" class="d-none">
                            <label for="file" id="upload_btn" class="img_upload_btn"><i class="fas fa-pencil"></i></label>
                        </div>
                    </div>
                </div>

                <div class="form_group">
                    <label>Full Name :</label>
                    <input type="text" name="full_name" class="form-control input_style2">
                </div>

                <div class="form_group">
                    <label>Mobile Number :</label>
                    <input type="number" name="phone_number" class="form-control input_style2">
                </div>

                <div class="form_group">
                    <label>Email :</label>
                    <input type="email" name="email" class="form-control input_style2">
                </div>

                <div class="form_group">
                    <label>Location :</label>
                    <input type="text" name="location" class="form-control input_style2">
                </div>

                <div class="footer_fixed_submitBtn">
                    <div class="submit_btn_area">
                        <a href="profile.php" class="btn review_btn">Update Profile</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>


<script>
    const image_div =document.querySelector('.avatar_upload');
    const photo =document.querySelector('#photo');
    const input_file =document.querySelector('#file');
    // const upload_btn =document.querySelector('#upload_btn');

    input_file.onchange = function(){
        photo.src = URL.createObjectURL(input_file.files[0]);
    }


</script>


<?php include "layouts/footer.php"; ?>