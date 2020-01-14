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

    <div class="collapse navbar-collapse " id="navbarsExampleDefault">

        <div class="navbar-nav ml-auto">
            <ul class="navbar-nav mt-3 ml-aut mr-3">
                <li class="nav-item">
                    <a class="nav-link page-scroll <?php if ($linkTitle == "home") {
                                                        echo "live";
                                                    } ?>" href="<?php echo BASE_URL; ?>home/">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll <?php if ($linkTitle == "about") {
                                                        echo "live";
                                                    } ?>" href="<?php echo BASE_URL; ?>abt/">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll <?php if ($linkTitle == "contact") {
                                                        echo "live";
                                                    } ?>" href="<?php echo BASE_URL; ?>cot/">CONTACT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll <?php if ($linkTitle == "calculator") {
                                                        echo "live";
                                                    } ?>" href="<?php echo BASE_URL; ?>calculator/">CALCULATOR</a>
                </li>
            </ul>
            <div>
                <a class="page-scroll btn-solid-reg mr-3 mb-3" href="<?php echo BASE_URL; ?>proceed/"> LOGIN</a>
                <a class="page-scroll btn-solid-reg mr-3 mb-3" href="<?php echo BASE_URL; ?>new/"> SIGN UP</a>
            </div>
        </div>
    </div>
</nav> <!-- end of navbar -->
<!-- end of navigation -->