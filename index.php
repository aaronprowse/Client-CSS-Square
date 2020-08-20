<?php
global $page_title, $page_link;
$page_title = "Website Title";
$page_link = basename(__FILE__);
include_once('includes/header.php');
?>

    <div class="wrap">
        <div class="cube">
            <div class="cube__front">
                <div class="cube__content">
                    <a href="http://www.google.co.uk" target="_blank">IT Support</a>
                </div>
            </div>
            <div class="cube__back">
                <div class="cube__logo">
                    <img src="images/We-Are-Select-Logo.jpg" alt="We Are Select - Logo" />
                </div>
            </div>
            <div class="cube__top">
                <div class="cube__content">
                    About
                </div>
            </div>
            <div class="cube__bottom">
                <div class="cube__content">
                    Contact
                </div>
            </div>
            <div class="cube__left">
                <div class="cube__content">
                    Services
                </div>
            </div>
            <div class="cube__right">
                <div class="cube__content">
                    Applications
                </div>
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