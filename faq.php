<?php include "layouts/header.php"; ?>

<header class="header_fixed">
    <div class="header_content ">
        <div class="left">
            <a href="" class="dz_icon back_btn"><i class="fa-solid fa-chevron-left"></i></a>
        </div>
        <div class="middle">
            <h5>FAQ</h5>
        </div>
    </div>
</header>

<main class="page_content wrap p-b40">
    <div class="container">
        
        <div class="accordion_area" id="accordion">
            <?php for($i = 1 ; $i<5; $i++) { ?>
            <div class="accordion_items">
                <div class="items_title" id="heading<?php echo $i; ?>">
                    <button class="btn btn-link d-flex" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>">
                        <h6>What is included with my purchase?</h6>
                        <i class="fa-solid fa-angle-down"></i>
                    </button>
                </div>
                <div id="collapse<?php echo $i; ?>" class="collapse <?php echo ($i == 1)? "show":""  ?> " aria-labelledby="heading<?php echo $i; ?>" data-parent="#accordion">
                    <div class="items_content">
                        <p>Package have the HTML files, SCSS files, CSS files, JS files, Well Define Documentation, Fonts and Icons, Responsive Designs, Image Assets, Customization Options, and many more.</p>
                    </div>
                </div>
            </div>
            <?php }; ?>
        </div>
    </div>
</main>



<?php include "layouts/footer.php"; ?>