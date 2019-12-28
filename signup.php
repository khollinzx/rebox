<?php

$pageTitle = "Rebox.ng";
$linkTitle = "signup";
require_once($_SERVER["DOCUMENT_ROOT"] . "/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

include(ROOT_PATH . 'inc/landingPageheader.php');

include(ROOT_PATH . 'inc/landingPageNavbar.php');
?>
<!-- Header -->
<header id="header" class="ex-header2">
</header> <!-- end of ex-header -->
<!-- end of header -->

<!-- Privacy Content -->
<div id="services" class="cards-1">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
            </div> <!-- end of col -->
            <div class="col-md-8">
                <h2 style="color:#008eda">Register</h2>
                <form class="ml-2 mr-3" id="requestForm" data-toggle="validator" data-focus="false" novalidate="true">
                    <div class="form-group">
                        <input type="email" class="form-control-input" id="emailAddress" name="emailAddress" placeholder="Email">
                    </div>
                    <div class="input-group mb-2">
                        <input type="password" class="form-control-input" id="newPassword" name="newPassword" required="" Placeholder="Password">
                        <span class="input-group-btn">
                            <button id="show-password1" type="button" class="btn btn-default"> <i style="color: #008eda;" class="fa fa-eye"></i></button>
                            <button id="hide-password1" type="button" class="btn btn-default"> <i style="color: #008eda;" class="fa fa-eye-slash"></i></button>
                        </span>
                    </div>
                    <div class="input-group">
                        <input type="password" class="form-control-input" id="confirmPassword" name="confirmPassword" required="" placeholder="Confirm Password">
                        <span class="input-group-btn">
                            <button id="show-password2" type="button" class="btn btn-default"> <i style="color: #008eda;" class="fa fa-eye"></i></button>
                            <button id="hide-password2" type="button" class="btn btn-default"> <i style="color: #008eda;" class="fa fa-eye-slash"></i></button>
                        </span>
                    </div>
                    <br>
                    <br>
                    <div class="form-group checkbox">
                        <input type="checkbox" id="rterms" value="Agreed-to-Terms" name="rterms" required="">I agree with Rebox <a class="turquoise" href="privacy-policy.html">Privacy Policy</a> and <a class="turquoise" href="terms-conditions.html">Terms &amp; Conditions</a>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control-submit-button">SIGN UP</button>
                    </div>
                    <div class="form-group">
                        <a href="<?php BASE_URL; ?>login.php" class="btn-solid-reg ">ALREADY HAVE AN ACCOUNT</a>
                    </div>
                    <div class="form-message">
                        <div id="rmsgSubmit" class="h3 text-center hidden"></div>
                    </div>
                </form>
            </div> <!-- end of col -->
            <div class="col-md-2">
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div>

<script src="<?php BASE_URL; ?>models/views/landingPage.js"></script>
<?php
include(ROOT_PATH . 'inc/landingPagefooter.php'); ?>