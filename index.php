<?php

$pageTitle = "Rebox.ng";
$linkTitle = "home";
require_once($_SERVER["DOCUMENT_ROOT"] . "/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

include(ROOT_PATH . 'inc/landingPageheader.php');

include(ROOT_PATH . 'inc/landingPageNavbar.php');
?>

<!--body content wrap start-->
<div class="main">

    <!--hero section start-->
    <section class="hero-section pt-100 background-img" style="background: url('<?php echo BASE_URL; ?>assets/img/hero-bg-1.jpg')no-repeat center top / cover">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-4 col-lg-6">
                    <div class="hero-content-left text-white mt-5">
                        <h3 class="text-white" style="text-align:inherit">Welcome to the New Generation of inclusive investment.</h3>

                        <h4 class="text-white mt-3" style="text-align:inherit"><span>Rebox</span> Makes investments Accessible By giving you the Best Investment options from diverse sector.</h4>

                        <h5 class="mt-3" style="color:#fff;">You can:</h5>
                        <h5 style="color:#fff;" id="app">
                        </h5>

                        <a href="<?php echo BASE_URL; ?>create/" class="btn app-store-btn">SIGN UP TO GET STARTED</a>
                    </div>
                </div>
                <div class="col-md-8 col-lg-6">
                    <div class="hero-animation-img">
                        <img src="<?php echo BASE_URL; ?>assets/img/undraw_finance_0bdk.svg" alt="img" height=600% alt="img" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <br />
        <br />
    </section>
    <!--hero section end-->

    <!--promo section start-->
    <section class="promo-section ptb-100" style="margin-top: -5%;">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-12 col-md-12">
                    <div class="section-heading text-center">
                        <h2>A SMARTER WAY TO INVEST WITH <b style="color:blueviolet; font-weight:bolder ">CONFIDENCE</b> </h2>
                        <h4>With expert information and helpful tool to answer your immediate investment needs</h4>
                        <p>GET ACCESS AND EASILY COMPARE INVESTMENT OPTION IN.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6 mb-lg-0">
                    <div class="card single-promo-card single-promo-hover">
                        <div class="card-body">
                            <div class="pb-2">
                                <span class="fas fa-credit-card icon-md color-secondary"></span>
                            </div>
                            <div class="pt-2 pb-3">
                                <h5>Mutual Funds</h5>
                                <p class="text-muted mb-0">All components are built to be used in any combination.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card single-promo-card single-promo-hover mb-lg-0">
                        <div class="card-body">
                            <div class="pb-2">
                                <span class="fas fa-chart-pie icon-md color-secondary"></span>
                            </div>
                            <div class="pt-2 pb-3">
                                <h5>Shares</h5>
                                <p class="text-muted mb-0">Quick is optimized to work for most devices.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card single-promo-card single-promo-hover mb-lg-0">
                        <div class="card-body">
                            <div class="pb-2">
                                <span class="fas fa-wallet icon-md color-secondary"></span>
                            </div>
                            <div class="pt-2 pb-3">
                                <h5>Project Finance</h5>
                                <p class="text-muted mb-0">Remain consistent while developing new features.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card single-promo-card single-promo-hover mb-lg-0">
                        <div class="card-body">
                            <div class="pb-2">
                                <span class="fas fa-chart-line icon-md color-secondary"></span>
                            </div>
                            <div class="pt-2 pb-3">
                                <h5>Forex</h5>
                                <p class="text-muted mb-0">Change a few variables and the whole theme adapts.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" style="margin-top:2%;">
            <div class="row">
                <div class="col-lg-3 col-sm-6 mb-lg-0">
                    <div class="card single-promo-card single-promo-hover">
                        <div class="card-body">
                            <div class="pb-2">
                                <span class="fab fa-bitcoin icon-md color-secondary"></span>
                            </div>
                            <div class="pt-2 pb-3">
                                <h5>Cryptocurrencies</h5>
                                <p class="text-muted mb-0">All components are built to be used in any combination.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card single-promo-card single-promo-hover mb-lg-0">
                        <div class="card-body">
                            <div class="pb-2">
                                <span class="fas fa-home icon-md color-secondary"></span>
                            </div>
                            <div class="pt-2 pb-3">
                                <h5>Real Estate</h5>
                                <p class="text-muted mb-0">Quick is optimized to work for most devices.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card single-promo-card single-promo-hover mb-lg-0">
                        <div class="card-body">
                            <div class="pb-2">
                                <span class="fas fa-dollar-sign icon-md color-secondary"></span>
                            </div>
                            <div class="pt-2 pb-3">
                                <h5>Annuities</h5>
                                <p class="text-muted mb-0">Remain consistent while developing new features.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card single-promo-card single-promo-hover mb-lg-0">
                        <div class="card-body">
                            <div class="pb-2">
                                <span class="fa fa-tractor icon-md color-secondary"></span>
                            </div>
                            <div class="pt-2 pb-3">
                                <h5>Agriculture</h5>
                                <p class="text-muted mb-0">Change a few variables and the whole theme adapts.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" style="margin-top:2%;">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="card single-promo-card single-promo-hover mb-lg-0">
                        <div class="card-body">
                            <div class="pb-2">
                                <span class="fa fa-bank icon-md color-secondary"></span>
                            </div>
                            <div class="pt-2 pb-3">
                                <h5>Bank Products</h5>
                                <p class="text-muted mb-0">Change a few variables and the whole theme adapts.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="card single-promo-card single-promo-hover mb-lg-0">
                        <div class="card-body">
                            <div class="pb-2">
                                <span class="fas fa-project-diagram icon-md color-secondary"></span>
                            </div>
                            <div class="pt-2 pb-3">
                                <h5>Peer to Peer (P2P) Lending</h5>
                                <p class="text-muted mb-0">Change a few variables and the whole theme adapts.</p>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card single-promo-card single-promo-hover mb-lg-0">
                        <div class="card-body">
                            <div class="pb-2">
                                <span class="fas fa-cubes icon-md color-secondary"></span>
                            </div>
                            <div class="pt-2 pb-3">
                                <h5>Equity</h5>
                                <p class="text-muted mb-0">Change a few variables and the whole theme adapts.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--promo section end-->

    <!-- Services Start -->
    <section id="about" class="about-us ptb-100 gray-light-bg">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <h2 class="mt-5">How it Works</h2>
                    <p class="mb- lh-190">Here are the following steps to get started.</p>
                    <div class="single-feature mb-4 mt-5">
                        <div class="icon-box-wrap d-flex align-items-center mb-2">
                            <div class="mr-3 icon-box">
                                <span class="ti-user icon-md color-secondary"></span>
                                <!-- <img src="<?php echo BASE_URL; ?>assets/img/image-icon-1.png" alt="icon image" class="img-fluid"> -->
                            </div>
                            <p class="mb-0">Create an Account.</p>
                        </div>
                    </div>
                    <div class="single-feature mb-4">
                        <div class="icon-box-wrap mb-2">
                            <div class="mr-3 icon-box">
                                <span class="ti-list icon-md color-secondary"></span>
                                <!-- <img style="color:blueviolet" src="img/image-icon-2.png" alt="icon image" class="img-fluid"> -->
                            </div>
                            <p class="mb-0">Select from a wide range of investments.</p>
                        </div>
                    </div>
                    <div class="single-feature mb-4">
                        <div class="icon-box-wrap mb-2">
                            <div class="mr-3 icon-box">
                                <!-- <img src="img/image-icon-3.png" alt="icon image" class="img-fluid"> -->
                                <span class="ti-wallet icon-md color-secondary"></span>
                            </div>
                            <p class="mb-0">Fund and Start Earning.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <h2 class="mt-">Our Services</h2>
                    <p class="mb-4 lh-190">Rebox makes it possible to.</p>
                    <ul class="list-unstyled">
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="badge badge-circle badge-primary mr-3">
                                        <span class="ti-check"></span>
                                    </div>
                                </div>
                                <div>
                                    <p class="mb-0">View all your investments on its platform</p>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="badge badge-circle badge-primary mr-3">
                                        <span class="ti-check"></span>
                                    </div>
                                </div>
                                <div>
                                    <p class="mb-0">Purchase Additional investment</p>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="badge badge-circle badge-primary mr-3">
                                        <span class="ti-check"></span>
                                    </div>
                                </div>
                                <div>
                                    <p class="mb-0">Get diverse investments options with the best rates</p>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="badge badge-circle badge-primary mr-3">
                                        <span class="ti-check"></span>
                                    </div>
                                </div>
                                <div>
                                    <p class="mb-0">Fast track investment purchase </p>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="badge badge-circle badge-primary mr-3">
                                        <span class="ti-check"></span>
                                    </div>
                                </div>
                                <div>
                                    <p class="mb-0">Receive timely liquidation process</p>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="badge badge-circle badge-primary mr-3">
                                        <span class="ti-check"></span>
                                    </div>
                                </div>
                                <div>
                                    <p class="mb-0">Access 24 hrs customer service</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
    <!-- Services close -->

    <!--our pricing packages section start-->
    <section id="pricing" class="package-section ptb-100">
        <div class="container">

            <div class="row justify-content-center">


                <div class="row equal">
                    <div class="col-md-4 col-lg-4">
                        <div class="single-promo single-promo-hover single-promo-1 rounded text-center white-bg p-5 h-100">
                            <div class="circle-icon mb-5">
                                <img src="<?php echo BASE_URL; ?>assets/img/privacy.png" alt="pricing img" class="img-fluid">
                            </div>
                            <h5>Privacy</h5>
                            <p>Your security is our No. 1 priority. We always have you in mind so be Rest assured knowing your data is protected according to the standards. </p>
                        </div>
                    </div>


                    <div class="col-md-4 col-lg-4">
                        <div class="single-promo single-promo-hover single-promo-1 rounded text-center white-bg p-5 h-100">
                            <div class="circle-icon mb-5">
                                <img src="<?php echo BASE_URL; ?>assets/img/trust.png" alt="pricing img" class="img-fluid">
                            </div>
                            <h5>Trust</h5>
                            <p>Rebox is fully compliant with all regulations and your funds are in safe hands with backing from regulated top financial institutions.</p>
                        </div>
                    </div>


                    <div class="col-md-4 col-lg-4">
                        <div class="single-promo single-promo-hover single-promo-1 rounded text-center white-bg p-5 h-100">
                            <div class="circle-icon mb-5">
                                <img src="<?php echo BASE_URL; ?>assets/img/security.png" alt="pricing img" class="img-fluid">
                            </div>
                            <h5>Security</h5>
                            <p>Your funds are safe and sound, kept in segregated bank accounts and protected by industry-leading security protocols.
                                <br>
                                <br>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--our pricing packages section end-->

</div>
<!--body content wrap end-->
<script src="models/views/landingPage.js"></script>

<script>
    var app = document.getElementById('app');

    var typewriter = new Typewriter(app, {
        loop: true
    });

    typewriter.typeString('Own local shares, trust funds.')
        .pauseFor(2500)
        .deleteAll()
        .typeString('Finance project, trade forex.')
        .pauseFor(2500)
        .deleteAll()
        .typeString('Invest directly into Africa from anywhere in the world.')
        .pauseFor(2500)
        .deleteAll()
        .typeString('Never miss a new opportunity to invest and Earn')
        .pauseFor(2500)
        .deleteAll()
        .typeString('Whether you have short term investment plan or long time, rebox got you covered.')
        .pauseFor(2500)
        .deleteAll()
        .start();
</script>
<?php
include(ROOT_PATH . 'inc/landingPagefooter.php'); ?>