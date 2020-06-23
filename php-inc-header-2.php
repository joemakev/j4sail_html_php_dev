<?php require_once('php-inc-header-vars.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <meta name="keywords" content="<?php echo $pageKeywords; ?>">
    <meta name="author" content="<?php echo $pageAuthor; ?>">

    <title><?php echo $pageTitle; ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS -->
    <link type="text/css" rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/vendor/fontawesome/css/all.min.css">
    <link type="text/css" rel="stylesheet" href="assets/vendor/slick-carousel/slick-min.css">
    <link type="text/css" rel="stylesheet" href="assets/vendor/slick-carousel/slick-theme-min.css">
    <link type="text/css" rel="stylesheet" href="assets/vendor/animate.min-v3.6.2.css">

    <?php if($pageName == 'Home' || $parentMenu == "Home" || $pageName == 'Gallery' || $pageName == 'Projects'): ?>
        <link type="text/css" rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css">
    <?php elseif($pageName == 'Shop'): ?>
        <link type="text/css" rel="stylesheet" href="assets/vendor/nouislider/nouislider.min.css">
    <?php endif; ?>

    <!-- Custom CSS -->    
    <link type="text/css" rel="stylesheet" href="assets/css/theme.css?v=<?php echo filemtime(dirname(__FILE__)."/assets/css/theme.css"); ?>">
    <link type="text/css" rel="stylesheet" href="custom-style.css">
</head>
<body class='<?php echo $bodyClass; echo $parentMenuClass != "" ? " " . $parentMenuClass : ""; ?>'>
    <!-- Header -->
    <header id="header" class="fluid">
        <!-- #navMobileTopBox -->

        <div class="container">
            <div class="header-col">
                <div class="header-row">
                    <div class="logo">
                        <a href="php-index-p.php">
                            <img src="assets/img/logo-j4sail-640.png" alt="logo">
                        </a>
                    </div>
                </div>
            </div> <!-- header-col -->

            <div class="header-col">
                <div class="header-row" id="navHeaderTopBox">
                    <div class="header-nav top" id="navHeaderTop">
                        <div class="topLinks">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link" href="php-careers-p.php">
                                        <i class="fas fa-user-friends"></i>
                                        <span>Careers</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="tel:8907654321">
                                        <i class="fas fa-phone"></i>
                                        <span>(890) 7654321</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="social">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link" target="_blank" href="https://www.facebook.com">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" target="_blank" href="https://www.twitter.com">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" target="_blank" href="https://www.linkedin.com">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="shop">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-modal="searchBox">
                                        <i class="fas fa-search"></i>
                                    </a>
                                    <div class="header-nav-features-dropdown headerModal searchBox">
                                        <form action="php-search.php" method="get">
                                            <div class="simple-search input-group">
                                                <input class="form-control" name="s" type="search" placeholder="Search...">
                                                <span class="input-group-append">
                                                    <button class="btn" type="submit">
                                                        <i class="fa fa-search header-nav-top-icon"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-modal="cartBox">
                                        <i class="fa fa-shopping-cart"></i>
                                        <small class="qty">3</small>
                                    </a>
    
                                    <div class="header-nav-features-dropdown headerModal cartBox">
                                        <ol class="cart-items">
                                            <li class="item ">
                                                <a href="#" class="clearfix">
                                                    <p>
                                                        <strong class="product-name">Rare Gadget Item No. 1</strong>
                                                        <span class="price">
                                                            1 x <em>$890.00</em>
                                                        </span>
                                                    </p>
                                                    <figure class="product-photo">
                                                        <i class="close fas fa-times"></i>
                                                        <img src="assets/img/placeholder-300x300.png" alt="Gadget Item No. 1">
                                                    </figure>
                                                </a>
                                            </li>
                                            <li class="item">
                                                <a href="#" class="clearfix">
                                                    <p>
                                                        <strong class="product-name">Rare Gadget Special Good Useful Item No. 2</strong>
                                                        <span class="price">
                                                            1 x <em>$600.00</em>
                                                        </span>
                                                    </p>
                                                    <figure class="product-photo">
                                                        <i class="close fas fa-times"></i>
                                                        <img src="assets/img/placeholder-300x300.png" alt="Gadget Item No. 2">
                                                    </figure>
                                                </a>
                                            </li>
                                            <li class="item">
                                                <a href="#" class="clearfix">
                                                    <p>
                                                        <strong class="product-name">Rare Gadget Special Good Useful Item No. 3</strong>
                                                        <span class="price">
                                                            1 x <em>$900.00</em>
                                                        </span>
                                                    </p>
                                                    <figure class="product-photo">
                                                        <i class="close fas fa-times"></i>
                                                        <img src="assets/img/placeholder-300x300.png" alt="Gadget Item No. 3">
                                                    </figure>
                                                </a>
                                            </li>
                                        </ol>
                                        <div class="totalRow clearfix">
                                            <span class="label">Total:</span>
                                            <span class="price-total"><span class="price">$2,390.00</span></span>
                                        </div>
                                        <div class="actions clearfix">
                                            <a class="btn btn-dark viewCart" href="php-cart-p.php">View Cart</a>
                                            <a class="btn btn-primary checkout" href="php-checkout-p.php">Checkout</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- header-nav-extra shop -->
                    </div> <!-- header-nav top -->
                </div> <!-- header-row --->

                <div class="header-row" id="navDesktopBox">
                    <div class="header-nav main">
                        <nav class="collapse">
                            <ul class="nav nav-pills">
                                <li class="dropdown <?php echo $pageName == 'Home' || $parentMenu == 'Home'  ? 'active' : ''; ?>">
                                    <a href="php-index-p.php" class="dropdown-item">Home</a>
                                    <ul class="subBtnMenu dropdown-menu">
                                        <li><a class="dropdown-item" href="php-index-2-p.php">Home Page 2</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown <?php echo $pageName == 'About Us' || $parentMenu == 'About Us' ? 'active' : ''; ?>">
                                    <a href="php-about-p.php" class="dropdown-item">About Us</a>
                                    <ul class="subBtnMenu dropdown-menu">
                                        <li><a class="dropdown-item" href="php-inquire-p.php">Inquire Now</a></li>
                                        <li><a class="dropdown-item" href="php-gallery-p.php">Gallery</a></li> 
                                        <li><a class="dropdown-item" href="php-careers-p.php">Careers</a></li> 
                                        <li><a class="dropdown-item" href="php-our-team-p.php">Our Team</a></li> 
                                        <li><a class="dropdown-item" href="php-faq-p.php">FAQ</a></li>
                                        <li><a class="dropdown-item" href="php-search.php">Search</a></li>
                                        <li><a class="dropdown-item" href="php-404-p.php">404</a></li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item" href="php-z-blank-p.php">Extra Pages <i class="fas fa-caret-right"></i></a>
                                            <ul class="subBtnMenu dropdown-menu">
                                                <li><a class="dropdown-item" href="php-z-blank-p.php">Blank Page</a></li>
                                                <li><a class="dropdown-item" href="php-z-blank-2-p.php">Blank Page 2</a></li>
                                                <li><a class="dropdown-item" href="php-privacy-p.php">Privacy Policy</a></li>
                                                <li><a class="dropdown-item" href="under-construction.html">Under Construction</a></li> 

                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="<?php echo $pageName == 'Contact Us' ? 'active' : ''; ?>"><a href="php-contact-p.php" class="dropdown-item">Contact Us</a> </li>

                                <li class="dropdown <?php echo $pageName == 'Shop' || $parentMenu == 'Shop' ? 'active' : ''; ?>">
                                    <a href="php-shop-p.php" class="dropdown-item">Shop</a>
                                    <ul class="subBtnMenu dropdown-menu">
                                        <li class="dropdown-submenu dropdown-reverse">
                                            <a class="dropdown-item" href="php-shop-p.php">Shop Page <i class="fas fa-caret-right"></i></a>
                                            <ul class="subBtnMenu dropdown-menu">
                                                <li> <a class="dropdown-item" href="php-shop-2-p.php">Shop Page 2</a> </li>
                                                <li> <a class="dropdown-item" href="php-product-detail-p.php">Product Detail</a> </li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item" href="php-cart-p.php">Cart</a></li>
                                        <li><a class="dropdown-item" href="php-checkout-p.php">Checkout</a></li>
                                        <li><a class="dropdown-item" href="php-login-p.php">Login</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown <?php echo $pageName == 'Blog' || $parentMenu == 'Blog' ? 'active' : ''; ?>">
                                    <a href="php-blog-p.php" class="dropdown-item">Blog</a>
                                    <ul class="subBtnMenu dropdown-menu">
                                        <li><a class="dropdown-item" href="php-blog-p.php">Blog Page</a></li>
                                        <li><a class="dropdown-item" href="php-blog-detail-p.php">Blog Detail</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown <?php echo $pageName == 'Projects' || $parentMenu == 'Projects' ? 'active' : ''; ?>">
                                    <a href="php-projects-p.php" class="dropdown-item">Projects</a>
                                    <ul class="subBtnMenu dropdown-menu">
                                        <li><a class="dropdown-item" href="php-projects-p.php">Project Page</a></li>
                                        <li><a class="dropdown-item" href="php-project-detail-p.php">Project Detail</a></li>
                                    </ul>
                                </li>
                            </ul>

                            <a href="php-inquire-p.php" class="inquireNow btn btn-dark">
                                <i class="fa fa-caret-right"></i>
                                <span>Inquire Now</span>
                            </a>
                        </nav>
                    </div> <!-- header-nav main -->

                    <!-- Mobile Nav Button -->
                    <button id="navMobileButton">
                        <i class="fas fa-bars"></i>
                    </button>

                </div> <!-- #navDesktopBox -->

            </div> <!-- header-col -->
        </div> <!-- container -->

        <!-- #navMobileBox -->
    </header> <!-- #header -->