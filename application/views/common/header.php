
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?= base_url();?>assets/img/favicon.png" type="image/x-icon">
    <?php include 'css-links.php' ?>
  </head>
  <body>
    <div id="loader">
        <!-- <img src="<?=base_url();?>assets/img/loader.gif" alt=""> -->
        <img src="<?=base_url();?>assets/img/logo/wingsbull-logo.webp" alt="">
    </div>

  <!-- this tag will end in footer so don't remove -->
  <main id="root">
  <!-- this tag will end in footer so don't remove -->
	
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
            <div class="header-top w-100">
                <div class="row">
                    <div class="col-lg-6">
                        <a class="navbar-brand" href="<?= base_url() ?>">
                            <img src="<?= base_url() ?>assets/img/logo/wingsbull-logo.webp" alt="The Wingshield Logo">
                        </a>
                    </div>
                    <div class="col-lg-2 d-none d-lg-block">
                        <div class="flex-center">
                            <h6><i class="far fa-clock"></i> opening time</h6>
                            <span>All Day 9:00 to 18:00 </span>
                        </div>
                    </div>
                    <div class="col-lg-2 d-none d-lg-block">
                        <div class="flex-center">
                            <h6><i class="fas fa-mobile-alt"></i> Call Us 24/7</h6>
                            <span>+156 7898 01234 </span>
                        </div>
                    </div>
                    <div class="col-lg-2 d-none  d-lg-block">
                        <div class="flex-center">
                            <h6> <i class="far fa-envelope"></i> Email Us</h6>
                            <span>info@example.com</span>
                        </div>
                    </div>
                </div>
            </div>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#toggleNav" aria-controls="toggleNav" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            
            <div class="collapse navbar-collapse" id="toggleNav">
                    <div class="header-bottom">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link <?php if($page=='home'){echo ('active');} ?> " aria-current="page" href="<?= base_url() ?>">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php if($page=='services'){echo ('active');} ?>" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <div>
                                    <img src="<?=base_url();?>assets/img/services/apple/service-banner.png" alt="" id="dropdown-image">
                                </div>
                                <li>
                                    <a class="dropdown-item" href="<?=base_url();?>apple-device-repair">
                                        <!-- <img src="<?= base_url() ?>assets/img/icons/crm.png" alt=""> -->
                                        Apple Device Repair
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?=base_url();?>microsoft-device-repair">
                                        Microsoft Device Repair
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?=base_url();?>data-recovery">
                                        Data Recovery
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?=base_url();?>other-manufacturer-repair">
                                        Other Manufacturer Device Repair
                                    </a>
                                </li>
                            </ul>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link <?php if($page=='faq'){echo ('active');} ?>" href="<?=base_url();?>about" >About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($page=='contact'){echo ('active');} ?>" href="<?=base_url();?>contact" >Contact Us</a>
                        </li>
                    </ul>
                    <!-- <form class="search-box d-none d-lg-block">
                        <input type="search" placeholder=" "/>
                        <button type="reset"></button>
                    </form> -->
                    <!-- <a href="#" class="search d-none d-lg-block" >
                        <i class="fas fa-search"></i>
                    </a> -->
                </form>
                </div>
            </div>
        </div>
    </nav>
	

    