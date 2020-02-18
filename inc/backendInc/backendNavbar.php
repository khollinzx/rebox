<!-- Side Nav START -->
<div class="side-nav">
    <div class="card">
        <div class="card-body">
            <div class="m-t-20 text-center">
                <div class="avatar avatar-image" style="height: 100px; width: 100px;">
                    <img src="assets/images/avatars/thumb-1.jpg" alt="">
                </div>
                <br>
                <span class="m-t-10">Welcome</span>
                <h4 class="m-t-5"> Collins Benson</h4>
                <span class="m-t-5"> <i class="anticon anticon-qrcode"></i> CB-90234</span>
            </div>
        </div>
    </div>
    <div class="side-nav-inner" style="padding-top: 5%">
        <ul class="side-nav-menu scrollable">
            <li class="nav-item dropdown open">
                <a class="dropdown-toggle <?php if ($linkTitle == 'dashboard') {
                                                echo 'active';
                                            } ?>" href="<?php echo BASE_URL; ?>app/account/">
                    <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item dropdown open">
                <a class="dropdown-toggle <?php if ($linkTitle == 'discover') {
                                                echo 'active';
                                            } ?>" href="<?php echo BASE_URL; ?>app/discover/">
                    <span class="icon-holder">
                        <i class="anticon anticon-compass"></i>
                    </span>
                    <span class="title">Discover</span>
                </a>
            </li>
            <li class="nav-item dropdown open">
                <a class="dropdown-toggle <?php if ($linkTitle == 'transaction') {
                                                echo 'active';
                                            } ?>" href="<?php echo BASE_URL; ?>app/transactions/">
                    <span class="icon-holder">
                        <i class="anticon anticon-bars"></i>
                    </span>
                    <span class="title">Transactions</span>
                </a>
            </li>
            <li class="nav-item dropdown open">
                <a class="dropdown-toggle <?php if ($linkTitle == 'profile') {
                                                echo 'active';
                                            } ?>" href="<?php echo BASE_URL; ?>app/profile/">
                    <span class="icon-holder">
                        <i class="anticon anticon-user"></i>
                    </span>
                    <span class="title">Profile</span>
                </a>
            </li>
            <li class="nav-item dropdown open">
                <a class="dropdown-toggle" href="<?php echo BASE_URL; ?>app/logout/">
                    <span class="icon-holder">
                        <i class="anticon anticon-poweroff"></i>
                    </span>
                    <span class="title">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- Side Nav END -->

<!-- Page Container START -->
<div class="page-container">