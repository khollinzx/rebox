<?php

$pageTitle = "Rebox.ng";
$linkTitle = "calculator";
require_once($_SERVER["DOCUMENT_ROOT"] . "/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

include(ROOT_PATH . 'inc/landingPageheader.php');

include(ROOT_PATH . 'inc/landingPageNavbar.php');
?>


<!--body content wrap start-->
<div class="main">

    <!--hero section start-->
    <section class="hero-section ptb-100 background-img" style="background: url('img/hero-bg-1.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-9 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">About Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->

    <!--promo section start-->
    <section class="customer-review-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="testimonial-quote-wrap my-lg-3 my-md-3 rounded white-bg shadow-sm p-5">
                        <h3 class="color-Head text-center">Rebox</h3>
                        <p style="text-align: justify; font-size: 16px;">Rebox.ng is a property of Business integration and service support , a company duly registered with the Coporate Affairs Commission, Nigeria. Rebox.ng is the platform that gives access to the use of our marketing, Customer Services, Operations and Technology by registered brokers.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--promo section end-->


</div>
<!--body content wrap end-->


<?php
include(ROOT_PATH . 'inc/landingPagefooter.php'); ?>