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
                        <a href="php-index-p.php" class="logo">
                            <img alt="Porto Website Template" src="assets/img/logo-j4sail-260.png">
                        </a>
                        <p class="ml-3">&copy; Copyright <?php echo date("Y"); ?>. All Rights Reserved.</p>
                    </div>
                    <div class="ccol col-md-4 col-lg-4 d-flex">
                        <nav>
                            <ul>
                                <li><i class="fas fa-angle-right"></i><a href="php-faq-p.php" class="ml-1 text-decoration-none"> FAQs</a></li>
                                <li><i class="fas fa-angle-right"></i><a href="php-about-p.php" class="ml-1 text-decoration-none"> About Us</a></li>
                                <li><i class="fas fa-angle-right"></i><a href="php-contact-p.php" class="ml-1 text-decoration-none"> Contact Us</a></li>
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
    <script type="text/javascript" src="assets/js/theme.js?v=<?php echo filemtime(dirname(__FILE__)."/assets/js/theme.js"); ?>"></script>

    <?php if($pageName == 'Home' || $parentMenu == "Home"): ?>
        <script type="text/javascript" src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="assets/js/home.js?v=<?php echo filemtime(dirname(__FILE__)."/assets/js/home.js"); ?>"></script>
    <?php elseif($pageName == 'Contact Us'): ?>
        <script type="text/javascript" src='assets/js/contact.js?v=<?php echo filemtime(dirname(__FILE__)."/assets/js/contact.js"); ?>'></script>
    <?php elseif($pageName == 'Inquire Now'): ?>
        <script type="text/javascript" src='assets/js/inquire.js?v=<?php echo filemtime(dirname(__FILE__)."/assets/js/inquire.js"); ?>'></script>
    <?php elseif($pageName == 'Gallery' || $pageName == 'Projects'): ?>
        <script type="text/javascript" src="assets/vendor/masonry/imagesloaded.pkgd.min.js"></script>
        <script type="text/javascript" src="assets/vendor/masonry/masonry.pkgd.min.js"></script>
        <?php if($pageName == 'Projects'): ?>
            <script type="text/javascript" src='assets/js/projects.js?v=<?php echo filemtime(dirname(__FILE__)."/assets/js/projects.js"); ?>'></script>
        <?php elseif($pageName == 'Gallery'): ?>
            <script type="text/javascript" src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
            <script type="text/javascript" src='assets/js/gallery.js?v=<?php echo filemtime(dirname(__FILE__)."/assets/js/gallery.js"); ?>'></script>
        <?php endif; ?>
    <?php elseif($pageName == 'Careers'): ?>
        <script type="text/javascript" src='assets/js/careers.js?v=<?php echo filemtime(dirname(__FILE__)."/assets/js/careers.js"); ?>'></script>
    <?php elseif($pageName == 'Shop'): ?>
        <script type="text/javascript" src='assets/vendor/nouislider/nouislider.min.js'></script>
        <script type="text/javascript" src='assets/js/shop.js?v=<?php echo filemtime(dirname(__FILE__)."/assets/js/shop.js"); ?>'></script>
    <?php elseif($pageName == 'Product Detail'): ?>
        <script type="text/javascript" src='assets/js/product-detail.js?v=<?php echo filemtime(dirname(__FILE__)."/assets/js/product-detail.js"); ?>'></script>
    <?php elseif($pageName == 'Cart'): ?>
        <script type="text/javascript" src='assets/js/cart.js?v=<?php echo filemtime(dirname(__FILE__)."/assets/js/cart.js"); ?>'></script>
    <?php elseif($pageName == 'Checkout'): ?>
        <script type="text/javascript" src='assets/js/checkout.js?v=<?php echo filemtime(dirname(__FILE__)."/assets/js/checkout.js"); ?>'></script>
    <?php endif; ?>
</body>
</html>