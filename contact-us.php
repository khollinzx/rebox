<?php

$pageTitle = "Rebox.ng";
$linkTitle = "contact";
require_once($_SERVER["DOCUMENT_ROOT"] . "/rebox/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

include(ROOT_PATH . 'inc/landingPageheader.php');

include(ROOT_PATH . 'inc/landingPageNavbar.php');
?>
<!-- Header -->
<header id="header" class="ex-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 style="color: #fff;"> Contact Us</h1>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</header> <!-- end of ex-header -->
<!-- end of header -->

<!-- Privacy Content -->
<div id="services" class="cards-1">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
            </div> <!-- end of col -->
            <div class="col-md-8">
                <h2>Contact Information</h2>
                <ul class="list-unstyled li-space-lg">
                    <li class="address">Don't hesitate to give us a call or send us a contact form message</li>
                    <li><i class="fas fa-map-marker-alt"></i> 22 Innovative Area, San Francisco, CA 94043, US</li>
                    <li><i class="fas fa-phone"></i> <a class="turquoise" href="tel:"> +234 818 </a></li>
                    <li><i class="fas fa-envelope"></i> <a class="turquoise" href="mailto:office@evolo.com"> crowdrebox@gmail.com</a></li>
                </ul>
                <form id="contactForm" data-toggle="validator" data-focus="false" novalidate="true">
                    <div class="form-group has-error has-danger">
                        <input type="text" class="form-control-input" id="cname" required="">
                        <label class="label-control" for="cname">Name</label>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control-input" id="cemail" required="">
                        <label class="label-control" for="cemail">Email</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control-textarea" id="cmessage" required=""></textarea>
                        <label class="label-control" for="cmessage">Your message</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control-submit-button disabled">SUBMIT MESSAGE</button>
                    </div>
                    <div class="form-message">
                        <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                    </div>
                </form>
            </div> <!-- end of col -->
            <div class="col-md-2">
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div>
<!-- end of privacy content -->

<script src="models/views/landingPage.js"></script>
<?php
include(ROOT_PATH . 'inc/landingPagefooter.php'); ?>