<?php require_once('php-inc-header.php'); ?>

    <!-- Main Content -->
    <section id="main">
        <div class="pageHeader bgCover mb60" style='background-image:url(assets/img/pixabay-problem-ryanmcguire-ford-classic.jpg)'>
            <div class="container">
                <div class="row">
                    <div class="ccol col-md-12">
                        <h2 class="page-title mb-3"><?php echo $pageName; ?></h2>
                        <ul class="breadcrumbs">
                            <li><a href="php-index.php">Home</a></li>
                            <li class="active"><?php echo $pageName; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- pageHeader -->

        <div class="box404 mb60">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Error 404</h1>
                        <h2 class="mb-4"><b>Sorry, Page Not Found..</b></h2>
                        <p>Looking for something? Please feel free to contact us <a href="php-contact-p.php">here.</a></p>

                    </div>
                </div>
            </div>
        </div> <!-- contentBox -->
        
    </section> <!-- end of #main -->

    <?php require_once('php-inc-cta-bottom.php'); ?>

<?php require_once('php-inc-footer.php'); ?>