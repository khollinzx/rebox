<?php
$pageTitle = "Rebox.ng";
require_once($_SERVER["DOCUMENT_ROOT"] . "/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

include(ROOT_PATH . 'inc/landingPageheader.php');
?>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <!-- Text Logo - Use this if you don't have a graphic logo -->
    <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->

    <!-- Image Logo -->
    <a class="navbar-brand logo-image" href="index.html"><img src="<?php echo BASE_URL; ?>assets/images/logo.svg" alt="alternative"></a>


    <!-- Mobile Menu Toggle Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span id="menus" class="navbar-toggler-awesome fas fa-bars"></span>
        <span id="close-menus" class="navbar-toggler-awesome fas fa-times"></span>
    </button>
    <!-- end of mobile menu toggle button -->

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <div class="navbar-nav ml-auto">
            <button class="btn-solid-reg popup-with-move-anim mr-3 mb-3 login-button"> LOGIN</button>
            <button class="btn-solid-reg popup-with-move-anim mr-3 mb-3 signup-button"> SIGN UP</button>
        </div>
    </div>
</nav> <!-- end of navbar -->
<!-- end of navigation -->


<!-- Header -->
<header id="header" class="header">
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" id="welcome-text">
                    <div class="text-container">
                        <h1><span class="turquoise">Rebox.Ng</span> is a centralized investment platform tha make all investment option readily available for you</h1>
                        <p class="p-large" style="font-size: 18px">With as little as <b>N</b>1000, <i class="fas fa-dollar-sign"></i>20, 50<i class="fas fa-euro-sign"></i>, 50<i class="fas fa-pound-sign"></i> you could own shares, money market instrucment, or even part of a project to be executed.</p>
                        <button class="btn-solid-reg popup-with-move-anim mr-3 mb-3 signup-button"> SIGN UP TO GET STARTED</button>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->

                <div class="col-lg-4" id="form-login">
                    <div class="card pt-1">
                        <div class="ml-auto mr-2 mb-2">
                            <button class="btn btn-default pull-right close-login" style="color: gray;"> <i class="fa fa-times" style="color:gray;"></i> </button>
                        </div>
                        <div class="image-container">
                            <div class="form-container">
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
                                        <button type="submit" class="form-control-submit-button disabled">LOGIN</button>
                                    </div>
                                    <div class="form-message">
                                        <div id="rmsgSubmit" class="h3 text-center hidden"></div>
                                    </div>
                                </form>
                            </div>
                        </div> <!-- end of image-container -->
                    </div>
                </div> <!-- end of col -->


                <div class="col-lg-4" id="form-signup">
                    <div class="card pt-1">
                        <div class="ml-auto mr-2 mb-2">
                            <button class="btn btn-default pull-right close-signup" style="color: gray;"> <i class="fa fa-times"></i> </button>
                        </div>
                        <div class="image-container">
                            <div class="form-container">
                                <form class="ml-2 mr-3" id="requestForm" data-toggle="validator" data-focus="false" novalidate="true">
                                    <div class="form-group">
                                        <input type="email" class="form-control-input" id="emailAddress" name="emailAddress" placeholder="Email">
                                    </div>
                                    <div class="input-group mb-2">
                                        <input type="password" class="form-control-input" id="newPassword" name="newPassword" required="" Placeholder="Password">
                                        <span class="input-group-btn">
                                            <button id="show-password1" type="button" class="btn btn-default"> <i style="color: #01bfd9;" class="fa fa-eye"></i></button>
                                            <button id="hide-password1" type="button" class="btn btn-default"> <i style="color: #01bfd9;" class="fa fa-eye-slash"></i></button>
                                        </span>
                                    </div>
                                    <div class="input-group">
                                        <input type="password" class="form-control-input" id="confirmPassword" name="confirmPassword" required="" placeholder="Confirm Password">
                                        <span class="input-group-btn">
                                            <button id="show-password2" type="button" class="btn btn-default"> <i style="color: #01bfd9;" class="fa fa-eye"></i></button>
                                            <button id="hide-password2" type="button" class="btn btn-default"> <i style="color: #01bfd9;" class="fa fa-eye-slash"></i></button>
                                        </span>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="form-group checkbox">
                                        <input type="checkbox" id="rterms" value="Agreed-to-Terms" name="rterms" required="">I agree with Rebox <a class="turquoise" href="privacy-policy.html">Privacy Policy</a> and <a class="turquoise" href="terms-conditions.html">Terms &amp; Conditions</a>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="form-control-submit-button disabled">SIGN UP</button>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="form-control-submit-button disabled">Already have an Account</button>
                                    </div>
                                    <div class="form-message">
                                        <div id="rmsgSubmit" class="h3 text-center hidden"></div>
                                    </div>
                                </form>
                            </div>
                        </div> <!-- end of image-container -->
                    </div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of header-content -->
</header> <!-- end of header -->
<!-- end of header -->


<!-- Services -->



<!-- Details 1 -->
<div class="basic-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="text-container">
                    <h2>INVEST WITH CONFIDENCE IN AFRICA'S BIGGEST FINANCIAL MARKET</h2>
                    <p class="testimonial-text">"<b>AFRICA</b> will define the future" - <b>Twitter</b> Chief Executive Jack Dorsey.</p>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <div class="image-container">
                    <img class="img-fluid" src="<?php echo BASE_URL; ?>assets/images/2329966.svg" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-1 -->
<!-- end of details 1 -->


<!-- Details 2 -->
<div class="basic-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="image-container">
                    <img class="img-fluid" src="<?php echo BASE_URL; ?>assets/images/Investment-SVG.svg" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
            <div class="col-lg-8">
                <div class="text-container">
                    <h3>WHY INVEST IN US, EUROPE WHEN THE NEXT BIG MARKET IS HERE</h3>
                    <p>We make investment Accessible/ Inclusive by giving you the BEST investment option from every sector.</p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">You can own local shares, trust funds, finance project, trade forex all with this tiny box</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Invest directly into Africa from anywhere in the world</div>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Never miss a new opportunity to invest and make money</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Wether you have short term investment place or long term, Rebox got you covered</div>
                        </li>
                    </ul>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-2 -->
<!-- end of details 2 -->



<!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-col">
                    <h4>ABOUT REBOX.NG</h4>
                    <p style="text-align: justify; font-size: 15px;">Rebox.ng is a property of Business integration and service support , a company duly registered with the Coporate Affairs Commission, Nigeria. Rebox.ng is the platform that gives access to the use of our marketing, Customer Services, Operations and Technology by registered brokers.</p>
                </div>
            </div> <!-- end of col -->
            <div class="col-md-4">
                <div class="footer-col middle">
                    <h4>DISCLAIMER:</h4>
                    <p style="text-align: justify; font-size: 15px;">Rebox is not a registered broker and we offer based on the registered brokers investment option or advice, investment involves risk, all accounts are traded with the registered broker which include forex.</p>
                </div>
            </div> <!-- end of col -->
            <div class="col-md-4">
                <div class="footer-col last">
                    <h4>Social Media</h4>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-twitter fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-google-plus-g fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-instagram fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-linkedin-in fa-stack-1x"></i>
                        </a>
                    </span>
                </div>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of footer -->
<!-- end of footer -->


<!-- Copyright -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="p-small">Copyright © Rebox.ng <a href=""></a></p>
            </div> <!-- end of col -->
        </div> <!-- enf of row -->
    </div> <!-- end of container -->
</div> <!-- end of copyright -->
<!-- end of copyright -->

<script src="models/views/landingPage.js"></script>
<?php
include(ROOT_PATH . 'inc/landingPagefooter.php'); ?>