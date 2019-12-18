<?php

$pageTitle = "Rebox.ng";
$linkTitle = "calculator";
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
                <h2 style="color:#008eda">Calculator</h2>
                <div class="calconic-calculator" data-calculatorid="5dfa175f99c242001ec80421"></div>
            </div> <!-- end of col -->
            <div class="col-md-2">
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div>

<script src="models/views/landingPage.js"></script>
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