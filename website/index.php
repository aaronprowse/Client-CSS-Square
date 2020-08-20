<?php
global $page_title, $page_link;
$page_title = "Website Title";
$page_link = basename(__FILE__);
include_once('includes/header.php');
?>

    <div class="container">
        <div class="row">
            <div class="col-md-12" id="screen">
                <canvas id="canvas"></canvas>
            </div>
        </div>
    </div>

    <section class="banner-container">
        <!-- Slider -->
    </section>

    <section class="content-container">
        <!-- Content Block -->
    </section>


<?php
include_once('includes/footer.php');
?>