<?php require_once('php-inc-header.php'); ?>

    <!-- Main Content -->
    <section id="main">
        <div class="pageHeader downSize bgCover mb40" style='background-image:url(assets/img/placeholder-1920x160.png)'>
            <div class="container">
                <div class="row">
                    <div class="ccol col-md-12">
                        <h2 class="page-title mb-3"><?php echo $pageName; ?></h2>
                        <ul class="breadcrumbs">
                            <li><a href="php-index-p.php">Home</a></li>
                            <li class="active"><?php echo $pageName; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- pageHeader -->

        <div class="loginBox">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form class="login-form inputForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Username or email *</label>
                                        <input type="text" name="name" id="name" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Password *</label>
                                        <input type="password" name="password" id="password" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <a href="#" class="btn btn-primary px-5 py-2  mr-2"><b>Login</b></a>
                                    <label class="forCheck" for="rememberCheck">
                                        <input name="rememberCheck" type="checkbox" id="rememberCheck"> Remember Me
                                    </label>
                                    <div class="mt-2"><a class="lost-password" href="#">Lost your password?</a></div>
                                </div>
                            </div>
                        </form>
                    
                    </div>
                </div>
            </div>
        </div> <!-- checkoutBox -->
        
    </section> <!-- end of #main -->

    <?php require_once('php-inc-cta-bottom.php'); ?>

<?php require_once('php-inc-footer.php'); ?>