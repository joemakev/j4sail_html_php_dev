<?php require_once('php-inc-header.php'); ?>

    <!-- Main Content -->
    <section id="main">
        <div class="pageHeader bgCover bgTopLeft mb60" style='background-image:url(assets/img/pixabay-search-qimono-door-choices.jpg)'>
            <div class="container">
                <div class="row">
                    <div class="ccol col-md-12">
                        <?php if(isset($_REQUEST['s']) && $_REQUEST['s'] != ""): ?>
                            <h3 class="mb-3">You have searched for "<strong><?php echo $_REQUEST['s']; ?></strong>"</h3>
                        <?php else: ?>
                            <h2 class="page-title mb-3"><?php echo $pageName; ?></h2>
                        <?php endif; ?>

                        <form class="searchForm" action="php-search.php" method="get">
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
                            <li><a href="php-index-p.php">Home</a></li>
                            <li class="active"><?php echo $pageName; ?></li>
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

    <?php require_once('php-inc-cta-bottom.php'); ?>

<?php require_once('php-inc-footer.php'); ?>