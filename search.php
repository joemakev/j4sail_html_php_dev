<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="keywords" content="Starter, Blank, Empty">
    <meta name="author" content="j4Sail Dev">

    <title>j4Sail - Search</title>

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
    
    <!-- Custom CSS -->    
    <link type="text/css" rel="stylesheet" href="assets/css/theme.css">
    <link type="text/css" rel="stylesheet" href="custom-style.css">
</head>
<body class='blank_page'>
    <!-- Header -->
    <header id="header">
        <!-- #navMobileTopBox -->

        <div class="container">
            <div class="header-col">
                <div class="header-row">
                    <div class="logo">
                        <a href="index.html">
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
                                    <a class="nav-link" href="inquire.html">
                                        <i class="fas fa-info-circle"></i>
                                        <span>Inquire Now</span>
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
                                        <form action="search.php" method="get">
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
                                            <a class="btn btn-dark viewCart" href="cart.html">View Cart</a>
                                            <a class="btn btn-primary checkout" href="checkout.html">Checkout</a>
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
                                <li class="dropdown ">
                                    <a href="index.html" class="dropdown-item">Home</a>
                                    <ul class="subBtnMenu dropdown-menu">
                                        <li><a class="dropdown-item" href="index-2.html">Home Page 2</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown ">
                                    <a href="about.html" class="dropdown-item">About Us</a>
                                    <ul class="subBtnMenu dropdown-menu">
                                        <li><a class="dropdown-item" href="inquire.html">Inquire Now</a></li>
                                        <li><a class="dropdown-item" href="gallery.html">Gallery</a></li> 
                                        <li><a class="dropdown-item" href="careers.html">Careers</a></li> 
                                        <li><a class="dropdown-item" href="our-team.html">Our Team</a></li> 
                                        <li><a class="dropdown-item" href="faq.html">FAQ</a></li>
                                        <li><a class="dropdown-item" href="search.php">Search</a></li>
                                        <li><a class="dropdown-item" href="404.html">404</a></li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item" href="z-blank.html">Extra Pages <i class="fas fa-caret-right"></i></a>
                                            <ul class="subBtnMenu dropdown-menu">
                                                <li><a class="dropdown-item" href="z-blank.html">Blank Page</a></li>
                                                <li><a class="dropdown-item" href="z-blank-2.html">Blank Page 2</a></li>
                                                <li><a class="dropdown-item" href="privacy.html">Privacy Policy</a></li>
                                                <li><a class="dropdown-item" href="under-construction.html">Under Construction</a></li> 

                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class=""><a href="contact.html" class="dropdown-item">Contact Us</a> </li>

                                <li class="dropdown ">
                                    <a href="shop.html" class="dropdown-item">Shop</a>
                                    <ul class="subBtnMenu dropdown-menu">
                                        <li class="dropdown-submenu dropdown-reverse">
                                            <a class="dropdown-item" href="shop.html">Shop Page <i class="fas fa-caret-right"></i></a>
                                            <ul class="subBtnMenu dropdown-menu">
                                                <li> <a class="dropdown-item" href="shop-2.html">Shop Page 2</a> </li>
                                                <li> <a class="dropdown-item" href="product-detail.html">Product Detail</a> </li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item" href="cart.html">Cart</a></li>
                                        <li><a class="dropdown-item" href="checkout.html">Checkout</a></li>
                                        <li><a class="dropdown-item" href="login.html">Login</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown ">
                                    <a href="blog.html" class="dropdown-item">Blog</a>
                                    <ul class="subBtnMenu dropdown-menu">
                                        <li><a class="dropdown-item" href="blog.html">Blog Page</a></li>
                                        <li><a class="dropdown-item" href="blog-detail.html">Blog Detail</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown ">
                                    <a href="projects.html" class="dropdown-item">Projects</a>
                                    <ul class="subBtnMenu dropdown-menu">
                                        <li><a class="dropdown-item" href="projects.html">Project Page</a></li>
                                        <li><a class="dropdown-item" href="project-detail.html">Project Detail</a></li>
                                    </ul>
                                </li>
                            </ul>
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

    <!-- Main Content -->
    <section id="main">
        <div class="pageHeader bgCover bgTopLeft mb60" style='background-image:url(assets/img/placeholder-1920x450.png)'>
            <div class="container">
                <div class="row">
                    <div class="ccol col-md-12">
                        <?php if(isset($_REQUEST['s']) && $_REQUEST['s'] != ""): ?>
                            <h3 class="mb-3">You have searched for "<strong><?php echo $_REQUEST['s']; ?></strong>"</h3>
                        <?php else: ?>
                            <h2 class="page-title mb-3">Search</h2>
                        <?php endif; ?>

                        <form class="searchForm" action="search.php" method="get">
                            <div class="simple-search input-group">
                                <input class="form-control" name="s" type="search" value="<?php echo isset($_REQUEST['s']) && $_REQUEST['s'] != "" ? $_REQUEST['s'] : "";?>" placeholder="Search...">
                                <span class="input-group-append">
                                    <button class="btn" type="submit">
                                        <i class="fa fa-search header-nav-top-icon"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <ul class="breadcrumbs">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Search</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- pageHeader -->

        <div class="contentBox mb60">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php if(isset($_REQUEST['s']) && $_REQUEST['s'] != ""): ?>
                            <h2 class="mb-4"><strong>Search Results for "<?php echo isset($_REQUEST['s']) && $_REQUEST['s'] != "" ? $_REQUEST['s'] : "";?>"</strong></h2>
                        <?php endif; ?>

                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Vivendum intellegat et qui, ei denique consequuntur vix. Vivendum intellegat et qui, ei denique consequuntur vix. Vivendum intellegat et qui, purto expetendis cotidieque quo cu, veri persius vituperata ei nec. Offendit eleifend moderatius ex vix, quem odio mazim et qui, purto expetendis cotidieque quo cu, veri persius vituperata ei nec. Vivendum intellegat et qui, ei denique consequuntur vix. Unum dicam posidonium eu vix, sea eu ubique viderer civibus, oporteat signiferumque eos et. Electram intellegat voluptaria et eam, eam ex aperiri temporibus scriptorem. Offendit eleifend moderatius ex vix, quem odio mazim et qui, purto expetendis cotidieque quo cu, veri persius vituperata ei nec. Pri posse graeco definitiones cu, id eam populo quaestio adipiscing, usu quod malorum te. Vivendum intellegat et qui, ei denique consequuntur vix. Vivendum intellegat et qui, ei denique consequuntur vix.</p>

                    </div>
                </div>
            </div>
        </div> <!-- contentBox -->
        
    </section> <!-- end of #main -->

    <div class="ctaBottom py-5">
        <div class="container">
            <div class="row">
                <div class="ccol col-md-6">
                    <div class="cta-text">
                        <h3 class="mb-3"><b>Choose j4Sail Theme</b></h3>
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil incidunt atque reiciendis quo eius rerum dicta error, natus dolore excepturi fugiat tempora suscipit inventore ut laborum cum quae? Consequuntur, numquam.</p>
                    </div>
                </div>
                <div class="ccol col-md-6">
                    <div class="contactInfo">
                        <div>
                            <i class="fas fa-phone-volume"></i>
                            <span>
                                <h4><b>Call us</b></h4>
                                <p><a href="tel:8907654321">(890) 7654321</a></p>
                            </span>
                        </div>
                        <div>
                            <i class="far fa-envelope"></i>
                            <span>
                                <h4><b>Email us</b></h4>
                                <p><a class="mailSales" href="mailto:test@gmail.com">test@gmail.com</a></p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </div> <!-- ctaBottom -->
