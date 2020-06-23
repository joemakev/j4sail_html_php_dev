<?php require_once('php-inc-header.php'); ?>

    <!-- Main Content -->
    <section id="main">
        <div class="pageHeader downSize bgCover mb60" style='background-image:url(assets/img/placeholder-1920x160.png)'>
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

        <div class="blogDetailBox mb60">
            <div class="container">
                <div class="row">
                    <div class="sidebar col-md-3">
                        <div class="widget search">
                            <h5 class="title mb-3 textBlue"><b>Search Site</b></h5>
                            <form class="searchForm" action="search.php" method="get">
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

                        <div class="widget productCat blogCat">
                            <h5 class="title mb-3 textBlue"><b>Blog Categories</b></h5>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="#">Blog Category 1</a>
                                        <ul>
                                            <li><a href="#">Sub Blog Category 1</a></li>
                                            <li><a href="#">Sub Blog Category 2</a></li>
                                            <li><a href="#">Sub Blog Category 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Blog Category 2</a></li>
                                    <li>
                                        <a href="#">Blog Category 3</a>
                                        <ul>
                                            <li><a href="#">Sub Blog Category 1</a></li>
                                            <li><a href="#">Sub Blog Category 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Blog Category 4</a></li>
                                    <li><a href="#">Blog Category 5</a></li>
                                </ul>
                            </nav>
                        </div>

                        <div class="widget productRelated blogRelated">
                            <h5 class="title mb-3 textBlue"><b>Related Posts</b></h5>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <div>
                                                <img src="assets/img/placeholder-300x300.png" alt="product">
                                            </div>
                                            <div>
                                                <strong>Sample Title for Blog Post 1</strong>
                                                <p>
                                                    <span>March 16, 2020</span>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div>
                                                <img src="assets/img/placeholder-300x300.png" alt="product">
                                            </div>
                                            <div>
                                                <strong>Sample Title for Blog Post 2</strong>
                                                <p>
                                                    <span>February 21, 2020</span>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div>
                                                <img src="assets/img/placeholder-300x300.png" alt="product">
                                            </div>
                                            <div>
                                                <strong>Sample Title for Blog Post 3</strong>
                                                <p>
                                                    <span>January 8, 2020</span>
                                                </p>
                                            </div>
                                        </a>
                                    </li>

                                </ul>
                            </nav>
                        </div>

                        <div class="widget productCat blogArchive mb-0">
                            <h5 class="title mb-3 textBlue"><b>Archives</b></h5>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="#">December 2020</a>
                                        <ul>
                                            <li><a href="#">December 3, 2020</a></li>
                                            <li><a href="#">December 1, 2020</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">October 2020</a></li>
                                    <li><a href="#">July 2020</a></li>
                                </ul>
                            </nav>
                        </div>

                    </div> <!-- sidebar -->

                    <div class="blogContent col-md-9">
                        <h2 class="mb-2"><b class="textBlue">Sample Title for Blog Post 16</b></h2>

                        <div class="author">
                            <div class="blogAuthor mb-3">
                                <a href="#">Category 1</a>
                                <span>December 31, 2020</span>
                                <span>Written by Author</span>
                            </div>
                        </div>

                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Pri posse graeco definitiones cu, id eam populo quaestio adipiscing, usu quod malorum te. Quas scaevola postulant id vis, tincidunt assueverit et pro, quo et alii scripta accommodare. Pri posse graeco definitiones cu, id eam populo quaestio adipiscing, usu quod malorum te.</p>

                        <div class="photo mb-4">
                            <img src="assets/img/placeholder-1024x500.png" alt="photo">
                        </div>
                        
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        
                        <p>Eleifend moderatius ex vix, quem odio mazim et qui, purto expetendis cotidieque quo cu, veri persius vituperata ei nec. Quas scaevola postulant id vis, tincidunt assueverit et pro, quo et alii scripta accommodare. Pri posse graeco definitiones cu, id eam populo quaestio adipiscing, usu quod malorum te. Pri posse graeco definitiones cu, id eam populo quaestio adipiscing, usu quod malorum te. Vivendum intellegat et qui, ei denique consequuntur vix. Offendit eleifend moderatius ex vix, quem odio mazim et qui, purto expetendis cotidieque quo cu, veri persius vituperata ei nec.</p>

                        <div class="socialLinks">
                            <span>Share: </span>
                            <ul>
                                <li><a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.pinterest.com" target="_blank"><i class="fab fa-pinterest"></i></a></li>
                            </ul>
                        </div>

                        <hr class="mt-4 mb-4">

                        <div class="authorInfo">
                            <div class="photo">
                                <img src="assets/img/icon-user-256.png" alt="photo">
                            </div>
                            <div class="text">
                                <h4><b>Blog Author</b></h4>
                                <p>Offendit eleifend moderatius ex vix, quem odio mazim et qui, purto expetendis cotidieque quo cu, veri persius vituperata ei nec. Erroribus adipiscing id eam. Id doctus accommodare eam, pri an esse tota prodesset, te veniam oblique posidonium mel. In pro vero novum officiis, eros copiosae nam id, no mel legimus deleniti mandamus. Offendit eleifend moderatius ex vix, quem odio mazim et qui, purto expetendis cotidieque quo cu, veri persius vituperata ei nec.</p>

                                <div class="socialLinks">
                                    <ul>
                                        <li><a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://www.pinterest.com" target="_blank"><i class="fab fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <hr class="mt-4 mb-4">

                        <div class="commentsBox">
                            <h3 class="mb-4"><b>Comments</b></h3>
                        
                            <div class="authorInfo commentAuthor">
                                <div class="photo">
                                    <img src="assets/img/icon-user-256.png" alt="photo">
                                </div>
                                <div class="text">
                                    <div class="mb-2"><b class="name">User Commenter 1</b> <span class="date">December 18, 2020</span></div>
                                    <p>Scripta periculis ei eam, te pro movet reformidans. Scripta periculis ei eam, te pro movet reformidans. Scripta periculis ei eam, te pro movet reformidans. Vivendum intellegat et qui, ei denique consequuntur vix. Scripta periculis ei eam, te pro movet reformidans.</p>
                                    <div>
                                        <button class="btn btn-sm btn-secondary">Reply</button>
                                    </div>
                                </div>
                            </div>

                            <div class="authorInfo commentAuthor subComment">
                                <div class="photo">
                                    <img src="assets/img/icon-user-256.png" alt="photo">
                                </div>
                                <div class="text">
                                    <div class="mb-2"><b class="name">User Commenter 2</b> <span class="date">December 15, 2020</span></div>
                                    <p>Scripta periculis ei eam, te pro movet reformidans. Scripta periculis ei eam, te pro movet reformidans. Ad doctus gubergren duo, mel te postea suavitate. Scripta periculis ei eam, te pro movet reformidans. Vivendum intellegat et qui, ei denique consequuntur vix. Pri posse graeco definitiones cu, id eam populo quaestio adipiscing, usu quod malorum te. Scripta periculis ei eam, te pro movet reformidans. Offendit eleifend moderatius ex vix, quem odio mazim et qui, purto expetendis cotidieque quo cu, veri persius vituperata ei nec.</p>
                                    <div>
                                        <button class="btn btn-sm btn-secondary">Reply</button>
                                    </div>
                                </div>
                            </div>

                            <div class="authorInfo commentAuthor mb-0">
                                <div class="photo">
                                    <img src="assets/img/icon-user-256.png" alt="photo">
                                </div>
                                <div class="text">
                                    <div class="mb-2"><b class="name">User Commenter 3</b> <span class="date">December 10, 2020</span></div>
                                    <p>Offendit eleifend moderatius ex vix, quem odio mazim et qui, purto expetendis cotidieque quo cu, veri persius vituperata ei nec. Scripta periculis ei eam, te pro movet reformidans. Offendit eleifend moderatius ex vix, quem odio mazim et qui, purto expetendis cotidieque quo cu, veri persius vituperata ei nec.</p>
                                    <div>
                                        <button class="btn btn-sm btn-secondary">Reply</button>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- commentsBox -->

                        <hr class="mt-4 mb-4">

                        <div class="commentWrite">
                            <h3 class="mb-4"><b>Write comment:</b></h3>
                            <form action="#" method="post" id="commentForm" class="commentForm">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" name="author" type="text" value="" placeholder="Your Name*" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" name="email" type="text" value="" placeholder="Email*" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="comment" rows="8" placeholder="Comment*" required=""></textarea>
                                        </div>
                                    </div>
                                </div>
                                <input name="submit" type="submit" class="btn btn-primary px-3 py-2" value="Submit">
                            </form>
                        </div> <!-- commentWrite -->

                    </div> <!-- blogContent -->
                </div>
            </div>
        </div> <!-- blogDetailBox -->
        
    </section> <!-- end of #main -->

    <?php require_once('php-inc-cta-bottom.php'); ?>

<?php require_once('php-inc-footer.php'); ?>