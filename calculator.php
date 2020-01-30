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
        <!-- <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-9 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">FAQ Page</h1>
                    </div>
                </div>
            </div>
        </div> -->
    </section>
    <!--hero section end-->

    <!--promo section start-->
    <section class="promo-section ptb-100">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="section-heading mb-5">
                        <h2>Rebox Calculator</h2>
                        <p class="lead">
                            Quickly morph client-centric results through performance based applications. Proactively facilitate professional human capital for cutting-edge.
                        </p>
                    </div>
                </div>
            </div>
            <!--pricing faq start-->
            <div class="row">
                <div class="col-md-2">
                </div> <!-- end of col -->
                <div class="col-md-8">
                    <div class="calconic-calculator" data-calculatorid="5dfac52aba9c57001e46120d"></div>
                </div> <!-- end of col -->
                <div class="col-md-2">
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <!--pricing faq end-->
        </div>
    </section>
    <!--promo section end-->


</div>
<!--body content wrap end-->

<script>
    (function() {
        var qs, j, q, s, d = document,
            gi = d.getElementById,
            ce = d.createElement,
            gt = d.getElementsByTagName,
            id = "calconic_",
            b = "https://storage.googleapis.com/calconic-cdn/static/js/";
        if (!gi.call(d, id)) {
            j = ce.call(d, "script");
            j.id = id;
            j.type = "text/javascript";
            j.async = true;
            j.dataset.calconic = true;
            j.src = b + "calconic.min.js";
            q = gt.call(d, "script")[0];
            q.parentNode.insertBefore(j, q)
        }
    })();
</script>
<?php
include(ROOT_PATH . 'inc/landingPagefooter.php'); ?>