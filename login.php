<?php

$pageTitle = "Rebox.ng";
$linkTitle = "login";
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
                <h2 style="color:#008eda">Login</h2>
                <form class="ml-2 mr-3" id="requestForm" data-toggle="validator" data-focus="false" novalidate="true">
                    <div class="form-group">
                        <input type="email" class="form-control-input" id="email" name="email" required="" placeholder="Email Address">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="input-group mb-2">
                        <input type="password" class="form-control-input" id="password" name="password" required="" placeholder="Password">
                        <span class="input-group-btn">
                            <button id="show-password" type="button" class="btn btn-default"> <i style="color: #01bfd9;" class="fas fa-eye"></i></button>
                            <button id="hide-password" type="button" class="btn btn-default"> <i style="color: #01bfd9;" class="fas fa-eye-slash"></i></button>
                        </span>
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" id="login_button" class="form-control-submit-button disabled">LOGIN</button>
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

<script src="<?php echo BASE_URL; ?>models/views/landingPage.js"></script>
<?php
include(ROOT_PATH . 'inc/landingPagefooter.php'); ?>