<footer id="footer">
        <div class="container">
            <div class="row py-5">
                <div class="ccol col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <h5 class="mb-3">NEWSLETTER</h5>
                    <p class="mb-3">Sign up now and be updated on the latest events and development on our company.</p>
                    <form id="footerSignUp" action="#" method="POST" v-cloak>
                        <input class="form-control form-control-sm bg-light" placeholder="Email Address" type="email" v-model='form.inputs.email' :class='form.errors.email ? "error_input" : ""'>
                        <div class="mt-3">
                            <div v-show='!isLoading'><button class="btn btn-primary px-3 py-2" @click='submitForm(event, "footerSignUp")'><b>Submit</b> <i class="fab fa-telegram-plane"></i></button></div>
                            <div v-show='isLoading'><strong>Sending form, please wait..</strong></div>
                        </div>
                    </form>
                </div>

                <div class="ccol col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <h5 class="mb-3">LATEST NEWS</h5>
                    <p class="mb-0">Pri posse graeco definitiones cu, id eam populo quaestio adipiscing, usu quod malorum te. Saepe imperdiet at per, appareat vituperata vix te, pri sint assueverit te.</p>
                </div>

                <div class="ccol col-md-6 col-lg-3 mb-4 mb-md-0">
                    <div class="contact-details">
                        <h5 class="mb-3">CONTACT US</h5>
                        <ul class="list list-icons list-icons-lg">
                            <li class="mb-1"><i class="far fa-map"></i><p>567 Cross Road St., New Theater, Saturn City, 1747, Pluto</p></li>
                            <li class="mb-1"><i class="fas fa-phone-square-alt"></i><p><a href="tel:8907654321">(890) 7654321</a></p></li>
                            <li class="mb-1"><i class="far fa-envelope"></i><p><a href="mailto:test@gmail.com">test@gmail.com</a></p></li>
                        </ul>
                    </div>
                </div>
                <div class="ccol col-md-6 col-lg-2">
                    <h5 class="mb-3">FOLLOW US</h5>
                    <ul class="social-icons">
                        <li><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container py-4">
                <div class="row">
                    <div class="ccol col-md-8 col-lg-8 d-flex align-items-center">
                        <a href="index.html" class="logo">
                            <img alt="Porto Website Template" src="assets/img/logo-j4sail-260.png">
                        </a>
                        <p class="ml-3">&copy; Copyright 2020. All Rights Reserved.</p>
                    </div>
                    <div class="ccol col-md-4 col-lg-4 d-flex">
                        <nav>
                            <ul>
                                <li><i class="fas fa-angle-right"></i><a href="faq.html" class="ml-1 text-decoration-none"> FAQs</a></li>
                                <li><i class="fas fa-angle-right"></i><a href="about.html" class="ml-1 text-decoration-none"> About Us</a></li>
                                <li><i class="fas fa-angle-right"></i><a href="contact.html" class="ml-1 text-decoration-none"> Contact Us</a></li>
                                <li><button id="backToTop"><i class="fa fa-chevron-up"></i></button></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div> <!-- copyright -->

    </footer> <!-- footer -->


    <!-- Vendor JS -->
    <script type="text/javascript" src="assets/vendor/jquery.min.js"></script>
    <script type="text/javascript" src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/vendor/slick-carousel/slick.min.js"></script>
    <script type="text/javascript" src="assets/vendor/vue-v2.6.11.js"></script>
    <script type="text/javascript" src="assets/vendor/sweetalert29.js"></script>

    <!-- Custom JS -->
    <script type="text/javascript" src="assets/js/theme.js"></script>

    </body>
</html>