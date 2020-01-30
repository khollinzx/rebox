<!--header section start-->
<header class="header">
    <!--start navbar-->
    <nav class="navbar navbar-expand-lg fixed-top bg-transparent">
        <div class="container">
            <a class="navbar-brand" href="index-2.html"><img src="<?php echo BASE_URL; ?>assets/img/Asset 7.png" width="120" alt="logo" class="img-fluid"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu"></span>
            </button>

            <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link page-scroll <?php if ($linkTitle == 'home') {
                                                            echo 'active';
                                                        } ?>" href="<?php echo BASE_URL; ?>home/">Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll <?php if ($linkTitle == 'calculator') {
                                                            echo 'active';
                                                        } ?>" href="<?php echo BASE_URL; ?>calculator/"> Calculator</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll <?php if ($linkTitle == 'login') {
                                                            echo 'active';
                                                        } ?>" href="<?php echo BASE_URL; ?>proceed/">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll <?php if ($linkTitle == 'signup') {
                                                            echo 'active';
                                                        } ?>" href="<?php echo BASE_URL; ?>create/">Sign Up</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!--end navbar-->
</header>
<!--header section end-->