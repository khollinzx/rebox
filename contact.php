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
                        <h1 class="text-white mb-0">Contact Us</h1>
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
                <div class="col-md-5">
                    <div class="section-heading">
                        <h3>Contact with us</h3>
                        <p>It's very easy to get in touch with us. Just use the contact form or pay us a
                            visit for a coffee at the office. Dynamically innovate competitive technology after an
                            expanded array of leadership.</p>
                    </div>
                    <div class="footer-address">
                        <h6><strong>Head Office</strong></h6>
                        <p>121 King St, Melbourne VIC 3000, Australia</p>
                        <ul>
                            <li><span>Phone: +61 2 8376 6284</span></li>
                            <li><span>Email : <a href="mailto:hello@yourdomain.com">hello@yourdomain.com</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7">
                    <form action="#" method="POST" id="contactForm1" class="contact-us-form" novalidate="novalidate">
                        <h5>Reach us quickly</h5>
                        <div class="row">
                            <div class="col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Enter name" required="required">
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Enter email" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" name="phone" value="" class="form-control" id="phone" placeholder="Your Phone">
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" name="company" value="" size="40" class="form-control" id="company" placeholder="Your Company">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form-control" rows="7" cols="25" placeholder="Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 mt-3">
                                <button type="submit" class="btn solid-btn" id="btnContactUs">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                    <p class="form-message"></p>
                </div>
            </div>
        </div>

    </section>
    <!--promo section end-->


</div>
<!--body content wrap end-->


<?php
include(ROOT_PATH . 'inc/landingPagefooter.php'); ?>