<?php

$pageTitle = "Rebox.ng";
$linkTitle = "products";
require_once($_SERVER["DOCUMENT_ROOT"] . "/crowdrebox/constant/config.php");

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
                        <h1 class="text-white mb-0">Products</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->

    <!--promo section start-->
    <div class="overflow-hidden">
        <!--our pricing packages section start-->
        <section id="pricing" class="package-section background-shape-right ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Take your investments to the next level, with the premium auto investment option</h2>
                            <p class="lead">
                                Trade high yielding forex and cryptocurrency while you relax and watch it grow
                                Guaranteed growth of 5%/month
                                .
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md">
                        <div class="card text-center single-pricing-pack">
                            <div class="pt-4">
                                <h5>Basic</h5>
                            </div>

                            <div class="card-header py-4 border-0 pricing-header">
                                <div class="h1 text-center mb-0">$<span class="price font-weight-bolder">5.5<sup style="font-size: 15px; font-weight:bold">/mth</sup></span></div>
                            </div>
                            <div class="card-body">
                                <h5>Portfolio less than 250USD</h5>
                                <p>Garanteed growth of 7% per month</p>
                                <a href="#" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md">
                        <div class="card popular-price text-center single-pricing-pack">
                            <div class="pt-4">
                                <h5>Standard</h5>
                            </div>
                            <div class="card-header py-4 border-0 pricing-header">
                                <div class="h1 text-center mb-0">$<span class="price font-weight-bolder">7.5<sup style="font-size: 15px; font-weight:bold">/mth</sup></span></div>

                            </div>
                            <div class="card-body">
                                <h5>Portfolio upto 400USD</h5>
                                <p>Garanteed growth of 5% per month</p>
                                <a href="#" class="btn solid-btn mb-3" target="_blank">Purchase now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md">
                        <div class="card text-center single-pricing-pack">
                            <div class="pt-4">
                                <h5>Premium</h5>
                            </div>
                            <div class="card-header py-4 border-0 pricing-header">
                                <div class="h1 text-center mb-0">$<span class="price font-weight-bolder">39</span></div>
                            </div>
                            <div class="card-body">
                                <h5>Portfolio greater than 500USD</h5>
                                <p>Garanteed growth of 5% per month</p>
                                <a href="#" class="btn outline-btn mb-3" target="_blank">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <p class="mb-2">If you need custom services or Need more? <a href="<?php echo BASE_URL; ?>ContactUs/" class="color-secondary">
                            Contact us
                        </a></p>
                </div>
            </div>
        </section>
        <!--our pricing packages section end-->
    </div>
    <!--promo section end-->


</div>
<!--body content wrap end-->


<?php
include(ROOT_PATH . 'inc/landingPagefooter.php'); ?>