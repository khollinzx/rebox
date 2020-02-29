<?php

$pageTitle = "Rebox.ng";
$linkTitle = "404";
require_once($_SERVER["DOCUMENT_ROOT"] . "/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

include(ROOT_PATH . 'inc/landingPageheader.php');

include(ROOT_PATH . 'inc/authenticationPageNavbar.php');
?>


<!--body content wrap start-->
<div class="main">

  <!--hero section start-->
  <!--hero section start-->
  <section class="hero-section ptb-100 background-img full-screen" style="background: url('img/app-hero-bg.jpg')no-repeat center center / cover">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-9 col-lg-7">
          <div class="error-content text-center text-white">
            <div class="notfound-404">
              <h1 class="text-white">404</h1>
            </div>
            <h3 class="text-white">Sorry, something went wrong</h3>
            <p>The page you are looking for might have been removed had its name changed or is temporarily
              unavailable.</p><a class="btn app-store-btn" href="index.html">Go to Homepage</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--hero section end-->
  <!--promo section end-->


</div>
<!--body content wrap end-->